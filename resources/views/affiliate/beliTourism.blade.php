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
                <form method="POST" action="{{ url('app-admin/data/wisata/proses-tambah') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Pilih Akun</label>
                            <select class="form-control" id="category_id" required name="category_id">
                                <option value="">--- Pilih Akun ---</option>
                                @foreach ($users as $akun)
                                    <option value="{{ $akun->id }}">{{ $akun->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Pilih Metode Pembayaran</label>
                            <select class="form-control" id="category_id" required name="category_id">
                                <option value="">--- Pilih Metode Pembayaran ---</option>
                                @foreach ($payments as $pay)
                                    <option value="{{ $pay->id }}">{{ $pay->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <div class="input-group input-group-lg">
                                <button class="btn btn-primary bg-btn-visit text-white" onclick="minQuantity()"
                                    type="button">-</button>
                                <input type="number" class="form-control" name="quantity" min="1" value="1"
                                    placeholder="Jumlah Tourism Card Yang Dibeli" id="CardQuantity">
                                <button class="btn btn-primary bg-btn-visit text-white" onclick="plusQuantity()"
                                    type="button">+</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="referal"> Kode Referral </label>
                            <input type="text" class="form-control" name="referal"
                                id="referal" placeholder="Kode Referral"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('app-affiliate/dashboard') }}">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                    </div>
                    <div class="card-footer d-flex">
                        <span>Pengguna belum memiliki akun?</span><a class="ms-4" href="{{ url('app-affiliate/transaksi/daftar-dan-beli-tourism-card') }}"> klik untuk daftar dan belikan tourism card </a>
                    </div>
                </form>
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
