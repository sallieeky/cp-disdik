@extends('layouts.dashboard-base')
@section("title", "Kelola Halaman Anggaran")
@section("content")
<div class="container-fluid">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Kelola Anggaran</h5>
          <span>Kelola anggaran Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
        </div>
        <div class="card-body">
          <form action="/dashboard/kelola-halaman/anggaran/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Nama<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Anggaran" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Tahun<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="number" name="tahun" placeholder="Tahun Anggaran" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Jenis Anggaran<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" list="jenisAnggaran" id="exampleDataList" placeholder="Jenis Anggaran" name="jenis_anggaran" required>
                    <datalist id="jenisAnggaran">
                      @foreach ($jenisAnggaran as $ja)
                        <option value="{{ $ja->nama }}">
                      @endforeach
                    </datalist>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">File<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" name="file_file" accept="*" required>
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
                      <th>Nama</th>
                      <th>Tahun</th>
                      <th>Jenis Regulasi</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($anggaran as $dt)
                    <tr>
                      <td>{{ $dt->nama }}</td>
                      <td>{{ $dt->tahun }}</td>
                      <td>{{ $dt->jenisAnggaran->nama }}</td>
                      <td><a href="/storage/anggaran/{{ $dt->file }}" target="_blank" class="btn btn-primary"><i class="fa fa-download"></i></a></td>
                      <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah-modal-{{ $dt->id }}">
                          <i class="fa fa-pencil-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $dt->id }}">
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

@foreach ($anggaran as $dt)
<!-- Ubah Modal -->
<div class="modal fade" id="ubah-modal-{{ $dt->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/kelola-halaman/anggaran/ubah" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="nama" placeholder="Nama Anggaran" required value="{{ $dt->nama }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tahun<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="number" name="tahun" placeholder="Tahun Anggaran" required value="{{ $dt->tahun }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jenis Anggaran<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" list="jenisAnggaran" id="exampleDataList" placeholder="Jenis Anggaran" name="jenis_anggaran" required value="{{ $dt->jenisAnggaran->nama }}">
                  <datalist id="jenisAnggaran">
                    @foreach ($jenisAnggaran as $ja)
                      <option value="{{ $ja->nama }}">
                    @endforeach
                  </datalist>
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">File<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" name="file_file" accept="*">
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
        <form action="/dashboard/kelola-halaman/anggaran/hapus" method="post" enctype="multipart/form-data">
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