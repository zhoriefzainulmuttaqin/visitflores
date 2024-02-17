@extends('admin.template')

@section('title')
    Data Affiliate
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Wilayah</th>
                                <th>Status</th>
                                <th>Kode Referral</th>
                                <th>Persentase Komisi</th>
                                <th>Total Komisi</th>
                                <th>Anggota</th>
                                {{-- <th>Total Komisi Anggota</th> --}}
                                <th>Aktif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $komisiKetua = [];
                                $komisiAnggota = [];
                            @endphp
                            @foreach ($ketua as $data)
                                @php
                                    $total_komisi_ketua = 0;
                                    $jumlah_anggota = 0;
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->location->name }}</td>
                                    <td class="text-center">
                                        <?php if($data->status == 1) : ?>
                                        <span class="badge badge-primary">Ketua Wilayah</span>
                                        <?php else : ?>
                                        <span class="badge badge-success">Anggota</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>{{ $data->code_reff }}</td>
                                    <td>{{ $data->commission_percent }}%</td>
                                    <td class="text-right">
                                        @foreach ($transaction as $card)
                                            @php
                                                if ($card->code_reff == $data->code_reff) {
                                                    $komisi_ketua = ($data->commission_percent / 100) * $card->price;
                                                    $total_komisi_ketua += $komisi_ketua;
                                                }
                                            @endphp
                                        @endforeach
                                        Rp. {{ number_format($total_komisi_ketua, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        @php
                                            $jumlah_anggota = $jml_anggota->where('location_id', $data->location_id)->count();
                                            $jumlah_anggota;
                                        @endphp
                                        {{ $jumlah_anggota }}
                                    </td>
                                    {{-- <td class="text-right">
                                        @php
                                            $total_komisi_anggota = 0;
                                            foreach ($anggota as $aff) {
                                                foreach ($transaction as $trans) {
                                                    if ($trans->code_reff == $aff->code_reff) {
                                                        $komisi_anggota = ($aff->commission_percent / 100) * $trans->price;
                                                        $total_komisi_anggota += $komisi_anggota;
                                                    }
                                                }
                                            }
                                        @endphp
                                        Rp. {{ number_format($total_komisi_anggota, 0, ',', '.') }}
                                    </td> --}}
                                    <td class="text-center">
                                        <?php if($data->active == 1) : ?>
                                        <span class="badge badge-success">Aktif</span>
                                        <?php else : ?>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('/app-admin/affiliate/ketua/' . $data->id) }}">
                                            <button type="button" class="btn btn-sm btn-secondary" title="Detail Transaksi Ketua">
                                                Lihat Detail
                                            </button>
                                        </a>
                                        <a href="{{ url('app-admin/affiliate/anggota/ketua/' . $data->id) }}">
                                            <button type="button" class="btn btn-sm btn-secondary" title="Detail Anggota">
                                                Detail Anggota
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
