@extends("user.template_no_cover")

@section("title")
Biodata Profil
@endsection



@section("content")
 <div class="container">
        <div class="row my-5">
            <div class="">
                <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                    <div class="card" style="box-shadow: 0 5px 10px rgba(0,0,0,.2); border-radius: 10px;">
                        <div class="card-body">
                             <div class="form-main">
                            <div class="title">
                                <h3>Ubah Biodata Diri</h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                        <i class="uil fa-brands bi-dot text-dark"></i> {{ $error }} <br>
                                    @endforeach
                                </div>
                            @endif
                            <form action="<?= url('proses-ubah-biodata-profil'); ?>" class="form mb-0" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="hidden" name="id" value="{{ Auth()->user()->id }}">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="name" type="text" value="<?= (old('name')) ? old('name') : Auth()->user()->name;; ?>" class="form-control" placeholder="Masukan nama . . ." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <input name="phone" type="text" value="<?= (old('phone')) ? old('phone') : Auth()->user()->phone; ?>" class="form-control" placeholder="Masukan nomor handphone . . ." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label>username</label>
                                            <input name="username" type="text" value="<?= (old('username')) ? old('username') : Auth()->user()->username;; ?>" class="form-control" placeholder="Masukan username . . ." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" value="<?= (old('email')) ? old('email') : Auth()->user()->email;; ?>" class="form-control" placeholder="Masukan email . . ." required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Alamat</label>
                                            <textarea name="address" value="<?= (old('address')) ? old('address') : Auth()->user()->address;; ?>" class="form-control" placeholder="Masukan alamat . . ." ><?= (old('address')) ? old('address') : Auth()->user()->address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-2">
                                            <a class="btn btn-dark text-white" href="<?= url('profil') ?>">Kembali</a>
                                            <button type="submit" class="btn btn-dark float-end">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
