@extends('admin.template')

@section('title')
    Event
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 15px;">
                <div class="card-header">
                    <h3 class="card-title">Ubah Event</h3>
                </div>
                <form method="POST" action="{{ url('app-admin/data/event/proses-ubah') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> Nama </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Masukan Nama Event . . . "
                                value="{{ old('name') ?? $event->name }}" required autocomplete="off"></input>
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
                                value="{{ old('name_en') ?? $event->name_en }}" required autocomplete="off"></input>
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug Event</label>
                            <input name="slug" class="form-control @error('location') is-invalid @enderror"
                                id="slug" value="{{ old('slug') ?? $event->slug }}"type="text" required
                                placeholder="event-baru">
                            <small class="d-block link-muted"><i class="feather-info"></i> Permalink: <a
                                    href="#">https://yourdomain.com/event-baru</a></small>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location"> Lokasi </label>
                            <textarea class="form-control @error('location') is-invalid @enderror" name="location" id="location"
                                placeholder="Masukan Lokasi . . . " required autocomplete="off" required>{{ $event->location ?? old('location') }}</textarea>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="form-label"> Tanggal dan Waktu Acara Mulai</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal</span>
                            </div>
                            <input type="date" name="start_date" value="{{ old('start_date') ?? $event->start_date }}"
                                aria-label="First name" required class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">Waktu</span>
                            </div>
                            <input type="time" name="start_time" value="{{ old('start_time') ?? $event->start_time }}"
                                aria-label="Last name"  class="form-control">
                        </div>
                        <label class="form-label"> Tanggal dan Waktu Acara Selesai</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal</span>
                            </div>
                            <input type="date" name="end_date" value="{{ old('end_date') ?? $event->end_date }}"
                                aria-label="First name" required class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">Waktu</span>
                            </div>
                            <input type="time" name="end_time" value="{{ old('end_time') ?? $event->end_time }}"
                                aria-label="Last name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Gambar</label>
                            <br>
                            <img id="addImage" src='{{ url("/assets/event/$event->cover_picture") }}'
                                class="img-preview mb-3 img-fluid" style="max-height: 300px; width: auto;">
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
                        <a href="<?= url('app-admin/data/event') ?>">
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
    </script>
@endsection
