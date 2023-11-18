@extends('admin.template')

@section('title')
    Event
@endsection

@section('content')
    <div class="mb-3 text-right">
        <a href="{{ url('/app-admin/data/tambah/event') }}">
            <button type="button" class="btn  btn-sm btn-primary"> Tambah Event</button>
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
                                <th>Lokasi</th>
                                <th>Publikasi</th>
                                <th>Waktu Acara</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ nl2br($event->location) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($event->published_date)) }} {{ $event->published_time }}
                                    </td>
                                    <td>{{ $event->start_time }} - {{ $event->end_time }}</td>
                                    <td class="text-center">
                                        <a href='{{ url("/app-admin/data/ubah/event/$event->id") }}'>
                                            <button type="button" class="btn btn-sm btn-success" title="Ubah"><i
                                                    class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="{{ url("/app-admin/data/hapus/event/$event->id") }}"
                                            onclick="return confirm('Apakah anda yakin hapus?.')">
                                            <button type="button" class="btn btn-sm btn-danger" title="hapus"><i
                                                    class="fas fa-trash"></i></button>
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
