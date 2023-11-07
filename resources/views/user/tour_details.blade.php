@extends('user.template_no_cover')

<?php
use Illuminate\Support\Facades\App;
?>

@section('title')
	{{ __("tours.detail_title") }} -
	@if(App::isLocale("id"))
		{{ $tour->name }}
	@else
		{{ $tour->name_en }}
	@endif
@endsection

 <style>

.content-wrap{
    margin-bottom: -5%;
                /* margin-top: -30em; */
            }
        @media only screen and (min-width: 200px) and (max-width: 767px) {
            .content-wrap{
                margin-bottom: -20%;
            }
        }
 </style>

@section('content')
    <div class="content-wrap">
				<div class="container">

					<div class="row gx-5 col-mb-80">
						<!-- Post Content
						============================================= -->
						<main class="postcontent col-lg-12">

							<div class="single-post mb-0">

								<!-- Single Post
								============================================= -->
								<div class="entry">

									<!-- Entry Title
									============================================= -->
									<div class="entry-title">
										<h2>
											@if(App::isLocale("id"))
												{{ $tour->name }}
											@else
												{{ $tour->name_en }}
											@endif
										</h2>
									</div><!-- .entry-title end -->

									<!-- Entry Meta
									============================================= -->
									<div class="entry-meta">
										<ul>
											<li>
												@if(App::isLocale("id"))
													{{ $tour->category_name }}
												@else
													{{ $tour->category_name_en }}
												@endif
											</li>
                                            <li><a target="_blank" href="{{ $tour->link_maps }}" class="fw-normal"><i class="uil uil-map-marker"></i> {{ $tour->address }} </a></li>
											<li><i class="uil-pricetag-alt"></i>Rp. <?= number_format($tour->price, 0, ",", ".") ?></li>
											<li><i class="uil bi-telephone-fill"></i>{{ $tour->phone }}</li>
										</ul>
									</div><!-- .entry-meta end -->

									<!-- Entry Content
									============================================= -->
									<div class="entry-content mt-0">

										<!-- Entry Image
										============================================= -->
										<div class="entry-image alignleft">
										<img src="{{ url('assets/wisata/' . $tour->picture) }}" alt="Blog Single">
										</div><!-- .entry-image end -->

										@if(App::isLocale("id"))
											{{ ($tour->description) }}
											@else
											{{ ($tour->description_en) }}
										@endif

										<!-- Post Single - Content End -->

                                        <h4 class="mb-2 mt-2">{{ __("tours.facilities") }}</h4>

                                        <div class="row col-mb-30">
											<div class="col-lg-12 col-md-12 col-sm-12">
												{{-- <ul class="iconlist mb-0">
													<li><i class="fa-solid fa-check"></i> Return Flight Tickets</li>
													<li><i class="fa-solid fa-check"></i> All Local/Airport Transfers</li>
													<li><i class="fa-solid fa-check"></i> Resort Accomodation</li>
													<li><i class="fa-solid fa-check"></i> All Meals Included</li>
													<li><i class="fa-solid fa-check"></i> Adventure Activities</li>
												</ul> --}}
												@if(App::isLocale("id"))
													{{ ($tour->facilities) }}
													@else
													{{ ($tour->facilities_en) }}
												@endif
											</div>
										</div>

										<div class="clear"></div>

										<div class="row mt-3">
											<div class="col-12 d-flex justify-content-between">
												<a href="{{ url('layanan-produk') }}" class="btn btn-warning">Tour Packages</a>
												<a href="{{ url('layanan-produk/tourism-card') }}" class="btn btn-warning">Tourism Card</a>
											</div>
										</div>
										<!-- Post Single - Share
										============================================= -->
                                        @if($tour->link_youtube != null || $tour->link_instagram != null || $tour->link_facebook != null || $tour->link_tiktok != null)
                                            <div class="card border-default my-4">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="fs-6 fw-semibold mb-0">{{ __("tours.follow") }}:</h6>
                                                        <div class="d-flex">
                                                            @if($tour->link_facebook != null)
                                                                <a target="_blank" href="{{ $tour->link_facebook }}" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                                                                    <i class="uil uil-facebook"></i>
                                                                    <i class="uil uil-facebook"></i>
                                                                </a>
                                                            @endif

                                                            @if($tour->link_youtube != null)
                                                                <a target="_blank" href="{{ $tour->link_youtube }}" class="social-icon si-small text-white border-transparent rounded-circle bg-youtube" title="youtube">
                                                                     <i class="uil uil-youtube"></i>
                                                                    <i class="uil uil-youtube"></i>
                                                                </a>
                                                            @endif

                                                            @if($tour->link_instagram != null)
                                                                <a target="_blank" href="{{ $tour->link_instagram }}" class="social-icon si-small text-white border-transparent rounded-circle bg-instagram" title="instagram">
                                                                     <i class="uil uil-instagram"></i>
                                                                    <i class="uil uil-instagram"></i>
                                                                </a>
                                                            @endif

                                                            @if($tour->link_tiktok != null)
                                                                <a target="_blank" href="{{ $tour->link_tiktok }}" class="social-icon si-small text-white border-transparent rounded-circle bg-tiktok" title="tiktok">
                                                                     <i class="uil fa-brands fa-tiktok"></i>
                                                                    <i class="uil fa-brands fa-tiktok"></i>
                                                                </a>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Post Single - Share End -->
                                        @endif

									</div>
								</div><!-- .entry end -->

							</div>

						</main><!-- .postcontent end -->

					</div>

				</div>
			</div>
    {{-- <div class="clearfix mb-5"></div> --}}
@endsection
