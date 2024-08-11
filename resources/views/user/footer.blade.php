{{-- Iklan --}}
<style>
    .owl-prev,
    .owl-next {
        margin-right: 25px;
        margin-left: 25px;
    }
</style>
@php
    use App\Models\Ads;

    $iklanBawah = Ads::where('status', 2)
        ->whereIn('active_status', [1]) // Ganti dengan nilai yang sesuai
        ->get();
@endphp
<div class="sliderIklan">
    <div id="oc-images" class="owl-carousel image-carousel  carousel-widget" data-items-xs="1" data-items-sm="1"
        data-items-lg="1" data-items-xl="1" data-autoplay="3000" data-loop="true">
        @foreach ($iklanBawah as $ads)
            <div class="oc-item">
                <img src="assets/iklan/{{ $ads->picture }}" alt="{{ $ads->slug }}" style="width: 1000%">
            </div>
        @endforeach
        {{-- <div class="oc-item">
                </div> --}}
    </div>
</div>
{{-- end iklan --}}

<!-- Footer
============================================= -->
<footer id="footer" class="dark bg-blue-visit">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
        <div class="container">
            <p class="text-center">
                <b class="h3">{{ getOption('slogan') }}</b>
                <br>
                with <span class='text-warning'>ujicobantt.id</span>
                <br>
                <a href="{{ getOption('fb_link') }}" target="_blank" class="h5">
                    <i class='uil-facebook-f'></i>
                </a>
                <a href="#" target="_blank" class="h5">
                    <i class='uil-instagram'></i>
                </a>
                <a href="https://www.tiktok.com/@visit.cirebon.id?_t=8iKVr2u4Z6e&_r=1" target="_blank" class="h5">
                    <i class='fa-brands fa-tiktok'></i>
                </a>
                <a href="https://youtube.com/@VisitCirebonId?si=AS4mL5Y_ehCoyXBE" target="_blank" class="h5">
                    <i class='uil-youtube'></i>
                </a>
                <br><br>
                <?php
                if (date('Y') > config('app.year_made')) {
                    $footer_year = config('app.year_made');
                } else {
                    $footer_year = config('app.year_made') . ' - ' . date('Y');
                }
                ?>
                <b class="text-warning">Copyright &copy; {{ config('app.author') }} {{ config('app.year_made') }}</b>
            </p>
        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->
