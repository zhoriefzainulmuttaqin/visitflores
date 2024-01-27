@extends('admin.template')

@section('title')
Tambah Akun Mitra
@endsection

@section('content')
<form method="POST" action="{{ url('app-admin/akun/affiliators/proses-tambah') }}" enctype="multipart/form-data">
<div class="row mt--2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Akun Affiliators</h3>
            </div>
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Nama Affiliator </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Nama" value="{{ old('name') }}" required
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
                            id="email" placeholder="contoh@email.com" value="{{ old('email') }}" required
                            autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone"> No. Handphone </label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
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
                    <div class="form-group">
                        <label for="norek"> Nomor Rekening </label>
                        <input type="number" class="form-control @error('norek') is-invalid @enderror" name="norek"
                            id="norek" placeholder="nomor rekening" value="{{ old('norek') }}" required
                            autocomplete="off">
                        @error('norek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address"> Alamat </label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                            id="address" placeholder="alamat" value="{{ old('address') }}" required
                            autocomplete="off">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_reff"> Kode Referral </label>
                        <input type="text" class="form-control @error('code_reff') is-invalid @enderror" name="code_reff"
                            id="code_reff" placeholder="K = Kuningan M = Majalengka I = Indramayu" value="{{ old('code_reff') }}" required
                            autocomplete="off">
                        @error('code_reff')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2 my-3">
                        <label for="location_id">Wilayah</label>
                        <select class="form-control" id="location_id" required name="location_id">
                            <option value="">--- Pilih Wilayah ---</option>
                            @foreach ($wilayah as $wil)

                                <option value="{{ $wil->id }}">{{ $wil->name }}</option>
                            @endforeach
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="commission_percent"> Persentase Komisi </label>
                        <input type="text" class="form-control @error('commission_percent') is-invalid @enderror" name="commission_percent"
                            id="commission_percent" placeholder="20" value="{{ old('commission_percent') }}" required
                            autocomplete="off">
                        @error('commission_percent')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2 my-3">
                        <label for="status">Pilih Status</label>
                        <select class="form-control" id="status" required name="status">
                            <option value="">--- Pilih Status ---</option>
                            <option value="1">Ketua Wilayah
                            </option>
                            <option value="2">Anggota
                            </option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label>Status Aktif</label>
                        <br>
                        <label>
                            <input type='radio' name='active' value="1">
                            Aktif
                        </label>
                        <label class="ml-2">
                            <input type='radio' name='active' value="0">
                            Tidak Aktif
                        </label>
                    </div>
                </div>
                </div>
                <div class="card-footer">
                    <a href="<?= url('app-admin/akun/affiliators') ?>">
                        <button type="button" class="btn btn-danger float-left">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('script')
    <script type="text/javascript">
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#type").change(function() {
            $.ajax({
                url: "<?= url('app-admin/akun/affiliators/pilih-tipe') ?>",
                type: "get",
                data: {
                    type: $('#type').val(),
                },
                success: function(data) {
                    $("#select_type").replaceWith(data)
                }
            });
        });
    </script>
@endsection
