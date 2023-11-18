@extends('admin.template')

@section('title')
Tambah Akun Admin
@endsection

@section('content')
<form method="POST" action="{{ url('app-admin/akun/admin/proses-tambah') }}" enctype="multipart/form-data">
<div class="row mt--2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Akun Admin</h3>
            </div>
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Nama </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Masukan Nama . . . " value="{{ old('name') }}" required
                            autocomplete="off">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Masukan Email . . . " value="{{ old('email') }}" required
                            autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone"> No. Handphone </label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            id="phone" placeholder="Masukan No. Handphone . . . " value="{{ old('phone') }}" required
                            autocomplete="off">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username"> Username </label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            id="username" placeholder="Masukan Username . . . " value="{{ old('username') }}" required
                            autocomplete="off">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Masukan Password . . . " value="{{ old('password') }}" required
                            autocomplete="off">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"> Konfirmasi Password </label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                            id="password_confirmation" placeholder="Masukan Konfirmasi Password . . . " value="{{ old('password_confirmation') }}" required
                            autocomplete="off">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= url('app-admin/akun/admin') ?>">
                        <button type="button" class="btn btn-danger float-left">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </div>
        </div>
    </div>
</div>
</form>
@endsection