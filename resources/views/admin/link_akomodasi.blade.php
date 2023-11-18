@extends('admin.template')

@section('title')
    Link Akomodasi {{ $accomodation->name }}
@endsection

@section('content')
    <!-- Modal Edit -->
    <form method="post" action="<?= url('app-admin/data/link/akomodasi/proses-ubah') ?>">
        @csrf
        <input type="hidden" name="accomodation_id" value="{{ $accomodation->id }}">
        <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-green">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Link Akomodasi</h5>
                        <button style="color: white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="gallery_id" id="editAccomodationLink">
                        <div class='form-group'>
                            <label class='form-label'>Nama</label>
                            <input type='text' id="editSourceName" name='source_name' class='form-control'
                                placeholder="Masukan Nama URL . . ." required>
                        </div>
                        <div class='form-group'>
                            <label class='form-label'>URL</label>
                            <input type='url' id="editUrl" name='url' class='form-control'
                                placeholder="Masukan Link . . ." required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Of Modal Edit -->

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Link Akomodasi</h3>
                </div>
                <form method="POST" action="{{ url('app-admin/data/link/akomodasi/proses-tambah') }}">
                    @csrf
                    <input type="hidden" name="accomodation_id" value="{{ $accomodation->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="source_name"> Nama </label>
                            <input type="text" class="form-control @error('source_name') is-invalid @enderror"
                                name="source_name" id="source_name" placeholder="Masukan Nama URL. . . "
                                value="{{ old('source_name') }}" required autocomplete="off">
                            @error('source_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url"> URL </label>
                            <input type="url" class="form-control @error('url') is-invalid @enderror" name="url"
                                id="url" placeholder="Masukan Nama (Dalam Bahasa Inggris) . . . "
                                value="{{ old('url') }}" required autocomplete="off">
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= url('app-admin/data/akomodasi') ?>">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Akomodasi</th>
                                <th>Nama URL</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accomodationLinks as $accomodationLink)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $accomodation->name }}</td>
                                    <td>{{ $accomodationLink->source_name }}</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)"
                                            onclick="edit('<?= $accomodationLink->id ?>','<?= $accomodationLink->source_name ?>','<?= $accomodationLink->url ?>')"
                                            data-toggle="modal" data-target="#modalEdit">
                                            <button type="button" class="btn btn-sm btn-success" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{ url('app-admin/data/hapus/link/akomodasi/' . $accomodation->slug) . '/' . $accomodationLink->id }}"
                                            onclick='return confirm("Apakah yakin hapus {{ $accomodationLink->source_name }}?")'>
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

    <script type="text/javascript">
        function edit(id, source_name, url) {
            $("#editAccomodationLink").val(id)
            $("#editSourceName").val(source_name)
            $("#editUrl").val(url)
        }
    </script>
@endsection
