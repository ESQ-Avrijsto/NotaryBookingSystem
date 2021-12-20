@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Notaris</h1>
  </div>
  <div class="col-lg-8">
       <form method="POST" action="/dashboard/notaris">
        @csrf
        <div class="mb-3">
          <label for="id_notaris" class="form-label">ID Notaris</label>
          <input type="text" class="form-control @error('id_notaris') is-invalid @enderror" id="id_notaris" name="id_notaris" value="{{ old('id_notaris') }}" required autofocus>
          @error('id_notaris')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="nama_notaris" class="form-label">Nama Notaris</label>
          <input type="text" class="form-control @error('nama_notaris') is-invalid @enderror" id="nama_notaris" name="nama_notaris" value="{{ old('nama_notaris') }}" required autofocus>
          @error('nama_notaris')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required autofocus>
          @error('alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="no_tlp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}" required autofocus>
          @error('no_tlp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required autofocus>
          @error('jabatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      {{-- <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id">
          @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
                  <option value="{{ $category->id}}" selected>{{ $category->name }}</option>
              @else
                  <option value="{{ $category->id}}">{{ $category->name }}</option>
              @endif
          @endforeach
      </select>
  </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
           <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
  <trix-editor input="body"></trix-editor>
  </div> --}}

  
    
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>
  </div>
 
 

@endsection