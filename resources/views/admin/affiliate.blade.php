@extends('admin.template')

@section('title')
    Akomodasi
@endsection

@section('content')
    <div class="mb-3 text-right">
        <a href="{{ url('/app-admin/data/tambah/akomodasi') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Tambah Akomodasi</button>
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
                                <th>Harga Mulai</th>
                                <th class="text-center">Mitra</th>
                                <th>No. HP</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accomodations as $accomodation)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $accomodation->name }}</td>
                                    <td>Rp.{{ number_format($accomodation->price_start_from, 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        @if ($accomodation->mitra_status == 1)
                                            <small class="btn btn-small btn-success"><i class="fas fa-check"></i></small>
                                        @else
                                            <small class="btn btn-small btn-danger">X</small>
                                        @endif
                                    </td>
                                    <td>{{ $accomodation->phone }}</td>
                                    <td class="text-center">
                                        <a href='{{ url("/app-admin/data/ubah/akomodasi/$accomodation->slug") }}'>
                                            <button type="button" class="btn btn-sm btn-success" title="Ubah"><i
                                                    class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/galeri/akomodasi/$accomodation->slug") }}">
                                            <button type="button" class="btn btn-sm btn-warning" title="galeri"><i
                                                    class="fas fa-image"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/link/akomodasi/$accomodation->slug") }}">
                                            <button type="button" class="btn btn-sm btn-info" title="link"><i
                                                    class="fas fa-link"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/hapus/akomodasi/$accomodation->slug") }}"
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
