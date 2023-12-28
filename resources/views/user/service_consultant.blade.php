@extends('user.template_no_cover')

@section('title')
    {{ __('services.service_consultant') }}
@endsection

@section('cover')
    <?= url('assets/layanan-jasa/konsultan/bg.png') ?>
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
        <img src="{{ url('assets/layanan-jasa/konsultan/konsultan.png') }}" class="img-fluid" width="100%">
        <h1 class="text-center mt-5 mb-5">
            <b>{{ __('services.service_consultant') }}</b>
        </h1>
        <div class="container mt-5">
            <div class="row justify-items-center">
                <div class="col-12 col-md-6 border-end border-bottom p-5">
                    <p class="h4 text-center">
                        <i class="text-warning fa-solid fa-user-friends"></i>
                        {{ __('services.service_sub_global_qualification') }}
                    </p>
                    <p>
                        {{ __('services.service_detail_one') }}
                    </p>
                </div>
                <div class="col-12 col-md-6 border-start border-bottom p-5">
                    <p class="h4 text-center">
                        <i class="text-warning bi-headphones"></i>
                        {{ __('services.service_sub_practicioner') }}
                    </p>
                    <p>
                        {{ __('services.service_detail_two') }}
                    </p>
                </div>
                <div class="col-12 col-md-6 border-end border-top p-5">
                    <p class="h4 text-center">
                        <i class="text-warning uil-file-check-alt"></i>
                        {{ __('services.service_sub_experience') }}
                    </p>
                    <p>
                        {{ __('services.service_detail_three') }}
                    </p>
                </div>
                <div class="col-12 col-md-6 border-start border-top p-5">
                    <p class="h4 text-center">
                        <i class="text-warning fa-solid fa-user-cog"></i>
                        {{ __('services.service_sub_sustainability') }}
                    </p>
                    <p>
                        {{ __('services.service_detail_four') }}
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="mb-5"></div>
            <a href="{{ url('layanan-jasa') }}" class="btn btn-primary bg-btn-visit">
                <i class='fa fa-arrow-left'></i>
                {{ __('services.back') }}
            </a>
            <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=<?= __('services.wa_message_discuss_services', [
    'name' => __('services.service_consultant'),
]) ?>"
                target="_blank" class="btn btn-success">
                <i class="bi-whatsapp"></i>
                {{ __('services.lets_discuss') }}
            </a>
        </div>
        <div class="mt-5 mb-5"></div>
        <div class="clearfix"></div>
        <div class="mt-5 mb-5"></div>
    </div>
@endsection
