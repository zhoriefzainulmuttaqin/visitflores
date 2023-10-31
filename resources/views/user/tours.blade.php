@extends("user.template")

@section("title")
Wisata
@endsection

@section("cover")
<?= url('assets/bg/wisata.png') ?>
@endsection

@section("content")
<form action="{{ url('wisata') }}" method="get">
<section class="ftco-section services-section" style="margin-top:2rem; margin-bottom:2rem;">
    <div class="container">
        <p class="text-dark" style="font-size: 26px; font-weight: 600;">
            Wisata</p>
        <p style="font-size: 20px; font-weight: 400; margin-top:-1rem;">Berikut
            ini daftar wisata yang sering dikunjungi wisatawan.</p>
        
        <div class="row">
            <div class="col-lg-4 col-sm-12 mt-4">
				<h5 class="mb-0">Cari Destinasi</h5>
					<div class="row">
						<div class="col-lg-6 col-md-3 col-sm-4">
							<hr style="height: 2px;
								background-color: #0F304F;
								border: none;">
						</div>
						<div class="col-lg-6"></div>
					</div>
                <div class="input-group w-100 mt-1">
						<input type="text" id="icons-filter" name="keyword" class="form-control border-end-0" value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" placeholder="Masukan nama wisata . . .">
						<button type="submit" class="input-group-text bg-white border-start-0">
						<i class="uil uil-search"></i>
						</button>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 mt-4">
                <h5 class="mb-0">Kategori</h5>
                    <div class="row">
                        <div class="col-lg-2 col-sm-3">
                            <hr style="height: 2px;
                                background-color: #0F304F;
                                border: none;">
                        <div class="col-lg-6"></div>
                    </div>
                </div>
				<select class="form-select" aria-label="Default select example" name="cat_list[]" onchange="submit()">
					<option value="0" {{ !empty($cat_list[0]) ? 'selected' : '' }} >Semua Kategori</option>
					@foreach($categories as $category)
						<option value="{{ $category->id }}" {{ !empty($cat_list[$category->id]) ? 'selected' : '' }}>{{ $category->name }}</option>
					@endforeach
				</select>
            </div>
        </div>
    </div>
</section>
</form>
<section id="content">
			<div class="content-wrap bg-light">
				<div class="container">
					@if(count($tours) == 0)
						<div class="text-center">
							Tidak ada data terkait !
						</div>
					@endif
					<div class="row g-4 mb-5">
						@foreach ($tours as $tour)
							<article class="entry event col-md-6 col-lg-4 mb-0">
								<div class="grid-inner bg-white row g-0 p-2 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
									<div class="col-12 mb-md-0">
										<div class="entry-image mb-2">
											<img src="{{ url('assets/wisata/' . $tour->picture) }}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-5">
											<div class="bg-overlay">
												<div class="bg-overlay-content justify-content-start align-items-start">
													<div class="badge bg-light text-dark rounded-pill">{{ $tour->city }}</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 p-4 pt-0 pb-1">
										<div class="entry-title nott">
											<h3>{{ $tour->name }}</h3>
										</div>
										<div class="entry-meta no-separator mb-3">
											<ul>
												<li class="fw-normal"><i class="uil text-warning uil-map-marker"></i> {{ $tour->address }}</li>
											</ul>
										</div>
										<div class="entry-meta no-separator mb-1">
											<ul>
												<li class="text-capitalize"><h5> <span class="badge" style="background-color: #0F304F">{{ $tour->category_name }}</span></h5></li>
											</ul>
										</div>
										{{-- fasilitas --}}
										{{-- <div class="mb-3">
											<div class="fw-bold">{{ nl2br($tour->facilities) }}</div>
										</div> --}}
										<div class="mb-3">
											<div class="fw-bold">Rp. <?= number_format($tour->price, 0, ",", ".") ?></div>
										</div>
										<div class="entry-meta no-separator mb-3">
											<ul>
												<li class="fw-normal text-warning"><i class="uil bi-telephone-fill"></i> {{ $tour->phone }}</li>
											</ul>
										</div>
										{{-- gk ada detail --}}
										{{-- <div class="entry-meta no-separator float-end">
											<ul>
												<li><a href="#" class="fw-normal text-dark"> Lihat Detail <i class="uil bi-arrow-right-circle"></i></a></li>
											</ul>
										</div> --}}
										@if($tour->link_youtube != null || $tour->link_instagram != null || $tour->link_facebook != null || $tour->link_tiktok != null)
											<div class="entry-meta no-separator mb-3">
												<ul>
													@if($tour->link_youtube != null)
														<li><a href="{{ $tour->link_youtube }}" class="fw-normal text-dark"><i class="uil uil-youtube"></i> </a></li>
													@endif
													@if($tour->link_instagram != null)
														<li><a href="{{ $tour->link_instagram }}" class="fw-normal text-dark"><i class="uil bi-instagram"></i> </a></li>
													@endif
													@if($tour->link_facebook != null)
														<li><a href="{{ $tour->link_facebook }}" class="fw-normal text-dark"><i class="uil uil-facebook"></i> </a></li>
													@endif
													@if($tour->link_tiktok != null)
														<li><a href="{{ $tour->link_tiktok }}" class="fw-normal text-dark"><i class="uil fa-brands fa-tiktok"></i> </a></li>
													@endif
												</ul>
											</div>
										@else
											<div class="entry-meta no-separator mb-3">
												<ul>
													<li class="fw-normal text-white"><i class="uil fa-brands bi-dot"></i></li>
												</ul>
											</div>
										@endif
										<div class="entry-meta no-separator mb-3">
											<ul>
												<li><a href="{{ url('layanan-produk/tourism-card') }}" class="fw-normal text-dark"><i class="uil uil-ticket text-warning"></i> Disc. Card</a></li>
											</ul>
										</div>
									</div>
								</div>
							</article>
						@endforeach                        
					</div>
				</div>
			</div>
		</section>
@endsection