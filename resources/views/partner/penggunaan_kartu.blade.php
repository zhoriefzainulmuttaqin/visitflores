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
                <form method="get" action="{{ url('app-mitra/penggunaan-kartu') }}">
                    @csrf
                    <div class="form-group">
                        <label>Masukkan Nomor Kartu</label>
                        <input type="number" class="form-control" value="{{ $card_number }}" placeholder="Masukkan Nomor Kartu" name="card_number">
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
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                @if($card_number == NULL)
                <p class="text-center">
                    << Input Nomor Kartu Terlebih Dahulu >>
                </p>
                @else
                    @if($card == NULL)
                        <div class="alert alert-warning">
                            Maaf, Data Kartu (Discount Card) Tidak Ditemukan
                        </div>
                    @else
                        <div class="alert alert-info">
                            Data Kartu (Discount Card) Berhasil Ditemukan
                        </div>
                        <p class="text-center">
                            <b class="h4 font-weight-bold">{{ $card->code }}</b>
                            <br>
                            {{ $card->user->name }}
                        </p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <b>Tgl. Pembuatan</b>
                                <br>
                                {{ date("d-m-Y",strtotime($card->date_created)) }}
                                <br>
                                ({{ date("H:i",strtotime($card->time_created)) }})
                            </div>
                            <div class="col-md-4 text-center">
                                <b>Tgl. Aktivasi</b>
                                <br>
                                @if($card->date_activated != NULL)
                                {{ date("d-m-Y",strtotime($card->date_activated)) }}
                                <br>
                                ({{ date("H:i",strtotime($card->time_activated)) }})
                                @else
                                -
                                @endif
                            </div>
                            <div class="col-md-4 text-center">
                                <b>Tgl. Kadaluarsa</b>
                                <br>
                                @if($card->date_expired != NULL)
                                {{ date("d-m-Y",strtotime($card->date_expired)) }}
                                <br>
                                ({{ date("H:i",strtotime($card->time_expired)) }})
                                @else
                                -
                                @endif
                            </div>
                        </div>
                        @if($card->date_activated == NULL)
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <p class="text-info text-center">
                                    Ini merupakan penggunaan pertama, maka masa kadaluarsa akan terhitung 3 hari dari penggunaan pertama.
                                </p>
                            </div>
                        </div>
                        @endif
                        <?php
                        $date_now = date("Y-m-d");
                        $time_now = date("H:i");

                        if($card->date_expired == NULL){
                            $use_action = "can_use";
                        }else{
                            if(date("Y-m-d",strtotime($card->date_expired)) > $date_now){
                                $use_action = "can_use";
                            }elseif(date("Y-m-d",strtotime($card->date_expired)) == $date_now){
                                if(date("H:i",strtotime($card->time_expired)) >= $time_now){
                                    $use_action = "can_use";
                                }else{
                                    $use_action = "has_expired";
                                }
                            }else{
                                $use_action = "has_expired";
                            }
                        }
                        ?>
                        @if($use_action == "can_use")
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <form method="post" action="{{ url('app-mitra/gunakan-kartu') }}">
                                    @csrf
                                    <input type="hidden" name="card_id" value="{{ $card->id }}">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-block" onclick="return confirm('Yakin lanjut untuk menggunakan kartu?')">
                                            Lanjutkan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @elseif($use_action == "has_expired")
                        <div class="alert alert-danger mt-5">
                            Kartu Sudah Kadaluarsa, Tidak Bisa Digunakan
                        </div>
                        @else
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">No. Kartu</th>
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">Tanggal Penggunaan</th>
                            <th class="text-center">Waktu Penggunaan</th>
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
                                <td class="text-center">{{ tglIndo($use->date_used) }}</td>
                                <td class="text-center">{{ date("H:i",strtotime($use->time_used)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection