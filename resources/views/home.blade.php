@extends('layouts.main')

{{-- @section('title', 'Home') --}}

@section('container')
    <!-- Jumbotron -->
        <section id="home" class="jumbotron text-center">
            <img src="/img/nisa.jpg" alt="PP" width="250" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Kenotariatan Ibunya Tito</h1>
            <p class="lead">Catat | Cetak | Legal</p>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- About -->
        <section id="about" class="mt-3">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Tentang Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-8 mb-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir About -->
        
        <!-- Projects -->
        <section id="projects" class="mt-3">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Layanan Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="/img/1.JPG" class="card-img-top" alt="1">
                            <div class="card-body text-black-50">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="/img/2.JPG" class="card-img-top" alt="2">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="/img/3.JPG" class="card-img-top" alt="3">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Projects -->

        <!-- Contact -->
        <section id="contact">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Kontak Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5">
                    <div class="col-md-8 mb-3">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Contact -->
@endsection