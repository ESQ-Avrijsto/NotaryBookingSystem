@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $notaris->nama_notaris }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $notaris->id_notaris }}</h6>
                <p class="card-text">Alamat: {{ $notaris->alamat }}</p>
                <p class="card-text">Kontak: {{ $notaris->no_tlp }}</p>
                <p class="card-text">Jabatan: {{ $notaris->jabatan }}</p>  

            <a class="btn btn-primary d-block my-5" href="/dashboard/notaris">Kembali</a>
        </div>
    </div>
</div>
@endsection

