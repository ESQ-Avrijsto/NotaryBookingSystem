@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $klien->nama_klien }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $klien->id_klien }}</h6>
                <p class="card-text">Alamat: {{ $klien->alamat }}</p>
                <p class="card-text">Kontak: {{ $klien->no_tlp }}</p>
    
            <a class="btn btn-primary d-block my-5" href="/dashboard/klien">Kembali</a>
        </div>
    </div>
</div>
@endsection