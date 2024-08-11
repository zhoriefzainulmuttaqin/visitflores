@extends('admin.template')

@section('title')
    Ubah Wisata
@endsection

@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ubah Wisata</h3>
                </div>
                <form method="POST" action="{{ url('app-admin/data/wisata/proses-ubah') }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $tour->id }}">
                    <input type="hidden" name="picture_old" value="{{ $tour->picture }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="city"> Kota / Kab </label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                                id="city" placeholder="Masukan Kota / Kab . . . "
                                value="{{ old('city') ? old('city') : $tour->city }}" required autocomplete="off">
                            @error('city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name"> Nama </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Masukan Nama . . . "
                                value="{{ old('name') ? old('name') : $tour->name }}" required autocomplete="off">
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
                                value="{{ old('name_en') ? old('name_en') : $tour->name_en }}" required autocomplete="off">
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                value="{{ old('slug') ? old('slug') : $tour->slug }}" type="text" required
                                placeholder="Masukan Slug . . . ">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id">Kategori</label>
                            <select class="form-control" id="category_id" required name="category_id">
                                @foreach ($categories as $category)
                                    <?php
                                    if ($tour->category_id == $category->id) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    ?>
                                    <option value="{{ $category->id }}" {{ $selected }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price"> Harga </label>
                            <input type="number" min="0" class="form-control @error('price') is-invalid @enderror"
                                name="price" id="price" placeholder="Masukan Harga . . . "
                                value="{{ old('price') ? old('price') : $tour->price }}" autocomplete="off">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone"> No. Handphone </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                id="phone" placeholder="Masukan No. Handphone . . . "
                                value="{{ old('phone') ? old('phone') : $tour->phone }}" autocomplete="off">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address"> Alamat </label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                                placeholder="Masukan Alamat . . . " required autocomplete="off" required>{{ old('address') ? old('address') : $tour->address }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facilities"> Fasilitas </label>
                            <textarea class="form-control @error('facilities') is-invalid @enderror" name="facilities" id="facilities"
                                placeholder="Masukan Fasilitas . . . " required autocomplete="off" required>{{ old('facilities') ? old('facilities') : $tour->facilities }}</textarea>
                            @error('facilities')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facilities_en"> Fasilitas (Dalam Bahasa Inggris) </label>
                            <textarea class="form-control @error('facilities_en') is-invalid @enderror" name="facilities_en" id="facilities_en"
                                placeholder="Masukan Fasilitas (Dalam Bahasa Inggris) . . . " required autocomplete="off" required>{{ old('facilities_en') ? old('facilities_en') : $tour->facilities_en }}</textarea>
                            @error('facilities_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description"> Deskripsi </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                placeholder="Masukan Deskripsi . . . " required autocomplete="off" required>{{ old('description') ? old('description') : $tour->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description_en"> Deskripsi (Dalam Bahasa Inggris) </label>
                            <textarea class="form-control @error('description_en') is-invalid @enderror" name="description_en"
                                id="description_en" placeholder="Masukan Deskripsi (Dalam Bahasa Inggris) . . . " required autocomplete="off"
                                required>{{ old('description_en') ? old('description_en') : $tour->description_en }}</textarea>
                            @error('description_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Gambar</label>
                            <br>
                            <img id="addImage" src="{{ url('assets/wisata/' . $tour->picture) }}"
                                class="mb-3 img-thumbnail" style="max-height: 300px; width: auto;">
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                name="image" id="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_maps">Link Google Maps</label>
                            <input name="link_maps" class="form-control @error('link_maps') is-invalid @enderror"
                                id="link_maps" value="{{ old('link_maps') ? old('link_maps') : $tour->link_maps }}"
                                type="text" required placeholder="Masukan Link Google Maps . . . ">
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
                                value="{{ old('link_instagram') ? old('link_instagram') : $tour->link_instagram }}"
                                type="text" placeholder="Masukan Link Instagram . . . ">
                            @error('link_instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_facebook">Link Facebook (*opsional)</label>
                            <input name="link_facebook" class="form-control @error('link_facebook') is-invalid @enderror"
                                id="link_facebook"
                                value="{{ old('link_facebook') ? old('link_facebook') : $tour->link_facebook }}"
                                type="text" placeholder="Masukan Link Facebook . . . ">
                            @error('link_facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_tiktok">Link Tiktok (*opsional)</label>
                            <input name="link_tiktok" class="form-control @error('link_tiktok') is-invalid @enderror"
                                id="link_tiktok"
                                value="{{ old('link_tiktok') ? old('link_tiktok') : $tour->link_tiktok }}" type="text"
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
                                id="link_youtube"
                                value="{{ old('link_youtube') ? old('link_youtube') : $tour->link_youtube }}"
                                type="text" placeholder="Masukan Link Youtube . . . ">
                            @error('link_youtube')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input btn-outline-primary" name="mitra_status" type="checkbox"
                                value="1" {{ $tour->mitra_status == '1' ? 'checked' : '' }} id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Mitra UJICOBANTT
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= url('app-admin/data/wisata') ?>">
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

        CKEDITOR.replace('description', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
        CKEDITOR.replace('description_en', {
            enterMode: CKEDITOR.ENTER_BR,
            removePlugins: 'image'
        });
        // CKEDITOR.replace('facilities', {
        //     removePlugins: 'image'
        // });
        // CKEDITOR.replace('facilities_en', {
        //     removePlugins: 'image'
        // });
    </script>
@endsection
