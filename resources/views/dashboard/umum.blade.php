@extends('layouts.dashboard-base')
@section("title", "Kelola Data Umum")
@section("content")

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Ubah Icon</h5>
        </div>
        <div class="card-body">
          <form action="/dashboard/umum/icon/ubah" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <label class="col-sm-3 col-form-label"><img src="/storage/icon/{{ $icon }}" alt="Icon" class="img img-fluid"></label>
                  <div class="col-sm-9">
                    <input class="form-control mb-2" type="file" accept="image/*" name="file_gambar" required>
                    <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100">Ubah</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Hero Section Pada Halaman Beranda</h5>
        </div>
        <div class="card-body">
          <form action="/dashboard/umum/hero/ubah" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 row">
                  {{-- gambar --}}
                  <label class="col-sm-3 col-form-label">Gambar<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <label class="col-sm-3 col-form-label"><img src="/storage/hero/{{ $hero["hero"] }}" alt="Icon" class="img img-fluid"></label>
                    <input class="form-control" type="file" accept="image/*" name="file_gambar">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Subtitle<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="subtitle" placeholder="Masukkan subtitle" required rows="7">{{ $hero["subtitle"] }}</textarea>
                  </div>
                </div>
                <button type="submit" id="bootstrap-notify-gen-btn" class="btn btn-primary w-100">Ubah</button>
              </div>
            </div>
            <hr>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
@section("script") 
<script>
  $('#tabel-1').DataTable({
    "paging":   true,
    "ordering": true,
    "info":     false
  });
  $('#ubahModal').modal('show');
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