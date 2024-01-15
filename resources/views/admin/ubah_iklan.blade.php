@extends('admin.template')

@section('title')
    Tambah Iklan
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 15px;">
                <div class="card-header">
                    <h3 class="card-title">Ubah Iklan</h3>
                </div>
                <form method="POST" action="{{ url('app-admin/data/iklan/proses-ubah') }}"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $iklan->id }}">
                    <input type="hidden" name="picture_old" value="{{ $iklan->picture }}">

                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="slug"> Slug </label>
                            <input type="text" class="form-control" name="slug"
                                id="slug" placeholder="Beri slug foto" value="{{ old('slug') ?? $iklan->slug }}" required
                               ></input>
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="picture" class="form-label">Gambar (atas: 1074 x 160 px, bawah: 1074 x 258 px, popup: 1080 x 1080 px)</label>
                            <br>
                            <img id="addImage" src="{{ url('assets/iklan/' . $iklan->picture) }}"
                                class="mb-3 img-thumbnail" style="max-height: 300px; width: auto;">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                                id="image" onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" required name="status">
                                <option value="">--- Pilih Status ---</option>
                                <option value="1" {{ (old('status') ?? $iklan->status) == '1' ? 'selected' : '' }}>Iklan Atas</option>
                                <option value="2" {{ (old('status') ?? $iklan->status) == '2' ? 'selected' : '' }}>Iklan Bawah</option>
                                <option value="3" {{ (old('status') ?? $iklan->status) == '3' ? 'selected' : '' }}>Iklan Popup</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="active_status">Aktif</label>
                            <select class="form-control" id="active_status" required name="active_status">
                                <option value="1" {{ (old('active_status') ?? $iklan->active_status) == '1' ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ (old('active_status') ?? $iklan->active_status) == '0' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                        </div>

                </div>
                    <div class="card-footer">
                        <a href="{{ url('/app-admin/data/iklan') }}">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#picture');
            const imgPreview = document.querySelector('#addImage');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
