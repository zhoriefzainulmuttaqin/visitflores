@extends('user.template')

<?php
use Illuminate\Support\Facades\App;
?>

@section('title')
    {{ __('services.tour_packages') }}
    @if (App::isLocale('id'))
        {{ $pattern->name }}
    @else
        {{ $pattern->name_en }}
    @endif
@endsection

@section('cover')
    <?= url('assets/patterns/' . $pattern->cover_picture) ?>
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

    <div class="section" style="margin-top:0px;margin-bottom:0px;">
        <div class="container-lg mt-5 mb-5">
            <h1 class="text-center mb-5">
                <b>
                    {{ __('services.tour_packages') }}
                    @if (App::isLocale('id'))
                        {{ $pattern->name }}
                    @else
                        {{ $pattern->name_en }}
                    @endif
                </b>
            </h1>
        </div>
    </div>
    <?= view('user.pattern.' . $pattern->view_file) ?>
    <div class="section" style="margin-top:0px;margin-bottom:0px;">
        <div class="d-grid gap-2 px-5">
            @if (App::isLocale('id'))
                <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=<?= __('services.wa_message_tour_package', ['name' => $pattern->name]) ?>"
                    target="_blank" class="btn btn-lg btn-info bg-btn-visit text-white">
                    <i class="bi-whatsapp"></i>
                    {{ __('services.lets_discuss') }}
                </a>
            @else
                <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=<?= __('services.wa_message_tour_package', ['name' => $pattern->name_en]) ?>"
                    target="_blank" class="btn btn-lg btn-info bg-btn-visit text-white">
                    <i class="bi-whatsapp"></i>
                    {{ __('services.lets_discuss') }}
                </a>
            @endif
        </div>
    </div>
@endsection
