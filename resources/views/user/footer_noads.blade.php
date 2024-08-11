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
                <a href="#" target="_blank" class="h5">
                    <i class='fa-brands fa-tiktok'></i>
                </a>
                <a href="#" target="_blank" class="h5">
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
