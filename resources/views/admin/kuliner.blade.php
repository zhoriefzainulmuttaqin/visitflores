@extends('admin.template')

@section('title')
Kuliner
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/data/tambah/kuliner') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Kuliner</button>
    </a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kota/Kab</th>
                            <th>Harga</th>
                            <th>No. Handphone</th>
                            <th>Alamat</th>
                            <th>Cafe & Resto</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $restaurant->name }}</td>
                            <td>{{ $restaurant->city }}</td>
                            <td class="text-right">
                                Rp.
                                <?= number_format($restaurant->price, 0, ",", ".") ?>
                            </td>
                            <td>{{ $restaurant->phone }}</td>
                            <td>{{ nl2br($restaurant->address) }}</td>
                            <td class="text-center">
                                @if ($restaurant->cafe_resto == 1)
                                    <small class="btn btn-small btn-success"><i class="fas fa-check"></i></small>
                                @else
                                    <small class="btn btn-small btn-danger">X</small>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/data/ubah/kuliner/' . $restaurant->slug) }}">
                                    <button type="button" class="btn btn-sm btn-success" title="Ubah">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ url('app-admin/data/kuliner/proses-hapus/' . $restaurant->slug) }}"
                                    onclick='return confirm("Apakah yakin hapus {{ $restaurant->name }}?")'>
                                    <button type="button" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
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
