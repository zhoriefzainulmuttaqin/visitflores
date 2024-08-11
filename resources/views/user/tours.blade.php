@extends('user.template')

<?php
use Illuminate\Support\Facades\App;
?>

@section('title')
    {{ __('tours.title') }}
@endsection

@section('cover')
    <?= url('assets/bg/wisata.jpg') ?>
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

    <form action="{{ url('wisata') }}" method="get">
        <section class="ftco-section services-section" style="margin-top:2rem; margin-bottom:2rem;">
            <div class="container">
                <p class="text-dark" style="font-size: 26px; font-weight: 600;">
                    {{ __('tours.title') }}</p>
                <p style="font-size: 20px; font-weight: 400; margin-top:-1rem;"> {{ __('tours.desc_title') }}</p>

                <div class="row">
                    <div class="col-lg-4 col-sm-12 mt-4">
                        <h5 class="mb-0">{{ __('tours.search_destination') }}</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-3 col-sm-4">
                                <hr style="height: 2px;
								background-color: #0F304F;
								border: none;">
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                        <div class="input-group w-100 mt-1">
                            <input type="text" id="icons-filter" name="keyword" class="form-control border-end-0"
                                value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}"
                                placeholder="{{ __("
                                                                							tours.search_destination_placeholder") }}">
                            <button type="submit" class="input-group-text bg-white border-start-0">
                                <i class="uil uil-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12 mt-4">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mb-0">{{ __('tours.search_categories') }}</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <hr
                                            style="height: 2px;
										background-color: #0F304F;
										border: none;">
                                        <div class="col-lg-6"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="float-end mt-2">
                                    {{-- <input class="form-check-input" style="display: none" id="cat-list-0"
									onchange="submit()" type="checkbox" name="cat_list[]" value="0">
								<label for="cat-list-0" class="form-check-label btn btn-sm text-white text-sm"
									style="background-color: #0F304F;">Reset Kategori </label> --}}
                                    <?php
                                    if (isset($_GET['keyword'])) {
                                        $cari = $_GET['keyword'];
                                    } else {
                                        $cari = '';
                                    }
                                    ?>
                                    <a href="{{ url('wisata?keyword=' . $cari) }}" class="btn btn-sm text-white text-sm"
                                        style="background-color: #0F304F;">
                                        {{ __('tours.search_categories_reset') }}</a>
                                </div>
                            </div>
                        </div>
                        {{-- versi select option --}}
                        {{-- <select class="form-select" aria-label="Default select example" name="cat_list[]"
						onchange="submit()">
						<option value="0" {{ !empty($cat_list[0]) ? 'selected' : '' }}>Semua Kategori</option>
						@foreach ($categories as $category)
						<option value="{{ $category->id }}" {{ !empty($cat_list[$category->id]) ? 'selected' : '' }}>{{
							$category->name }}</option>
						@endforeach
					</select> --}}

                        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                            {{-- semua kategori --}}
                            {{-- <div class="col">
							<div class="">
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="cat-list-0" {{ !empty($cat_list[0]) ? 'checked'
										: '' }} onchange="submit()" type="radio" name="cat_list[]" value="0">
									<label for="cat-list-0" class="form-check-label">Semua Kategori </label>
								</div>
							</div>
						</div> --}}
                            @foreach ($categories as $category)
                                <div class="col">
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="cat-list-{{ $loop->iteration }}"
                                                {{ !empty($cat_list[$category->id]) ? 'checked' : '' }} onchange="submit()"
                                                type="checkbox" name="cat_list[]" value="{{ $category->id }}">

                                            <label class="form-check-label" for="cat-list-{{ $loop->iteration }}">
                                                @if (App::isLocale('id'))
                                                    {{ $category->name }}
                                                @else
                                                    {{ $category->name_en }}
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <section id="content">
        <div class="content-wrap bg-light">
            <div class="container">
                @if (count($tours) == 0)
                    <div class="text-center">
                        {{ __('tours.not_found') }}
                    </div>
                @endif
                <div class="row g-4 mb-5">
                    @foreach ($tours as $tour)
                        <article class="entry event col-md-6 col-lg-4 mb-0 d-flex align-items-stretch">
                            <div
                                class="grid-inner bg-white row g-0 p-2 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="{{ url('detail-wisata/' . $tour->slug) }}" class="entry-image mb-2">
                                        <img src="{{ url('assets/wisata/' . $tour->picture) }}"
                                            alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-5">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge bg-light text-dark rounded-pill">{{ $tour->city }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0 pb-1">
                                    <div class="entry-title nott">
                                        <h3><a href="{{ url('detail-wisata/' . $tour->slug) }}">
                                                @if (App::isLocale('id'))
                                                    {{ $tour->name }}
                                                @else
                                                    {{ $tour->name_en }}
                                                @endif
                                            </a></h3>
                                    </div>
                                    <div class="entry-meta no-separator mb-3">
                                        <ul>
                                            <li><a target="_blank" href="{{ $tour->link_maps }}" class="fw-normal"><i
                                                        class="uil text-warning uil-map-marker"></i> {{ $tour->address }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-meta no-separator mb-1">
                                        <ul>
                                            <li class="text-capitalize">
                                                <h5> <span class="badge" style="background-color: #0F304F">
                                                        @if (App::isLocale('id'))
                                                            {{ $tour->category_name }}
                                                        @else
                                                            {{ $tour->category_name_en }}
                                                        @endif
                                                    </span></h5>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- fasilitas --}}
                                    {{-- <div class="mb-3">
								<div class="fw-bold">{{ nl2br($tour->facilities) }}</div>
							</div> --}}
                                    <div class="mb-3">
                                        <div class="fw-bold">Rp. -
                                            {{-- <?= number_format($tour->price, 0, ',', '.') ?> --}}
                                        </div>
                                    </div>
                                    <div class="entry-meta no-separator mb-3">
                                        <ul>
                                            <li class="fw-normal text-warning"><i class="uil bi-telephone-fill"></i>
                                                {{-- {{ $tour->phone }}</li> --}} -
                                        </ul>
                                    </div>


                                    @if (
                                        $tour->link_youtube != null ||
                                            $tour->link_instagram != null ||
                                            $tour->link_facebook != null ||
                                            $tour->link_tiktok != null)
                                        <div class="entry-meta no-separator mb-3">
                                            <ul>
                                                @if ($tour->link_youtube != null)
                                                    <li><a target="_blank" href="{{ $tour->link_youtube }}"
                                                            class="fw-normal text-dark"><i class="uil uil-youtube"></i> </a>
                                                    </li>
                                                @endif
                                                @if ($tour->link_instagram != null)
                                                    <li><a target="_blank" href="{{ $tour->link_instagram }}"
                                                            class="fw-normal text-dark"><i class="uil bi-instagram"></i>
                                                        </a></li>
                                                @endif
                                                @if ($tour->link_facebook != null)
                                                    <li><a target="_blank" href="{{ $tour->link_facebook }}"
                                                            class="fw-normal text-dark"><i class="uil uil-facebook"></i>
                                                        </a></li>
                                                @endif
                                                @if ($tour->link_tiktok != null)
                                                    <li><a target="_blank" href="{{ $tour->link_tiktok }}"
                                                            class="fw-normal text-dark"><i
                                                                class="uil fa-brands fa-tiktok"></i> </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        {{-- @else
							<div class="entry-meta no-separator mb-3">
								<ul>
									<li class="fw-normal text-white"><i class="uil fa-brands bi-dot"></i></li>
								</ul>
							</div> --}}
                                    @endif
                                    <div class="entry-meta no-separator d-flex ">
                                        <ul class="me-auto">
                                            <li><a href="{{ url('layanan-produk/tourism-card') }}"
                                                    class="fw-normal text-dark"><i
                                                        class="uil uil-ticket text-warning"></i>
                                                    Disc. Card</a></li>
                                        </ul>

                                        <ul class="ms-auto">
                                            <li><a href="{{ url('detail-wisata/' . $tour->slug) }}"
                                                    class="fw-normal text-dark">
                                                    {{ __('tours.show_more') }}
                                                    <i class="uil bi-arrow-right-circle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{ $tours->links('vendor.pagination.canvas') }}
                </div>
            </div>
        </div>
    </section>
@endsection
