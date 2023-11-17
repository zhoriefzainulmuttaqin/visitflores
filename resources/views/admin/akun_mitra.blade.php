@extends('admin.template')

@section('title')
Akun Mitra
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/tambah/akun/mitra') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Akun Mitra</button>
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
                            <th>Nama Mitra</th>
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Username</th>
                            <th>Tipe - Nama Bisnis</th>
                            <th class="text-center">Aktifasi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $partner)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $partner->name }}</td>
                            <td>{{ $partner->email }}</td>
                            <td>{{ $partner->phone }}</td>
                            <td>{{ $partner->username }}</td>
                            <td>
                                <?php if($partner->type == 1) : ?>
                                    <?php 
                                    $tour = App\Models\Tour::where('id', $partner->child_id)->first();
                                    $tour_name = $tour->name;
                                    ?>
                                    Wisata - {{ $tour_name }}
                                <?php elseif($partner->type == 2) : ?>
                                    <?php 
                                    $shop = App\Models\Shop::where('id', $partner->child_id)->first();
                                    $shop_name = $shop->name;
                                    ?>
                                    Oleh-Oleh - {{ $shop_name }}
                                <?php elseif($partner->type == 3) : ?>
                                    <?php 
                                    $resto = App\Models\Restaurant::where('id', $partner->child_id)->first();
                                    $resto_name = $resto->name;
                                    ?>
                                    Kuliner - {{ $resto_name }}
                                <?php elseif($partner->type == 4) : ?>
                                    <?php 
                                    $accomodation = App\Models\Accomodation::where('id', $partner->child_id)->first();
                                    $accomodation_name = $accomodation->name;
                                    ?>
                                    Akomodasi - {{ $accomodation_name }}
                                <?php else : ?>
                                    Tidak Diketahui
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($partner->active == 1) : ?>
                                <span class="badge badge-success">Aktif</span>
                                <?php else : ?>
                                <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/kelola/akun/mitra/' . $partner->id) }}">
                                    <button type="button" class="btn btn-sm btn-secondary" title="kelola">
                                        <i class="fas fa-cog"></i>
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