@extends('admin.template')

@section('title')
Akun Affiliators
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/tambah/akun/affiliators') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Akun Affiliators</button>
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
                            <th>Nama Affiliators</th>
                            <th>KTP</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Nomor Rekening</th>
                            <th>Wilayah</th>
                            <th>Kode Referral</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Active</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($affiliators as $aff)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $aff->name }}</td>
                            <td><button class="btn btn-primary">Lihat KTP</button></td>
                            <td>{{ $aff->username }}</td>
                            <td>{{ $aff->email }}</td>
                            <td>{{ $aff->phone }}</td>
                            <td>{{ $aff->norek }}</td>
                            <td>{{ $aff->location->name }}</td>
                            <td>{{ $aff->code_reff }}</td>
                            <td>{{ $aff->address }}</td>
                            <td class="text-center">
                                <?php if($aff->status == 1) : ?>
                                <span class="badge badge-primary">Ketua Wilayah</span>
                                <?php else : ?>
                                <span class="badge badge-success">Anggota</span>
                                <?php endif; ?>
                            </td>                            <td class="text-center">
                                <?php if($aff->active == 1) : ?>
                                <span class="badge badge-success">Aktif</span>
                                <?php else : ?>
                                <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/kelola/akun/affiliators/' . $aff->id) }}">
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
