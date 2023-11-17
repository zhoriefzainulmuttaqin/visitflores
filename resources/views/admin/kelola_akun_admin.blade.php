@extends('admin.template')

@section('title')
Kelola Akun Admin
@endsection

@section('content')
<div class="row mt--2">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header text-white bg-success">
                    Profil
                </div>
                <div class="card-body">
                     <form class="fr-login" action="<?= url('app-admin/akun/admin/proses-ubah') ?>" method="post">
                                  @csrf
                                <div class="form-floating form-login">
                                    <input type="hidden" name="id" value="<?= $dataAccount->id; ?>">
                                    <div class="mb-2">
                                        <label for="name"> Nama </label>
                                        <input type="text" value="<?= (old('name')) ? old('name') : $dataAccount->name ?>" class="form-control shadow-none @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama" required autocomplete="off">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-2 my-3">
                                        <label for="email"> Email </label>
                                        <input type="email" value="<?= (old('email')) ? old('email') : $dataAccount->email ?>" class="form-control shadow-none @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required autocomplete="off">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-2 my-3">
                                        <label for="phone"> No. Handphone </label>
                                        <input type="text" value="<?= (old('phone')) ? old('phone') : $dataAccount->phone ?>" class="form-control shadow-none @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="No. Handphone" required autocomplete="off">
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-2 my-3">
                                        <label for="username"> Username </label>
                                        <input type="text" value="<?= (old('username')) ? old('username') : $dataAccount->username ?>" class="form-control shadow-none @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required autocomplete="off">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mt-2">
                                        <label>Status Aktifasi</label>
                                        <br>
                                        <label>
                                            <input type='radio' name='status' <?php echo $dataAccount->active == 1 ? "checked" : ""; ?> value="1">
                                            Aktif
                                        </label>
                                        <label class="ml-2">
                                            <input type='radio' name='status' <?php echo $dataAccount->active == 0 ? "checked" : ""; ?> value="0">
                                            Tidak Aktif
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="w-100 btn btn-success" type="submit">Ubah</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header text-white bg-warning">
                    Reset Password
                </div>
                <div class="card-body">
                    <form action="<?= url('app-admin/akun/admin/proses-reset-password') ?>" method="post">
                        @csrf
                        <input type="hidden" name="id" value="<?= $dataAccount->id ?>">
                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input type="password" class="form-control shadow-none @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" value="<?= old('password') ?>"
                                autocomplete="off" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"> Kofirmasi Password</label>
                            <input required type="password"
                                class="form-control shadow-none @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password"
                                value="<?= old('password_confirmation') ?>" autocomplete="off">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <button class="w-100 btn btn-warning btn-round" type="submit">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection