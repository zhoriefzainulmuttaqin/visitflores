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
                <article class="entry event col-6 mb-4">
                    <div
                        class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src='{{ url("assets/event/$event->cover_picture") }}'
                                    alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                            </a>
                        </div>
                        <div class="col-md-8 p-4">
                            <div class="entry-meta no-separator mb-1 mt-0">
                                <ul>
                                    <li><a class="text-uppercase disable-on-hover fw-medium">
                                            <?php
                                            $date = date_create($event->start_date);
                                            $days = config('app.days');
                                            $months = config('app.months');
                                            $hari = $days[date_format($date, 'l')];
                                            $tanggal = date_format($date, 'd');
                                            $bulan = $months[date_format($date, 'F')];
                                            $tahun = date_format($date, 'Y');
                                            echo "$hari, $tanggal $bulan $tahun";
                                            ?>
                                            <br>
                                            Mulai Pukul {{ $event->start_time }} - {{ $event->end_time }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-title nott">
                                <h3>{{ $event->name }}</h3>
                            </div>
                            <div class="entry-content my-3">
                                <p class="mb-0">{{ $event->details }}</p>
                            </div>
                            <div class="entry-meta no-separator">
                                <ul>
                                    <li><a href="#" class="fw-normal"><i
                                                class="uil uil-map-marker"></i>{{ $event->location }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            {{ $events->links('vendor.pagination.canvas') }}
        </div>

    </div>
    <div class="clearfix mb-5"></div>
@endsection
