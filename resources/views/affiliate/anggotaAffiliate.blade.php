@extends('affiliate.template')

@section('title')
    Data Anggota Anda
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
                                <th>Kode Referral</th>
                                <th>Persentase Komisi</th>
                                <th>Nominal Komisi</th>
                                <th>Komisi Anda</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $items)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $items['anggota']->name }}</td>
                                    <td>{{ $items['anggota']->code_reff }}</td>
                                    <td>{{ $items['anggota']->commission_percent }}%</td>
                                    <td>{{ number_format($items['commission_idr'], 0, ',', '.') }}</td>
                                    <td>{{ number_format($items['your_commission_idr'], 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/app-affiliate/data/affiliate/anggota/' . $items['anggota']->id) }}">
                                            <button type="button" class="btn btn-sm btn-secondary" title="kelola">
                                               Lihat Detail
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="mt-5">
                        <th class="">Total Komisi Anda dari anggota: </th>
                        @foreach ($data as $datas)

                        @endforeach
                        <td> Rp{{ number_format($datas['total_your_commission'], 0, ',', '.') }}</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
