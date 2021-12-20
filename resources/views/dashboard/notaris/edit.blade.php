@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Posts</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/notaris/edit" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id_notaris" class="form-label">ID Notaris</label>
          <input type="text" class="form-control @error('id_notaris') is-invalid @enderror" id="id_notaris" name="id_notaris" value="{{ old('id_notaris', $notaris->id_notaris) }}" required autofocus>
          @error('id_notaris')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="nama_notaris" class="form-label">Nama Notaris</label>
          <input type="text" class="form-control @error('nama_notaris') is-invalid @enderror" id="nama_notaris" name="nama_notaris" value="{{ old('nama_notaris', $notaris->nama_notaris) }}" required autofocus>
          @error('nama_notaris')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $notaris->alamat) }}" required autofocus>
          @error('alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="no_tlp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp', $notaris->no_tlp) }}" required autofocus>
          @error('no_tlp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', $notaris->jabatan) }}" required autofocus>
          @error('jabatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection