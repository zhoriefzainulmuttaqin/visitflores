@extends('admin.template')

@section('title')
    Akomodasi
@endsection

@section('style')
    <!-- Core Style -->
    <link rel="stylesheet" href="{{ url('canvas') }}/style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ url('canvas') }}/css/font-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('canvas') }}/css/custom.css">
    <link rel="stylesheet" href="{{ url('css/style-visit.css') }}">
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 15px;">
                <div class="card-header">
                    <h3 class="card-title">Tambah Akomodasi</h3>
                </div>
                <form method="POST" action="{{ url('app-admin/data/akomodasi/proses-tambah') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> Nama </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Masukan Nama . . . " value="{{ old('name') }}" required
                                autocomplete="off"></input>
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
                                value="{{ old('name_en') }}" required autocomplete="off"></input>
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                value="{{ old('slug') }}"type="text" required placeholder="Masukkan Slug . . .">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">Kota</label>
                            <select class="form-control" id="city" required name="city">
                                <option value="">--- Pilih Kota ---</option>
                                @foreach ($cities as $key => $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="white-section">
                            <label>Bintang Akomodasi</label>
                        </div><input id="input-2" type="number" name="star" class="rating rating-input" max="5"
                            data-step="1" data-stars="5" data-size="sm" value="{{ old('star') }}" tabindex="-1">
                        <div class="form-group">
                            <label for="address"> Alamat </label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                                placeholder="Masukan Alamat . . . " required autocomplete="off" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone"> No. HP </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                id="phone" placeholder="Masukan Nomor HP . . . " value="{{ old('phone') }}"
                                autocomplete="off"></input>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price_start_from"> Harga </label>
                            <input type="number" class="form-control @error('price_start_from') is-invalid @enderror"
                                name="price_start_from" id="price_start_from" placeholder="Masukan Harga . . . "
                                value="{{ old('price_start_from') }}" required autocomplete="off"></input>
                            @error('price_start_from')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facilities"> Fasilitas </label>
                            <textarea class="form-control @error('facilities') is-invalid @enderror" name="facilities" id="facilities"
                                placeholder="Masukan Fasilitas . . . " required autocomplete="off" required>{{ old('facilities') }}</textarea>
                            @error('facilities')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facilities_en"> Fasilitas (Dalam Bahasa Inggris) </label>
                            <textarea class="form-control @error('facilities_en') is-invalid @enderror" name="facilities_en" id="facilities_en"
                                placeholder="Masukan Fasilitas . . . " required autocomplete="off" required>{{ old('facilities_en') }}</textarea>
                            @error('facilities_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="details">Detail</label>
                            <textarea id="details" name="details" placeholder="Masukkan Detail Akomodasi . . ." rows="10" required>{{ old('content') }}</textarea>
                            <div class="my-3"></div>
                        </div>
                        <div class="form-group">
                            <label for="details_en">Detail (Dalam Bahasa Inggris)</label>
                            <textarea id="details_en" name="details_en" placeholder="Masukkan Detail Akomodasi . . ." rows="10" required>{{ old('content_en') }}</textarea>
                            <div class="my-3"></div>
                        </div>
                        <div class="form-group">
                            <label for="cover_picture" class="form-label">Gambar</label>
                            <img id="addImage" class="img-preview mb-3 img-fluid"
                                style="max-height: 300px; width: auto;">
                            <input class="form-control @error('cover_picture') is-invalid @enderror" type="file"
                                name="cover_picture" id="cover_picture" onchange="previewImage()" required>
                            @error('cover_picture')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_maps">Link Google Maps</label>
                            <input name="link_maps" class="form-control @error('link_maps') is-invalid @enderror"
                                id="link_maps" value="{{ old('link_maps') }}" type="text" required
                                placeholder="Masukan Link Maps . . . ">
                            @error('link_maps')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_instagram">Link Instagram (*opsional)</label>
                            <input name="link_instagram"
                                class="form-control @error('link_instagram') is-invalid @enderror" id="link_instagram"
                                value="{{ old('link_instagram') }}" type="text"
                                placeholder="Masukan Link Instagram . . . ">
                            @error('link_instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_facebook">Link Facebook (*opsional)</label>
                            <input name="link_facebook" class="form-control @error('link_facebook') is-invalid @enderror"
                                id="link_facebook" value="{{ old('link_facebook') }}" type="text"
                                placeholder="Masukan Link Facebook . . . ">
                            @error('link_facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_tiktok">Link Tiktok (*opsional)</label>
                            <input name="link_tiktok" class="form-control @error('link_tiktok') is-invalid @enderror"
                                id="link_tiktok" value="{{ old('link_tiktok') }}" type="text"
                                placeholder="Masukan Link Tiktok . . . ">
                            @error('link_tiktok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_youtube">Link Youtube (*opsional)</label>
                            <input name="link_youtube" class="form-control @error('link_youtube') is-invalid @enderror"
                                id="link_youtube" value="{{ old('link_youtube') }}" type="text"
                                placeholder="Masukan Link Youtube . . . ">
                            @error('link_youtube')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input btn-outline-primary" name="mitra_status" type="checkbox"
                                value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Akomodasi Sudah Bermitra Dengan Visit Cirebon
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= url('app-admin/data/berita') ?>">
                            <button type="button" class="btn btn-danger float-left">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('canvas') }}/js/plugins.min.js"></script>
    <script src="{{ url('canvas') }}/js/functions.bundle.js"></script>
    <script src="{{ url('canvas') }}/js/components/star-rating.js"></script>
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
            const image = document.querySelector('#cover_picture');
            const imgPreview = document.querySelector('#addImage');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        CKEDITOR.replace('details', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
        CKEDITOR.replace('details_en', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
    </script>
@endsection
