@extends('admin.template')

@section('title')
Paket Oleh - Oleh
@endsection

@section('content')
<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/data/tambah/paket-oleh-oleh') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Paket Wisata</button>
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
                            <th>Gambar Cover</th>
                            <th>Harga</th>
                            <th>Unit</th>
                            <th>Berat</th>
                            <th>Isi Paket</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gifts as $gift)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $gift->name }}</td>
                            <td class="text-right">
                                Rp.
                                <?= number_format($gift->price, 0, ",", ".") ?>
                            </td>
                            <td>{{ $gift->unit }}</td>
                            <td>{{ $gift->weight }} gram</td>
                            <td>{{ $gift->contents_count }}</td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/data/ubah/paket-oleh-oleh/' . $gift->slug) }}">
                                    <button type="button" class="btn btn-sm btn-success" title="Ubah">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ url('app-admin/data/paket-oleh-oleh/proses-hapus/' . $gift->slug) }}"
                                    onclick='return confirm("Apakah yakin hapus {{ $gift->name }}?")'>
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
