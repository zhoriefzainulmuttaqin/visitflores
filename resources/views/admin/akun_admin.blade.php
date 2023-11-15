@extends('admin.template')

@section('title')
Akun Admin
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/tambah/akun/admin') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Akun Admin</button>
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
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Username</th>
                            <th class="text-center">Aktifasi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->phone }}</td>
                            <td>{{ $admin->username }}</td>
                            <td class="text-center">
                                <?php if($admin->active == 1) : ?>
                                <span class="badge badge-success">Aktif</span>
                                <?php else : ?>
                                <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/kelola/akun/admin/' . $admin->id) }}">
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