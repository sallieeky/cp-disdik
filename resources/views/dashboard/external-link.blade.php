@extends('layouts.dashboard-base')
@section("title", "Kelola External Link")
@section("content")

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
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
                      @foreach ($jenis as $jn)
                        <option value="{{ $jn->id }}">{{ $jn->nama }}</option>
                      @endforeach
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
                      <th>Gambar</th>
                      <th>URL</th>
                      <th>Jenis Link</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                    <tr>
                      <td><img class="img" height="50" src="/storage/external-link/{{ $dt->gambar }}" alt="{{ $dt->url }}"></td>
                      <td><a href="{{ $dt->url }}" target="_blank">{{ $dt->url }} <i class="fa fa-external-link"></i></a></td>
                      <td>{{ $dt->jenis_link->nama }}</td>
                      <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah-modal">
                          <i class="fa fa-pencil-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal">
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

@foreach ($data as $dt)
<!-- Ubah Modal -->
<div class="modal fade" id="ubah-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/external-link/ubah" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $dt->id }}">
          <input type="hidden" name="gambar" value="{{ $dt->gambar }}">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Gambar</label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" accept="image/*" name="file_gambar">
                  <small class="text-info">*boleh dikosongkan</small>
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">URL<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="url" placeholder="https://contoh.com" value="{{ $dt->url }}" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="jenis">Jenis<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-select digits" id="jenis" name="jenis_link_id" required>
                    @foreach ($jenis as $jn)
                      <option value="{{ $jn->id }}" @if($jn->id == $dt->jenis_link_id) selected @endif>{{ $jn->nama }}</option>
                    @endforeach
                  </select>
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
<div class="modal fade" id="hapus-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <form action="/dashboard/external-link/hapus" method="post" enctype="multipart/form-data">
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