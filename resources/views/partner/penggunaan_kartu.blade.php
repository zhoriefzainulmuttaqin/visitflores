@extends("partner.template")

@section("title")
Penggunaan Kartu (Discount Card)
@endsection

@section("content")

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Kartu</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('app-mitra/proses-gunakan-kartu') }}">
                    @csrf
                    <div class="form-group">
                        <label>Masukkan Nomor Kartu</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor Kartu" name="number">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Periksa Kartu
                            <i class="fa fa-arrow-alt-circle-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection