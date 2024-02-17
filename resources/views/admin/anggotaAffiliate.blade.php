@extends('admin.template')

@section('title')
    Data Anggota {{ $ketua->name }}
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
                                <th>Total Komisi</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_your_commissions = 0; // Move this line outside the loop
                                $total_commission = 0; // Move this line outside the loop
                            @endphp

                            @foreach ($data as $items)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $items['anggota']->name }}</td>
                                    <td>{{ $items['anggota']->code_reff }}</td>
                                    <td>{{ $items['anggota']->commission_percent }}%</td>
                                    <td>{{ number_format($items['total_commission'], 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        <a
                                            href="{{ url('app-admin/affiliate/anggota/' . $items['anggota']->id) }}">
                                            <button type="button" class="btn btn-sm btn-secondary" title="kelola">
                                                Lihat Detail
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                @php
                                    $total_your_commissions += $items['total_your_commission'];
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
