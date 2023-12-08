@extends('admin.template')

@section('title')
Ubah Paket Oleh - Oleh
@endsection

@section('content')
<div class="row mt--2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ubah Paket Oleh - Oleh</h3>
            </div>
            <form method="POST" action="{{ url('app-admin/data/paket-oleh-oleh/proses-ubah') }}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $gift->id }}">
                <input type="hidden" name="picture_old" value="{{ $gift->picture }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Nama </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Masukan Nama . . . "
                            value="{{ old('name') ? old('name') : $gift->name }}" required autocomplete="off">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name_en"> Nama (Dalam Bahasa Inggris) </label>
                        <input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                            id="name_en" placeholder="Masukan Nama (Dalam Bahasa Inggris) . . . "
                            value="{{ old('name_en') ? old('name_en') : $gift->name_en }}" required autocomplete="off">
                        @error('name_en')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            value="{{ old('slug') ? old('slug') : $gift->slug }}" type="text" required
                            placeholder="Masukan Slug . . . ">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price"> Harga </label>
                        <input type="number" min="0" class="form-control @error('price') is-invalid @enderror"
                            name="price" id="price" placeholder="Masukan Harga . . . "
                            value="{{ old('price') ? old('price') : $gift->price }}" required autocomplete="off">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="unit"> Unit </label>
                        <input type="text" class="form-control @error('unit') is-invalid @enderror" name="unit"
                            id="unit" placeholder="Masukan Unit . . . "
                            value="{{ old('unit') ? old('unit') : $gift->unit }}" required autocomplete="off">
                        @error('unit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="weight"> Berat (gram) </label>
                        <input type="number" min="0" class="form-control @error('weight') is-invalid @enderror"
                            name="weight" id="weight" placeholder="Masukan Berat (gram) . . . "
                            value="{{ old('weight') ? old('weight') : $gift->weight }}" required autocomplete="off">
                        @error('weight')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="contents_count"> Jumlah Isi Paket </label>
                        <input type="number" min="0" class="form-control @error('contents_count') is-invalid @enderror"
                            name="contents_count" id="contents_count" placeholder="Masukan Jumlah Isi Paket . . . "
                            value="{{ old('contents_count') ? old('contents_count') : $gift->contents_count }}" required autocomplete="off">
                        @error('contents_count')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contents"> Konten </label>
                        <textarea class="form-control @error('contents') is-invalid @enderror" name="contents"
                            id="contents" placeholder="Masukan Konten . . . " required autocomplete="off"
                            required>{{ old('contents') ? old('contents') : $gift->contents }}</textarea>
                        @error('contents')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contents_en"> Konten (Dalam Bahasa Inggris) </label>
                        <textarea class="form-control @error('contents_en') is-invalid @enderror" name="contents_en"
                            id="contents_en" placeholder="Masukan Konten (Dalam Bahasa Inggris) . . . " required
                            autocomplete="off"
                            required>{{ old('contents_en') ? old('contents_en') : $gift->contents_en }}</textarea>
                        @error('contents_en')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Gambar</label>
                        <br>
                        <img id="addImage" src="{{ url('assets/layanan-produk/' . $gift->picture) }}" class="mb-3 img-thumbnail"
                            style="max-height: 300px; width: auto;">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                            id="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= url('app-admin/data/paket-oleh-oleh') ?>">
                        <button type="button" class="btn btn-danger float-left">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<script>
    const slug = document.querySelector('#slug');
        const name = document.querySelector('#name');
        name.addEventListener('change', function() {
            fetch('/app-admin/buatSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#addImage');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        CKEDITOR.replace('contents', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
        CKEDITOR.replace('contents_en', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
</script>
@endsection
