@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jadwal</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/booking/{{ $booking->id_jadwal }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id_jadwal" class="form-label">ID Jadwal</label>
          <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" id="id_jadwal" name="id_jadwal" value="{{ old('id_jadwal', $booking->id_jadwal) }}" required autofocus>
          @error('id_jadwal')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="id_notaris" class="form-label">ID Notaris</label>
          <input type="text" class="form-control @error('id_notaris') is-invalid @enderror" id="id_notaris" name="id_notaris" value="{{ old('id_notaris', $booking->id_notaris) }}" required autofocus>
          @error('id_notaris')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="id_klien" class="form-label">ID Klien</label>
          <input type="text" class="form-control @error('id_klien') is-invalid @enderror" id="id_klien" name="id_klien" value="{{ old('id_klien', $booking->id_klien) }}" required autofocus>
          @error('id_klien')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="start_date" class="form-label">Mulai</label>
          <input type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $booking->start_date) }}" required autofocus>
          @error('start_date')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="end_date" class="form-label">Berakhir</label>
          <input type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $booking->end_date) }}" required autofocus>
          @error('end_date')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection