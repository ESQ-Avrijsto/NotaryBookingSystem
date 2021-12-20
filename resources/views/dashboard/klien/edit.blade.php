@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Klien</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/klien/{{ $klien->id_klien }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id_klien" class="form-label">ID Klien</label>
          <input type="text" class="form-control @error('id_klien') is-invalid @enderror" id="id_klien" name="id_klien" value="{{ old('id_klien', $klien->id_klien) }}" required autofocus>
          @error('id_klien')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="nama_klien" class="form-label">Nama Klien</label>
          <input type="text" class="form-control @error('nama_klien') is-invalid @enderror" id="nama_klien" name="nama_klien" value="{{ old('nama_klien', $klien->nama_klien) }}" required autofocus>
          @error('nama_klien')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $klien->alamat) }}" required autofocus>
          @error('alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="no_tlp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp', $klien->no_tlp) }}" required autofocus>
          @error('no_tlp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection