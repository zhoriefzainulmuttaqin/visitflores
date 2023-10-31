@extends('user.template_no_cover')

@section('title')
    Detail Berita
@endsection

@section('cover')
@endsection

@section('content')
    <div class="container">
        <div class="row gx-5 col-mb-80">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="get" class="row  align-items-center">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="cari" class="form-label fw-bold fs-4">Cari</label>
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control" id="cari"
                                        value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="keyword"
                                        placeholder="cari berita disini..">
                                    <button class="btn btn-secondary" type="submit" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </div>
                        @if (isset($_GET['keyword']))
                            <a href="{{ url('berita') }}" class="text-primary"><span>Tampilkan semua data..</span></a>
                        @endif
                    </form>
                </div>
            </div>
            <main class="postcontent col-lg-12">
                @if (!isset($_GET['keyword']))
                    <div class="single-post mb-0">
                        <div class="entry">
                            <div class="entry-title">
                                <h2>{{ $new->name }}</h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="uil uil-schedule"></i> {{ tglIndo($new->published_date, 'd/m/Y') }}</li>
                                    <li><i class="uil uil-user"></i>{{ $new->admin_name }}</li>
                                    <li>
                                        <i class="uil uil-folder-open"></i> {{ $new->category_name }}
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-image">
                                <a href="#"><img src="{{ url("assets/berita/$new->cover_picture") }}"
                                        alt="Blog Single"></a>
                            </div>
                            <div class="entry-content mt-0">
                                {!! nl2br($new->content) !!}
                            </div>
                        </div>
                    </div>
                @endif
                <h4 class="fs-4 fw-medium">Rekomendasi Untuk Kamu</h4>
                <div class="row my-5">
                    <div class="col col-md-8 mb-3 mb-sm-0">
                        <?php
                        $i = 0;
                        ?>
                        @foreach ($news as $new1)
                            @if ($new1->slug != $new->slug || isset($_GET['keyword']))
                                @if ($i <= $batas)
                                    <?php
                                    $i++;
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card shadow h-shadow-sm mb-5 overflow-hidden">
                                                <div class="row g-0">
                                                    <div class="col-md-3">
                                                        <img src="{{ url("assets/berita/$new1->cover_picture") }}"
                                                            class="img-fluid w-100 h-100">
                                                    </div>
                                                    <div class="col-md-9 ps-3 pe-1">
                                                        <h4 class="card-title fs-3">
                                                            <small class="rounded fs-5 text-warning me-2">
                                                                {{ $new1->category_name }}
                                                            </small>
                                                            <br>
                                                            <a href='{{ url("/detail-berita/$new1->slug") }}'
                                                                class="link-underline-opacity-0 link-info text-dark">
                                                                {{ $new1->name }}
                                                            </a>
                                                            <div class="text-lg fw-normal fs-5">
                                                                <?php
                                                                $date = date_create($new1->published_date);
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
                            @endif
                        @endforeach
                    </div>

                    <div class="col col-md-4">
                        @foreach ($news->skip($i) as $new1)
                            @if ($new1->slug != $new->slug || isset($_GET['keyword']))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card mb-3 shadow h-shadow-sm">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <img src="{{ url("assets/berita/$new1->cover_picture") }}"
                                                        style="object-fit: cover;
                                            width: 100%;
                                            height: 200px;"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <small class="rounded fs-5 text-warning me-2">
                                                        Wisata
                                                    </small>
                                                    <br>
                                                    <a href='{{ url("detail-berita/$new1->slug") }}'
                                                        class="link-underline-opacity-0 link-info text-dark">
                                                        {{ $new1->name }}
                                                    </a>
                                                </h5>
                                                {!! mb_substr(nl2br($new->content), 0, 50) !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="clearfix mb-5"></div>
@endsection
