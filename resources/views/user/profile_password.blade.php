@extends("user.template_no_cover")

@section("title")
Password Profil
@endsection



@section("content")
 <div class="container">
        <div class="row my-6">
            <div class="">
                <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                    <div class="card" style="box-shadow: 0 5px 10px rgba(0,0,0,.2); border-radius: 10px;">
                        <div class="card-body">
                             <div class="form-main">
                            <div class="title">
                                <h3>Reset Password</h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                        <i class="uil fa-brands bi-dot text-dark"></i> {{ $error }} <br>
                                    @endforeach
                                </div>
                            @endif
                            <form action="<?= url('proses-ubah-password-profil'); ?>" class="form mb-0" method="post">
                                @csrf
                                <div class="row">
                                     @csrf
                                     <div class="col-lg-12 col-12">
                                        <input type="hidden" name="id" value="{{ Auth()->user()->id; }}">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" type="password" value="<?= (old('pasword')) ; ?>" class="form-control" placeholder="Masukan password . . ." required>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-12">
                                        <input type="hidden" name="id" value="{{ Auth()->user()->id; }}">
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <input name="password_confirmation" type="password" value="<?= (old('password_confirmation')) ; ?>" class="form-control" placeholder="Masukan konfirmasi password . . ." required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-2">
                                            <a class="btn btn-dark text-white" href="<?= url('profil') ?>">Kembali</a>
                                            <button type="submit" class="btn btn-dark float-end">Reset Password</button>
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