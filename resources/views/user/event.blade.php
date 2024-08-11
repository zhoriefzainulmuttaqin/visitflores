@extends('user.template')

@section('title')
    {{ __('event.title') }}
@endsection

@section('cover')
    <?= url('assets/bg/event.jpg') ?>
@endsection

@section('content')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-26YC4R3P36"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-26YC4R3P36');
    </script>

    <div class="container-lg mt-5">
        <h1 class="mb-1">
            <b>{{ __('event.heading') }}</b>
        </h1>
        <div class="text-lg fs-3">
            {{ __('event.desc') }}
        </div>
        <div class="card my-5 shadow">
            <div class="card-body">
                <form action="" method="get" class="row  align-items-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"
                                class="form-label fw-bold fs-4">{{ __('event.label_order') }}</label>
                            <select class="form-select" name="order" id="exampleFormControlSelect1" onchange="submit()">
                                <option {{ $order == 'published_date,desc' ? 'selected' : '' }} value="published_date,desc">
                                    {{ __('event.option_1_order') }}</option>
                                <option {{ $order == 'published_date,asc' ? 'selected' : '' }} value="published_date,asc">
                                    {{ __('event.option_2_order') }}
                                </option>
                                <option {{ $order == 'name,asc' ? 'selected' : '' }} value="name,asc">
                                    {{ __('event.option_3_order') }}
                                </option>
                                <option {{ $order == 'name,desc' ? 'selected' : '' }} value="name,desc">
                                    {{ __('event.option_4_order') }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="cari" class="form-label fw-bold fs-4">{{ __('event.search') }}</label>
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" id="cari"
                                    value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="keyword"
                                    placeholder="{{ __('event.placeholder_search') }}">
                                <button class="btn btn-secondary" type="submit"
                                    id="button-addon2">{{ __('event.search') }}</button>
                            </div>
                        </div>
                    </div>
                    @if (isset($_GET['keyword']))
                        <a href="{{ url('event') }}"
                            class="text-primary"><span>{{ __('event.show_all_data') }}</span></a>
                    @endif
                </form>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($events as $event)
                <article class="entry event col-lg-6 col-md-6 col-sm-12 mb-4 d-flex align-items-stretch">
                    <div class="grid-inner bg-white row g-0 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 mb-md-0 w-100">
                            <a class="entry-image mb-0 h-100">
                                <img src='{{ url("assets/event/$event->cover_picture") }}'
                                    alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
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
                                            if (App::isLocale('id')) {
                                                echo "$hari, $tanggal $bulan $tahun";
                                            } else {
                                                echo date_format($date, 'l, d F Y');
                                            }
                                            ?>
                                            <br>
                                            {{ __('event.start_at') }} {{ $event->start_time }} - {{ $event->end_time }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-title nott">
                                @if (App::isLocale('id'))
                                    <h3>{{ $event->name }}</h3>
                                @else
                                    <h3>{{ $event->name_en }}</h3>
                                @endif
                            </div>
                            <div class="entry-meta no-separator">
                                <ul>
                                    <li><a href="#" class="fw-normal"><i
                                                class="uil uil-map-marker"></i>{{ nl2br($event->location) }}</a>
                                    </li>
                                    <li>
                                        <a class="text-warning" href="{{ $event->link_maps }}">Lihat Maps</a>
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
