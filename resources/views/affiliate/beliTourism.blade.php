@extends('affiliate.template')

@section('title')
    Pembelian Tourism Card
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Belikan Tourism Card</h3>
                </div>
                <form method="post" action="{{ route('konfirmasi-process') }}" class="mt-5">
                    @csrf
                    <div style="display: none">
                        @foreach ($products as $product)
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="discountcardsales_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="{{ $product->quantity }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">

                            <div class="mb-2 d-grid gap-2">
                                <button type="submit" class="btn btn-success" data-product-id="{{ $product->id }}"
                                    data-product-price="{{ $product->price }}">
                                    {{ __('services.buy') }} Tourism Card - {{ $product->id }}
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="user_id">Pilih Akun</label>
                            <select class="form-control" id="user_id" required name="user_id">
                                <option value="">--- Pilih Akun ---</option>
                                @foreach ($users as $akun)
                                    <option value="{{ $akun->id }}">{{ $akun->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="code_reff"> Kode Referral </label>
                            <input type="text" class="form-control" name="code_reff" id="code_reff"
                                placeholder="Kode Referral" autocomplete="off">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('app-affiliate/dashboard') }}">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Selanjutnya</button>
                    </div>
                </form>
                <div class="card-footer d-flex">
                    <span>Pengguna belum memiliki akun?</span><a class="ms-4"
                        href="{{ url('app-affiliate/transaksi/daftar-dan-beli-tourism-card') }}"> klik untuk daftar dan
                        belikan tourism card </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    <script>
        function minQuantity() {
            let cardPrice = parseInt(<?= getOption('tourism_card_price') ?>);
            let cardQuantity = parseInt($("#CardQuantity").val());
            let cardTotalPrice = 0;

            if (cardQuantity > 1) {
                cardQuantity -= 1;
            }

            cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
            $("#CardQuantity").val(cardQuantity);
        }

        function plusQuantity() {
            let cardPrice = parseInt(<?= getOption('tourism_card_price') ?>);
            let cardQuantity = parseInt($("#CardQuantity").val());
            let cardTotalPrice = 0;

            cardQuantity += 1;

            cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
            $("#CardQuantity").val(cardQuantity);
        }
    </script>
@endsection
