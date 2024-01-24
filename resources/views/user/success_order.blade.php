@extends('user.template_no_cover')

@section('title')
    {{ __('services.buy_souvenirs') }}
@endsection

@section('content')
<div class="untree_co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <span class="display-3 thankyou-icon text-primary">
                    <div class="loading mx-auto" style="display: flex; justify-content: center; align-items: center;">
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                        <dotlottie-player src="https://lottie.host/38c67dc5-4369-4eb2-a638-a806add296f9/68LnuwEDTA.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    </div>
                </span>
                <h2 class="display-3" style="color: #212529;">{{ __('services.transaction_success') }}</h2>
                <p class="lead mb-5" style="color: #212529">{{ __('services.transaction_success_message') }}</p>
                <p><a href="/profil" class="btn btn-success">{{ __('services.transaction_success_button') }}</a></p>
            </div>
        </div>
    </div>
</div>


@endsection
