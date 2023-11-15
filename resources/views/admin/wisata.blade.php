@extends('admin.template')

@section('title')
Wisata
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/data/wisata/kategori') }}">
        <button type="button" class="btn  btn-sm btn-warning"> Kelola Kategori</button>
    </a>
    <a href="{{ url('/app-admin/data/tambah/wisata') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Wisata</button>
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
                            <th>Kota/Kab</th>
                            <th>Kategori</th>
                            <th>No. Handphone</th>
                            <th>Alamat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $tour->name }}</td>
                            <td>{{ $tour->city }}</td>
                            <td>{{ $tour->category_name }}</td>
                            <td>{{ $tour->phone }}</td>
                            <td>{{ nl2br($tour->address) }}</td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/data/ubah/wisata/' . $tour->slug) }}">
                                    <button type="button" class="btn btn-sm btn-success" title="Ubah">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ url('app-admin/data/wisata/proses-hapus/' . $tour->slug) }}"
                                    onclick='return confirm("Apakah yakin hapus {{ $tour->name }}?")'>
                                    <button type="button" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="fas fa-trash"></i>
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