@extends('user.template_no_cover')

@section('title')
    Detail Berita
@endsection

@section('cover')
@endsection

@section('content')
    <div class="container-lg mt-5">
        <div class="row mb-5">
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

            @if (!isset($_GET['keyword']))
                <small class="rounded fs-5 text-warning me-2">
                    {{ $new->category_name }}
                </small>
                <br>
                <h1 class="fw-bold">
                    {{ $new->name }}
                    <br>
                    <div class="fs-5 fw-light">
                        <i class="bi-calendar-date-fill"></i>
                        {{ $new->published_date }}
                    </div>
                </h1>

                <div class="col-md-12 mb-3 mb-sm-0">
                    <div class="card border-0 " style="border-radius: 40px">
                        <div class="card-body">
                            <img src='{{ url("assets/berita/$new->cover_picture") }}' class="img-fluid w-100 h-100"
                                alt="...">
                            <div class="col-md-12 mt-5 fs-3">
                                {{ $new->content }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

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
                                                        class="link-underline-opacity-0 text-dark">
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
                    @if ($new1->slug != $new1->slug || isset($_GET['keyword']))
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
                                            <a href="#" class="link-underline-opacity-0 text-dark">
                                                {{ $new1->name }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
