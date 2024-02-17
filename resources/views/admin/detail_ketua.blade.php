@extends('admin.template')

@section('title')
    Data Affiliasi {{ $anggota->name }}
@endsection

@section('content')
    <div class="mb-3 text-right">
        <a href="{{ url('/app-admin/affiliate/ketua') }}">
            <button type="button" class="btn  btn-sm btn-primary">Kembali ke data ketua</button>
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
                                <th>Persentase Komisi</th>
                                <th>Nominal Komisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tourismSale as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->time_paid }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->code_reff }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ number_format($data->price, 0, ',', '.') }}</td>
                                    <td>{{ $anggota->commission_percent }}%</td>
                                    <td>{{ number_format($commission_idr, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="mt-5">
                        <th class="">Total Komisi {{ $anggota->name }} adalah: </th>
                        <th>{{ number_format($total_commission, 0, ',', '.') }}</th>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
