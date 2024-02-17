@extends('admin.template')

@section('title')
Akun Affiliators
@endsection

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="mb-3 text-right">
    <a href="{{ url('/app-admin/tambah/akun/affiliators') }}">
        <button type="button" class="btn  btn-sm btn-primary"> Tambah Akun Affiliators</button>
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
                            <th>Nama Affiliators</th>
                            <th>KTP</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Nomor Rekening</th>
                            <th>Wilayah</th>
                            <th>Kode Referral</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Persentase Komisi</th>
                            {{-- <th>Nominal Komsisi </th> --}}
                            <th>Active</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($affiliators as $aff)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $aff->name }}</td>
                            <td>
                                <button class="btn btn-primary" data-ktp-url="{{ asset('/assets/affiliators/' . $aff->ktp) }}">Lihat KTP</button>
                            </td>
                            <td>{{ $aff->username }}</td>
                            <td>{{ $aff->email }}</td>
                            <td>{{ $aff->phone }}</td>
                            <td>{{ $aff->norek }}</td>
                            <td>{{ $aff->location->name }}</td>
                            <td>{{ $aff->code_reff }}</td>
                            <td>{{ $aff->address }}</td>
                            {{-- <td>{{ $commission_idr }}</td> --}}
                            <td class="text-center">
                                <?php if($aff->status == 1) : ?>
                                <span class="badge badge-primary">Ketua Wilayah</span>
                                <?php else : ?>
                                <span class="badge badge-success">Anggota</span>
                                <?php endif; ?>
                            </td>
                            <td>{{ $aff->commission_percent }}%</td>
                            <td class="text-center">
                                <?php if($aff->active == 1) : ?>
                                <span class="badge badge-success">Aktif</span>
                                <?php else : ?>
                                <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/app-admin/kelola/akun/affiliators/' . $aff->id) }}">
                                    <button type="button" class="btn btn-sm btn-secondary" title="kelola">
                                        <i class="fas fa-cog"></i>
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
{{-- modal KTP --}}
<div class="modal" id="ktpModal" tabindex="-1" aria-labelledby="ktpModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">

                <img id="ktpImage" src="" alt="KTP Image" style="width: 100%; height: 100%;">
    </div>
</div>
{{-- End Modal --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
 $(document).on('click', 'button[data-ktp-url]', function() {
    const ktpUrl = $(this).data('ktp-url');
    const ktpImage = $('#ktpImage');

    ktpImage.attr('src', ktpUrl);
    $('#ktpModal').modal();
});
</script>
@endsection
