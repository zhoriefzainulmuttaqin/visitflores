@extends('affiliate.template')

@section('title')
    Dashboard
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $affiliate->affiliators->nama }}</h3>
                    <p>Pendapatan Saya</p>
                </div>
                <div class="icon">
                    <i class="fa fa-map-marked"></i>
                </div>
                <a href="{{ url('app-admin/data/wisata') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $affiliate->affiliators->nama }}</h3>
                    <p>Kuliner</p>
                </div>
                <div class="icon">
                    <i class="fa fa-utensils"></i>
                </div>
                <a href="{{ url('app-admin/data/kuliner') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $affiliate->affiliators->nama }}</h3>
                    <p>Oleh - Oleh</p>
                </div>
                <div class="icon">
                    <i class="fa fa-gift"></i>
                </div>
                <a href="{{ url('app-admin/data/oleholeh') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $affiliate->affiliators->nama }}</h3>
                    <p>Akomodasi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ url('app-admin/data/akomodasi') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div> --}}


    {{-- <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Transaksi Paket Oleh - oleh Terbaru
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable2">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama Pembeli</th>
                            <th class="text-center">Paket</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($affiliate as $aff)
                            <tr>
                                <td class="text-center">{{ $aff->affiliators->location_id }}</td>
                                <td>{{ $aff->user->name }}</td>
                                @foreach ($aff->items as $item)
                                    <td>{{ $item->snapshot_name }}</td>
                                    <td class="text-center">
                                        {{ $item->quantity }}
                                        {{ $item->snapshot_unit }}
                                    </td>
                                    <td class="text-right">
                                        Rp. {{ number_format($item->snapshot_price, 0, ',', '.') }}
                                    </td>
                                    <td class="text-right">
                                        <?php
                                        $total = $item->snapshot_price * $item->quantity;
                                        ?>
                                        Rp. {{ number_format($total, 0, ',', '.') }}
                                    </td>
                                @endforeach
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
    </div> --}}
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
