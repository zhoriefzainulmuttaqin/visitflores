@extends("admin.template")

@section("title")
Discount Card
@endsection

@section("content")

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <b>No. Pembelian</b> <br>
                        <?php
                        $saleKode = saleKode("TC",$transaction);
                        ?>
                        {{ "#".$saleKode }}
                    </div>
                    <div class="col-md-4">
                        <b>Nama Pembeli</b> <br>
                        {{ $transaction->user->name }} <br>
                        ({{ $transaction->user->phone }})
                    </div>
                    <div class="col-md-4">
                        <b>Jumlah</b> <br>
                        {{ $transaction->quantity }}
                    </div>
                </div>
                <hr>
                @if(count($transaction->cards) == 0)
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ url('app-admin/transaksi/tourism-card/discount-card/generate') }}">
                            @csrf
                            <input type="hidden" name="sale_id" value="{{ $transaction->id }}" />
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">
                                    <i class="fa fa-sync"></i>
                                    Genarate Discount Card
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <table class="table table-striped table-hovered" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <!-- <th class="text-center">Kode</th> -->
                            <th class="text-center">Waktu Dibuat</th>
                            <th class="text-center">Waktu Aktifasi</th>
                            <th class="text-center">Waktu Kadaluarsa</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cno = 0;
                        ?>
                        @foreach($transaction->cards as $card)
                        <?php $cno++; ?>
                        <tr>
                            <td class="text-center">{{ $cno }}</td>
                            <!-- <td class="text-center">
                                <?php
                                $cardCode = str_split($card->code,4);
                                ?>
                                @for($codeno = 0; $codeno <= (count($cardCode) - 1); $codeno++)
                                {{ $cardCode[$codeno] }}
                                @endfor
                            </td> -->
                            <td class="text-center">
                                {{ tglIndo($card->date_created) }}
                                <br>
                                ({{ $card->time_created }})
                            </td>
                            <td class="text-center">
                                @if($card->date_activated != NULL)
                                {{ tglIndo($card->date_activated) }}
                                <br>
                                ({{ $card->time_activated }})
                                @else
                                -
                                @endif
                            </td>
                            <td class="text-center">
                                @if($card->date_expired != NULL)
                                {{ tglIndo($card->date_expired) }}
                                <br>
                                ({{ $card->time_expired }})
                                @else
                                -
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ url('app-admin/discount-card/'.$card->id.'/download') }}" class="btn btn-success btn-sm">
                                    <i class='fa fa-download'></i>
                                    Download Kartu Digital
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
                <hr>
                <a href="{{ url('app-admin/transaksi/tourism-card') }}" class="btn btn-primary">
                    <i class='fa fa-arrow-left'></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

@endsection