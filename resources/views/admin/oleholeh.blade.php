@extends('admin.template')

@section('title')
Oleh - Oleh
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/data/tambah/oleholeh') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Oleh - Oleh</button>
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
                            <th>Mitra Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shops as $shop)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $shop->name }}</td>
                            <td>{{ $shop->city }}</td>
                            <td class="text-right">
                                Rp.
                                <?= number_format($shop->price, 0, ",", ".") ?>
                            </td>
                            <td>{{ $shop->phone }}</td>
                            <td>{{ nl2br($shop->address) }}</td>
                            <td class="text-center">
                                @if ($shop->mitra_status == 1)
                                    <small class="btn btn-small btn-success"><i class="fas fa-check"></i></small>
                                @else
                                    <small class="btn btn-small btn-danger">X</small>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/data/ubah/oleholeh/' . $shop->slug) }}">
                                    <button type="button" class="btn btn-sm btn-success" title="Ubah">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ url('app-admin/data/oleholeh/proses-hapus/' . $shop->slug) }}"
                                    onclick='return confirm("Apakah yakin hapus {{ $shop->name }}?")'>
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
