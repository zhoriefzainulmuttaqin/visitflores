@extends("admin.template")

@section("title")
Laporan Transaksi Affiliate
@endsection

@section("content")

<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline card-tabs">
            <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Berdasarkan Tanggal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Di Antara Tanggal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Berdasarkan Bulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Berdasarkan Tahun</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <form method="get" action="{{ url('app-admin/laporan/transaksi/affiliate/cetak') }}" target="_blank">
                            @csrf
                            <input type="hidden" name="type" value="date">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control" placeholder="Tanggal" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-prnt"></i>
                                            Cetak Laporan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                        <form method="get" action="{{ url('app-admin/laporan/transaksi/affiliate/cetak') }}" target="_blank">
                            @csrf
                            <input type="hidden" name="type" value="between_date">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Dari Tanggal</label>
                                        <input type="date" name="start_date" value="{{ date('Y-m-d') }}" class="form-control" placeholder="Tanggal" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <input type="date" name="end_date" value="{{ date('Y-m-d',strtotime('+1days')) }}" class="form-control" placeholder="Tanggal" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-prnt"></i>
                                            Cetak Laporan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                        <form method="get" action="{{ url('app-admin/laporan/transaksi/affiliate/cetak') }}" target="_blank">
                            @csrf
                            <input type="hidden" name="type" value="month">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select class="form-control" name="month">
                                            <?php $mno = 0; ?>
                                            @foreach(getBulanIndo() as $month)
                                                <?php $mno++ ?>
                                                @if($mno == date("n"))
                                                <option value="{{ $mno }}" selected>{{ $month }}</option>
                                                @else
                                                <option value="{{ $mno }}">{{ $month }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <select name="year" class="form-control">
                                            @for($y = 2010; $y <= date("Y") + 25; $y++)
                                                @if($y == date("Y"))
                                                <option value="{{ $y }}" selected>{{ $y }}</option>
                                                @else
                                                <option value="{{ $y }}">{{ $y }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-prnt"></i>
                                            Cetak Laporan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                        <form method="get" action="{{ url('app-admin/laporan/transaksi/affiliate/cetak') }}" target="_blank">
                            @csrf
                            <input type="hidden" name="type" value="year">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <select name="year" class="form-control">
                                            @for($y = 2010; $y <= date("Y") + 25; $y++)
                                                @if($y == date("Y"))
                                                <option value="{{ $y }}" selected>{{ $y }}</option>
                                                @else
                                                <option value="{{ $y }}">{{ $y }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-prnt"></i>
                                            Cetak Laporan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
