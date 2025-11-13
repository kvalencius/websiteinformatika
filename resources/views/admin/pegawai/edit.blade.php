@extends('layout.layout_admin.layout_admin')

@section ('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
    >
        <h1 class="h2">Tambah Pegawai</h1>    
    </div>  

<!-- Form Tambah Pegawai -->
<form action="/pegawai/update/{{ $pegawai->pegawai_id }}" method="POST">
    {{ csrf_field() }}
<div class="mb-3">
  <label for="Nama" class="form-label">Nama Pegawai</label>
  <input type="text" class="form-control" id="nama"  name="nama" value="{{ $pegawai->pegawai_nama }}">
</div>
<div class="mb-3">
  <label for="Jabatan" class="form-label">Jabatan Pegawai</label>
  <input type="text" class="form-control" id="jabatan" placeholder="Web Developer" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}">
</div>
<div class="mb-3">
  <label for="Umur" class="form-label">Umur Pegawai</label>
  <input type="number" class="form-control" id="umur" name="umur" value="{{ $pegawai->pegawai_umur }}">
</div>
<div class="mb-3">
  <label for="Alamat" class="form-label">Alamat Pegawai</label>
  <textarea class="form-control" id="alamat" rows="3" placeholder="Ki. Gotong Royong No. 646, Sukabumi 30063, Sulut" name="alamat">{{ $pegawai->pegawai_alamat }}</textarea>
</div>
<div class="d-inline-block ms-2">
<button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
  <path d="M12 2h-2v3h2z"/>
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
</svg> Simpan</button>
</div>
<a href="{{ url('/pegawai') }}">
<button type="button" class="btn btn-secondary end-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg> Kembali</button>
</a>
</form>

</main>
@endsection