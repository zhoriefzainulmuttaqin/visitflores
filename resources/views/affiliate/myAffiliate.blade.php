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
                                <th>Tanggal</th>
                                <th>Nama Pengguna</th>
                                <th>Kode Referal</th>
                                <th>Jumlah Beli</th>
                                <th>Jumlah Nominal</th>
                                <th>Komisi (persen)</th>
                                <th>Komisi (IDR)</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tourismSale as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->date_confirmed }}</td>
                                    <td>{{ $data->referal }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->affiliate->commission_percent }}</td>
                                    <td>{{ $data->affiliate->commission_idr }}</td>

                                    <td class="text-center">
                                        <a href='{{ url("/app-admin/data/ubah/data/$data->id") }}'>
                                            <button type="button" class="btn btn-sm btn-success" title="Ubah"><i
                                                    class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/hapus/data/$data->id") }}"
                                            onclick="return confirm('Apakah anda yakin hapus?.')">
                                            <button type="button" class="btn btn-sm btn-danger" title="hapus"><i
                                                    class="fas fa-trash"></i></button>
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
