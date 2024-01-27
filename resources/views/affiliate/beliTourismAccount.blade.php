@extends('affiliate.template')

@section('title')
    Pembelian Tourism Card
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar dan Belikan Tourism Card</h3>
                </div>
                <form method="post" action="{{ route('konfirmasi-daftar-process') }}" class="mt-5">
                    @csrf
                    <input type="hidden" name="active" value="1">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="register-form-name">Nama</label>
                            <input type="text" id="register-form-name" name="name" value="{{ old('name') }}"
                                class="form-control" placeholder="Nama Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="register-form-email">Email</label>
                            <input type="text" id="register-form-email" name="email" value="{{ old('email') }}"
                                class="form-control" placeholder="pengguna@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="register-form-username">Username</label>
                            <input type="text" id="register-form-username" name="username" value="{{ old('username') }}"
                                class="form-control" placeholder="Username Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="register-form-phone">No. Handphone</label>
                            <input type="number" id="register-form-phone" name="phone" placeholder="08xxxxxxxxxx" value="{{ old('phone') }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address"> Alamat </label>
                            <textarea class="form-control" name="address" id="address" placeholder="Alamat Pengguna" required autocomplete="off"
                                required>{{ old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="register-form-password">Password</label>
                            <input type="password" id="register-form-password" name="password" value="{{ old('password') }}"
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="register-form-repassword">Konfirmasi Password</label>
                            <input type="password" id="register-form-repassword" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="code_reff"> Kode Referral </label>
                            <input type"text" class="form-control" name="code_reff"
                                id="code_reff" placeholder="Kode Referral"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('app-affiliate/transaksi/beli-tourism-card') }}">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    <script>

    </script>
@endsection
