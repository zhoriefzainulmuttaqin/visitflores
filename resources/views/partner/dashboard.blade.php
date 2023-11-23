@extends("partner.template")

@section("title")
Dashboard
@endsection

@section("content")

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                {{ $type }} : {{  $profil->name }}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="card p-1">
            <img src="{{ url('assets/'.$picture) }}" class="img-fluid card-img-top">
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Kartu</h4>
            </div>
            <div class="card-body">
                <form method="get" action="{{ url('app-mitra/penggunaan-kartu') }}">
                    @csrf
                    <div class="form-group">
                        <label>Masukkan Nomor Kartu</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor Kartu" name="card_number">
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
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Penggunaan Kartu (Discount Card) Terakhir
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">No. Kartu</th>
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">Tanggal Penggunaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $uno = 0;
                        ?>
                        @foreach($uses as $use)
                            <?php $uno++; ?>
                            <tr>
                                <td class="text-center">{{ $uno }}</td>
                                <td class="text-center">{{ $use->card->code }}</td>
                                <td class="text-center">{{ $use->user->name }}</td>
                                <td class="text-center">
                                    {{ date("d-m-Y",strtotime($use->date_used)) }}
                                    ({{ date("H:i",strtotime($use->time_used)) }})
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection