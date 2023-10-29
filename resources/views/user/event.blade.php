@extends('user.template')

@section('title')
    Event
@endsection

@section('cover')
    <?= url('assets/bg/imageevent.png') ?>
@endsection

@section('content')
    <div class="container-lg mt-5">
        <h1 class="mb-1">
            <b>Event Majestic</b>
        </h1>
        <div class="text-lg fs-3">
            Berikut ini event yang akan diselenggarakan
        </div>
        <div class="card my-5 shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="form-label fw-bold fs-4">Urutkan</label>
                            <select class="form-select" id="exampleFormControlSelect1">
                                <option>Tanggal Event Terbaru</option>
                                <option>Tanggal Event Terlama</option>
                                <option>Nama Event (A - Z)</option>
                                <option>Nama Event (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="cari" class="form-label fw-bold fs-4">Cari</label>
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control" id="cari"
                                        placeholder="cari event disini..">
                                    <button class="btn btn-secondary" type="button" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @for ($i = 0; $i < 10; $i++)
            <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-sm-0">
                    <div class="card shadow h-shadow-sm " style="border-radius: 40px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('assets/event.png') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title fs-3">
                                        Pentas Seni & Festifal Band
                                        <div class="text-lg fs-4 fw-lighter">
                                            Kantor Bupati, Cirebon
                                        </div>
                                    </h4>
                                    <br>
                                    <p class="card-text">
                                        <strong class="fs-5">Senin, 14 Agustus 2023</strong>
                                        <br>
                                        <font class="fs-5">
                                            Mulai Pukul 08.00
                                        </font>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow h-shadow-sm " style="border-radius: 40px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('assets/event.png') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title fs-3">
                                        Pentas Seni & Festifal Band
                                        <div class="text-lg fs-4 fw-lighter">
                                            Kantor Bupati, Cirebon
                                        </div>
                                    </h4>
                                    <br>
                                    <p class="card-text">
                                        <strong class="fs-5">Senin, 14 Agustus 2023</strong>
                                        <br>
                                        <font class="fs-5">
                                            Mulai Pukul 08.00
                                        </font>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor

    </div>
    <div class="clearfix mb-5"></div>
@endsection
