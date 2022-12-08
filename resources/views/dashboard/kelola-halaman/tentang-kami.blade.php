@extends('layouts.dashboard-base')
@section("title", "Kelola Halaman Tentang Kami")
@section("css")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="/tes/editor.css" type="text/css" rel="stylesheet"/>
@endsection
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
                <textarea id="demo-editor-bootstrap"></textarea>
                <input type="hidden" name="profil" id="inputValue" required>
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
  </div>
</div>
@endsection

@section("script") 
<script src="/tes/editor.js"></script>
<script>
  $('#tabel-1').DataTable({
    "paging":   true,
    "ordering": true,
    "info":     false
  });
  $("#demo-editor-bootstrap").Editor();
  const inputValue = document.getElementById("inputValue");
  const editorValue = document.getElementById("editorValue");
  inputValue.value = `{!! $profil->nilai !!}`
  editorValue.innerHTML = `{!! $profil->nilai !!}`

  editorValue.addEventListener("keyup", function() {
    inputValue.value = editorValue.innerHTML;
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