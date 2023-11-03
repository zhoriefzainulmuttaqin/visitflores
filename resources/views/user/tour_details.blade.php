@extends('user.template_no_cover')

@section('title')
    Detail Wisata - {{ $tour->name }}
@endsection

@section('cover')
@endsection

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
										<h2>{{ $tour->name; }}</h2>
									</div><!-- .entry-title end -->

									<!-- Entry Meta
									============================================= -->
									<div class="entry-meta">
										<ul>
											<li>{{ $tour->category_name }}</li>
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
											<a href="#"><img src="{{ url('assets/wisata/' . $tour->picture) }}" alt="Blog Single"></a>
										</div><!-- .entry-image end -->

										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>


										<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

										<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>


										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
										<!-- Post Single - Content End -->

                                        <h4 class="mb-2">Fasilitas</h4>

                                        <div class="row col-mb-30">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<ul class="iconlist mb-0">
													<li><i class="fa-solid fa-check"></i> Return Flight Tickets</li>
													<li><i class="fa-solid fa-check"></i> All Local/Airport Transfers</li>
													<li><i class="fa-solid fa-check"></i> Resort Accomodation</li>
													<li><i class="fa-solid fa-check"></i> All Meals Included</li>
													<li><i class="fa-solid fa-check"></i> Adventure Activities</li>
												</ul>
											</div>
										</div>

										<div class="clear"></div>

										<!-- Post Single - Share
										============================================= -->
                                        @if($tour->link_youtube != null || $tour->link_instagram != null || $tour->link_facebook != null || $tour->link_tiktok != null)
                                            <div class="card border-default my-4">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="fs-6 fw-semibold mb-0">Follow Kami:</h6>
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
    <div class="clearfix mb-5"></div>
@endsection
