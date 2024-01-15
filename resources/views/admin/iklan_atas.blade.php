@extends('admin.template')

@section('title')
    Iklan Atas
@endsection

@section('content')
    <div class="mb-3 text-right">
        <a href="{{ url('/app-admin/data/iklan') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Semua Iklan</button>
        </a>
        <a href="{{ url('/app-admin/data/iklan_bawah') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Iklan Bawah</button>
        </a>
        <a href="{{ url('/app-admin/data/iklan_popup') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Iklan Popup</button>
        </a>
        <a href="{{ url('/app-admin/data/tambah/iklan') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Tambah Iklan</button>
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
                                <th>Slug</th>
                                <th>Picture</th>
                                <th>Status</th>
                                <th>Aktif</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($iklan as $ads)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $ads->slug }}</td>
                                    <td class="text-center">
                                        <img src='{{ url("/assets/iklan/$ads->picture") }}'
                                            class="img-preview mb-3 img-fluid" style="height: auto; widht: auto;">
                                    </td>                                    <td class="text-center">
                                        @if ($ads->status == 1)
                                            <span>Iklan Atas</span>
                                        @elseif ($ads->status == 2)
                                            <span>Iklan Bawah</span>
                                        @else
                                            <span>Iklan Popup</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($ads->active_status == 1)
                                            <small class="btn btn-small btn-success"><i class="fas fa-check"></i></small>
                                        @else
                                            <small class="btn btn-small btn-danger">X</small>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href='{{ url("/app-admin/data/iklan/ubah/$ads->slug") }}'>
                                            <button type="button" class="btn btn-sm btn-success" title="Ubah"><i
                                                    class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/iklan/hapus/$ads->slug") }}"
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
