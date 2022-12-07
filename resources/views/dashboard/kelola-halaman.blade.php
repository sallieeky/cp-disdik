@extends('layouts.dashboard-base')
@section("title", "Kelola Halaman")
@section("content")

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Kelola halaman</h5>
          <span>Kelola halaman yang ada pada landing page</span>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive table-sm">
                <table class="display " id="tabel-1">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Url</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                    <tr>
                      <td>{{ $dt->judul }}</td>
                      <td><a href="{{ $dt->url }}" target="_blank">{{ $dt->url }} <i class="fa fa-external-link"></i></a></td>
                      <td><a href="/kelola-halaman/{{ $dt->id }}" class="btn btn-outline-primary">Kelola <i class="fa fa-wrench"></i></a></td>
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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Kelola external link</h5>
          <span>Kelola external link dari aplikasi-aplikasi dan website yang berhubungan dengan Dinas Pendidikan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <form action="/dashboard/external-link/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Gambar<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" accept="image/*" name="file_gambar" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">URL<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" name="url" placeholder="https://contoh.com" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label" for="jenis">Jenis<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-select digits" id="jenis" name="jenis_link_id" required>
                    </select>
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
                      <th>Judul</th>
                      <th>Url</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" target="_blank">Tes halaman 1</a></td>
                      <td><a href="#" target="_blank">https://tes.com <i class="fa fa-external-link"></i></a></td>
                      <td><a href="#" class="btn btn-outline-primary">Kelola <i class="fa fa-wrench"></i></a></td>
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