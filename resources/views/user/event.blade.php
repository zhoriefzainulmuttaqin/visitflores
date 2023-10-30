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
                <form action="" method="get" class="row  align-items-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="form-label fw-bold fs-4">Urutkan</label>
                            <select class="form-select" name="order" id="exampleFormControlSelect1" onchange="submit()">
                                <option {{ $order == 'published_date,desc' ? 'selected' : '' }} value="published_date,desc">
                                    Tanggal
                                    Event Terlama</option>
                                <option {{ $order == 'published_date,asc' ? 'selected' : '' }} value="published_date,asc">
                                    Tanggal Event Terbaru
                                </option>
                                <option {{ $order == 'name,asc' ? 'selected' : '' }} value="name,asc">Nama Event (A - Z)
                                </option>
                                <option {{ $order == 'name,desc' ? 'selected' : '' }} value="name,desc">Nama Event (Z - A)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="cari" class="form-label fw-bold fs-4">Cari</label>
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" id="cari"
                                    value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="keyword"
                                    placeholder="cari event disini..">
                                <button class="btn btn-secondary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                    @if (isset($_GET['keyword']))
                        <a href="{{ url('event') }}" class="text-primary"><span>Tampilkan semua data..</span></a>
                    @endif
                </form>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($events as $event)
                <div class="col-md-6 mb-4">
                    <div class="card shadow h-shadow-sm overflow-hidden" style="border-radius: 40px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src='{{ url("assets/event/$event->cover_picture") }}' class="img-fluid w-100 h-100"
                                    alt="{{ $event->name }}">
                            </div>
                            <div class="col-md-8 ps-3 pe-1">
                                <h4 class="card-title fs-3">
                                    {{ $event->name }}
                                    <div class="text-lg fs-4 fw-lighter">
                                        {{ $event->location }}
                                    </div>
                                </h4>
                                <br>
                                <p class="card-text">
                                    <strong class="fs-5">
                                        <?php
                                        $date = date_create($event->star_date);
                                        $days = config('app.days');
                                        $months = config('app.months');
                                        $hari = $days[date_format($date, 'l')];
                                        $tanggal = date_format($date, 'd');
                                        $bulan = $months[date_format($date, 'F')];
                                        $tahun = date_format($date, 'Y');
                                        echo "$hari, $tanggal $bulan $tahun";
                                        ?>
                                    </strong>
                                    <br>
                                    <font class="fs-5">
                                        Mulai Pukul {{ $event->star_time }} - {{ $event->end_time }}
                                    </font>
                                    <br>
                                    <font class="fs-5 fw-light">
                                        {{ $event->details }}
                                    </font>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="clearfix mb-5"></div>
@endsection
