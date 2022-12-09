@extends('layouts.dashboard-base')
@section("title", "Kelola Halaman Regulasi")
@section("content")
<div class="container-fluid">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Kelola Regulasi</h5>
          <span>Kelola regulasi Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <form action="/dashboard/kelola-halaman/regulasi/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Judul<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" name="judul" placeholder="Judul Berita" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Gambar<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" name="file_gambar" accept=".jpg, .jpeg, .png" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Deskripsi<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="20" placeholder="Deskripsi Berita" required></textarea>
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
                <table class="display" id="tabel-1">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Gambar</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>awdjajiodawjoi</td>
                      <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah-modal-{{ "id" }}">
                          <i class="fa fa-pencil-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ "id" }}">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
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

{{-- @foreach ($berita as $dt)
<!-- Ubah Modal -->
<div class="modal fade" id="ubah-modal-{{ $dt->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/kelola-halaman/berita/ubah" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Judul<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="judul" placeholder="Judul Berita" required value="{{ $dt->judul }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Gambar<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" name="file_gambar" accept=".jpg, .jpeg, .png">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Deskripsi<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="20" placeholder="Deskripsi Berita" required>{!! str_replace('<br />', '', $dt->deskripsi) !!}</textarea>
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
        <form action="/dashboard/kelola-halaman/berita/hapus" method="post" enctype="multipart/form-data">
          @csrf
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" name="id" value="{{ $dt->id }}" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach --}}

@endsection

@section("script") 
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