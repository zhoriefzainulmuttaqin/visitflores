@extends('affiliate.template')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">

                    <h3>{{ $jmlAnggota }}</h3>
                    <p>Anggota</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ url('app-admin/data/wisata') }}" class="small-box-footer">Lihat Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ array_sum($totalCommissions) }}</h3>
                    <p>Pendapatan Anggota</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money-bill"></i>
                </div>
                <a href="{{ url('app-admin/data/kuliner') }}" class="small-box-footer">Lihat Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $myCommission }} + {{ array_sum($yourCommissions) }}</h3>
                    <p>Pendapatan Saya</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-invoice-dollar"></i>
                </div>
                <a href="{{ url('app-admin/data/oleholeh') }}" class="small-box-footer">Lihat Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $mydata->location->name }}</h3>
                    <p>Wilayah</p>
                </div>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <a href="{{ url('app-admin/data/akomodasi') }}" class="small-box-footer">Lihat Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Transaksi Tourism Card Terbaru
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable2">
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
                        @foreach ($myTransaction as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $data->time_paid }}</td>
                            <td>{{ $data->affiliators->name }}</td>
                            <td>{{ $data->code_reff }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ number_format($data->price, 0, ',', '.') }}</td>
                            <td>{{ $data->affiliators->commission_percent }}%</td>
                            @if (array_key_exists($data->affiliators->code_reff, $Commissions))
                                <td>{{ number_format($Commissions[$data->affiliators->code_reff], 0, ',', '.') }}</td>
                            @else
                                <td>Commission not available</td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{ url('app-admin/transaksi/paket-oleholeh') }}" class="btn btn-primary btn-block mt-5">
                    Lihat Data
                    <i class='fa fa-arrow-circle-right'></i>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('#datatable2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "order": [],
            });
        });
    </script>
@endsection
