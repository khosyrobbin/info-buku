@extends('layouts.template')
@section('content')
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Tambah Buku</h2>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-9">
                        <form action="{{ route('home.store') }}" method="POST" role="form"
                            enctype="multipart/form-data">

                            @csrf

                            {{-- <div class="form-group mt-3">
                                <label for="kode_buku"><strong>kode_buku</strong></label>
                                <input type="text" class="form-control" name="kode_buku" id="kode_buku" required>
                                @error('kode_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}
                            <div class="form-group mt-3">
                                <label for="judul"><strong>Judul</strong></label>
                                <input type="text" class="form-control" name="judul" id="judul" required>
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="penerbit"><strong>Penerbit</strong></label>
                                <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                                @error('penerbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="tanggal_terbit"><strong>Tanggal terbit</strong></label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tanggal_terbit" id="tanggal_terbit"
                                        required>
                                </div>
                                @error('tanggal_terbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gambar"><strong>Gambar</strong></label>
                                <input type="file" class="form-control custom-file-input" name="gambar" id="gambar"
                                    accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('gambar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3"><img src="" id="output" alt="" width="250"></div>
                            <div class="text-center">
                                <button type="submit" class="">Submit</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
