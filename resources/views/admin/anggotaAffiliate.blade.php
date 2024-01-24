@extends('affiliate.template')

@section('title')
    Data Affiliasi Anda
@endsection

@section('content')
    <div class="mb-3 text-right">
        <a href="{{ url('app-affiliate/transaksi/beli-tourism-card') }}">
            <button type="button" class="btn  btn-sm btn-primary">Tambah Pembelian Tourism Card</button>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode Referal</th>
                                <th>Total Pembelian</th>
                                <th>Total Nominal Pembelian</th>
                                <th>Komisi (persen)</th>
                                <th>Total Komisi (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->code_reff }}</td>
                                    <td>{{ $data-> }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $commission_percent }}</td>
                                    <td>{{ $total_commission }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
