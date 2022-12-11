@extends('layouts.dashboard-base')
@section("title", "Kelola Halaman Tentang Kami")
@section("content")
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Edit Profil Dinas</h5>
          <span>Edit profil Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <form action="/dashboard/kelola-halaman/tentang-kami/profil" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                  <textarea class="form-control" name="profil" id="profil" cols="30" rows="20" placeholder="Profil Dinas Pendidikan dan Kebudayaan Kota Balikpapan" required>{!! str_replace('<br />', '', $profil->nilai) !!}</textarea>
                <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100 mt-3">Ubah</button>
              </div>
            </div>
            <hr>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Edit Visi Misi dan Struktur Organisasi</h5>
          <span>Edit visi dan misi dan struktur organisasi Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <form action="/dashboard/kelola-halaman/tentang-kami/visi-misi" method="post" enctype="multipart/form-data">
                  @csrf
                <img src="/storage/visimisitujuan/{{ $visimisi->nilai }}" alt="Visi dan Misi" style="width: 100%" class="text-center">
                <input type="file" class="form-control my-3" accept="image/*" name="file_visimisi">
                <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100">Ubah</button>
              </form>
            </div>
            <div class="col-md-6">
                <form action="/dashboard/kelola-halaman/tentang-kami/struktur-organisasi" method="post" enctype="multipart/form-data">
                  @csrf
                <img src="/storage/strukturorganisasi/{{ $strukturorganisasi->nilai }}" alt="Struktur Organisasi" style="width: 100%" class="text-center">
                <input type="file" class="form-control my-3" accept="image/*" name="file_strukturorganisasi">
                <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100">Ubah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Kelola Rencana Strategis</h5>
          <span>Kelola rencana strategis (renstra) Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <form action="/dashboard/kelola-halaman/tentang-kami/renstra/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Nama<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" name="nama" placeholder="Rencana Strategis 2020  - 2021" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">File<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" accept=".pdf" name="file_rencanastrategis" required>
                  </div>
                </div>
                <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100">Tambah</button>
              </div>
            </div>
            <hr>
          </form>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive table-sm">
                <table class="display " id="tabel-1">
                  <thead>
                    <tr>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rencanastrategis as $rs)
                    <tr>
                      <td><a href="/storage/renstra/{{ $rs->file }}" target="_blank"><i class="fa fa-file-pdf-o"></i> {{ $rs->nama }}</a></td>
                      <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah-modal-{{ $rs->id }}">
                          <i class="fa fa-pencil-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $rs->id }}">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@foreach ($rencanastrategis as $dt)
<!-- Ubah Modal -->
<div class="modal fade" id="ubah-modal-{{ $dt->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/kelola-halaman/tentang-kami/renstra/ubah" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{ $dt->file }}" name="file">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="nama" placeholder="Rencana Strategis 2020  - 2021" required value="{{ $dt->nama }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">File<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" accept=".pdf" name="file_rencanastrategis">
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="id" value="{{ $dt->id }}" class="btn btn-warning">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Hapus Modal -->
<div class="modal fade" id="hapus-modal-{{ $dt->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <form action="/dashboard/kelola-halaman/tentang-kami/renstra/hapus" method="post" enctype="multipart/form-data">
          @csrf
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" name="id" value="{{ $dt->id }}" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@section("script") 
<script src="/tes/editor.js"></script>
<script>
  $('#tabel-1').DataTable({
    "paging":   true,
    "ordering": true,
    "info":     false
  });
</script>
@if(session("pesan") == "tambah")
<script>
  $.notify({
     message: "Berhasil menambahkan data"
  },
  {
     type:'success',
     allow_dismiss:true,
     newest_on_top:false ,
     mouse_over:false,
     showProgressbar:false,
     spacing:10,
     timer:2000,
     placement:{
       from:'bottom',
       align:'right'
     },
     offset:{
       x:30,
       y:30
     },
     delay:1000 ,
     z_index:10000,
     animate:{
       enter:'animated bounce',
       exit:'animated bounce'
   }
 });
</script>
@elseif(session("pesan") == "ubah")
<script>
  $.notify({
     message: "Berhasil mengubah data"
  },
  {
     type:'success',
     allow_dismiss:true,
     newest_on_top:false ,
     mouse_over:false,
     showProgressbar:false,
     spacing:10,
     timer:2000,
     placement:{
       from:'bottom',
       align:'right'
     },
     offset:{
       x:30,
       y:30
     },
     delay:1000 ,
     z_index:10000,
     animate:{
       enter:'animated bounce',
       exit:'animated bounce'
   }
 });
</script>
@elseif(session("pesan") == "hapus")
<script>
  $.notify({
     message: "Berhasil menghapus data"
  },
  {
     type:'success',
     allow_dismiss:true,
     newest_on_top:false ,
     mouse_over:false,
     showProgressbar:false,
     spacing:10,
     timer:2000,
     placement:{
       from:'bottom',
       align:'right'
     },
     offset:{
       x:30,
       y:30
     },
     delay:1000 ,
     z_index:10000,
     animate:{
       enter:'animated bounce',
       exit:'animated bounce'
   }
 });
</script>
@endif
@endsection