@extends('admin.template')

@section('title')
    Kelola Akun Affiliators
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header text-white bg-success">
                    Profil
                </div>
                <div class="card-body">
                    <form class="fr-login" action="<?= url('app-admin/akun/affiliators/proses-ubah') ?>" method="post">
                        @csrf
                        <div class="form-floating form-login">
                            <input type="hidden" name="affiliators" value="{{ $dataAccount->id }}">

                            <div class="mb-2">
                                <label for="name"> Nama </label>
                                <input type="text" value="<?= old('name') ? old('name') : $dataAccount->name ?>"
                                    class="form-control shadow-none @error('name')is-invalid @enderror" name="name"
                                    id="name" placeholder="Nama" required autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="email"> Email </label>
                                <input type="email" value="<?= old('email') ? old('email') : $dataAccount->email ?>"
                                    class="form-control shadow-none @error('email')is-invalid @enderror" name="email"
                                    id="email" placeholder="Email" required autocomplete="off">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="phone"> No. Handphone </label>
                                <input type="text" value="<?= old('phone') ? old('phone') : $dataAccount->phone ?>"
                                    class="form-control shadow-none @error('phone')is-invalid @enderror" name="phone"
                                    id="phone" placeholder="No. Handphone" required autocomplete="off">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="username"> Username </label>
                                <input type="text"
                                    value="<?= old('username') ? old('username') : $dataAccount->username ?>"
                                    class="form-control shadow-none @error('username')is-invalid @enderror" name="username"
                                    id="username" placeholder="username" required autocomplete="off">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="norek"> Nomor Rekening </label>
                                <input type="text" value="<?= old('norek') ? old('norek') : $dataAccount->norek ?>"
                                    class="form-control shadow-none @error('norek')is-invalid @enderror" name="norek"
                                    id="norek" placeholder="norek" required autocomplete="off">
                                @error('norek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="address"> Alamat </label>
                                <input type="text" value="<?= old('address') ? old('address') : $dataAccount->address ?>"
                                    class="form-control shadow-none @error('address')is-invalid @enderror" name="address"
                                    id="address" placeholder="address" required autocomplete="off">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2 my-3">
                                <label for="code_reff"> Kode Referral </label>
                                <input type="text"
                                    value="<?= old('code_reff') ? old('code_reff') : $dataAccount->code_reff ?>"
                                    class="form-control shadow-none @error('code_reff')is-invalid @enderror"
                                    name="code_reff" id="code_reff" placeholder="code_reff" required autocomplete="off">
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
                                        <?php
                                        if ($dataAccount->location_id == $wil->id) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        ?>
                                        <option value="{{ $wil->id }}" {{ $selected }}>{{ $wil->name }}</option>
                                    @endforeach
                                    </option>
                                </select>
                            </div>
                            <div class="mb-2 my-3">
                                <label for="commission_percent"> Persentase Komisi </label>
                                <input type="text"
                                    value="<?= old('commission_percent') ? old('commission_percent') : $dataAccount->commission_percent ?>"
                                    class="form-control shadow-none @error('commission_percent')is-invalid @enderror"
                                    name="commission_percent" id="commission_percent" placeholder="commission_percent" required autocomplete="off">
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
                                    <option value="1" {{ $dataAccount->status == 1 ? 'selected' : '' }}>Ketua Wilayah
                                    </option>
                                    <option value="2" {{ $dataAccount->status == 2 ? 'selected' : '' }}>Anggota
                                    </option>
                                </select>
                            </div>
                            <div class="mb-2 my-3">
                                <label for="ktp" class="form-label">Gambar</label>
                                <br>
                                <img id="addImage" src='{{ url("/assets/affiliators/$dataAccount->ktp") }}'
                                    class="img-preview mb-3 img-fluid" style="max-height: 300px; width: auto;">
                                <input class="form-control @error('ktp') is-invalid @enderror" type="file" name="ktp"
                                    id="ktp" onchange="previewImage()">
                                @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label>Status Aktif</label>
                                <br>
                                <label>
                                    <input type='radio' name='active' <?php echo $dataAccount->active == 1 ? 'checked' : ''; ?> value="1">
                                    Aktif
                                </label>
                                <label class="ml-2">
                                    <input type='radio' name='active' <?php echo $dataAccount->active == 0 ? 'checked' : ''; ?> value="0">
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
                    <form action="<?= url('app-admin/akun/affiliators/proses-reset-password') ?>" method="post">
                        @csrf
                        <input type="hidden" name="id" value="<?= $dataAccount->id ?>">
                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input type="password"
                                class="form-control shadow-none @error('password') is-invalid @enderror" name="password"
                                id="password" placeholder="Password" value="<?= old('password') ?>" autocomplete="off"
                                required>
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

@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function previewImage() {
            const ktp = document.querySelector('#ktp');
            const imgPreview = document.querySelector('#addImage');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(ktp.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection
