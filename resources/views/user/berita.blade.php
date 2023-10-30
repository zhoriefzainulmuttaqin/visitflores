@extends('user.template')

@section('title')
    Berita
@endsection

@section('cover')
    <?= url('assets/berita/bg.png') ?>
@endsection

@section('content')
    <div class="container-lg mt-5">
        <h1 class="mb-1">
            <b>Berita</b>
        </h1>
        <div class="text-lg fs-3">
            Berikut ini berita terkini.
        </div>

        <div class="row my-5">
            <div class="col col-md-8 mb-3 mb-sm-0">
                <?php
                $i = 0;
                ?>
                @foreach ($news as $new)
                    @if ($i <= $batas)
                        <?php
                        $i++;
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-5 shadow-sm h-shadow all-ts h-translate-y-sm overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="{{ url("assets/berita/$new->cover_picture") }}"
                                                class="img-fluid w-100 h-100">
                                        </div>
                                        <div class="col-md-9 ps-3 pe-1">
                                            <h4 class="card-title fs-3">
                                                <small class="rounded fs-5 text-warning me-2">
                                                    {{ $new->category_name }}
                                                </small>
                                                <br>
                                                <a href='{{ url("/detail-berita/$new->slug") }}'
                                                    class="link-underline-opacity-0 link-info text-dark">
                                                    {{ $new->name }}
                                                </a>
                                                <div class="text-lg fw-normal fs-5">
                                                    <?php
                                                    $date = date_create($new->published_date);
                                                    $days = config('app.days');
                                                    $months = config('app.months');
                                                    $hari = $days[date_format($date, 'l')];
                                                    $tanggal = date_format($date, 'd');
                                                    $bulan = $months[date_format($date, 'F')];
                                                    $tahun = date_format($date, 'Y');
                                                    echo "$hari, $tanggal $bulan $tahun";
                                                    ?>
                                                </div>
                                            </h4>
                                            {!! mb_substr(nl2br($new->content), 0, 50) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="col col-md-4">
                @foreach ($news->skip($i) as $new)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <img src="{{ url("assets/berita/$new->cover_picture") }}"
                                            style="object-fit: cover;
                                    width: 100%;
                                    height: 200px;"
                                            alt="...">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <small class="rounded fs-5 text-warning me-2">
                                            {{ $new->category_name }}
                                        </small>
                                        <br>
                                        <a href='{{ url("/detail-berita/$new->slug") }}'
                                            class="link-underline-opacity-0 link-info text-dark">
                                            {{ $new->name }}
                                        </a>
                                    </h5>
                                    {!! mb_substr(nl2br($new->content), 0, 50) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="clearfix mb-5"></div>
@endsection
