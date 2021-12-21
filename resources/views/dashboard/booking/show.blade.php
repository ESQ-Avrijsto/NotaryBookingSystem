@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">ID Jadwal: {{ $booking->id_jadwal }}</h5>
                <h6 class="card-subtitle mb-2 ">ID Notaris: {{ $booking->id_notaris }}</h6>
                <h6 class="card-subtitle mb-2 ">ID Klien: {{ $booking->id_klien }}</h6>
                <p class="card-text">Mulai: {{ $booking->start_date }}</p>
                <p class="card-text">Berakhir: {{ $booking->end_date }}</p>
        
            <a class="btn btn-primary d-block my-5" href="/dashboard/booking">Kembali</a>
        </div>
    </div>
</div>
@endsection