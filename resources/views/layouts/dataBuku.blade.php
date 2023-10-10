@extends('layouts.template')
@section('content')
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Daftar Buku</h2>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- Formulir Pencarian -->
        <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
            data-aos-delay="1500">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <form action="{{ route('buku.index') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                    placeholder="Cari berdasarkan penulis, penerbit, atau judul"
                                    name="search">
                                <div class="input-group-append">
                                    <button class="btn-get-started" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-9">
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Buku</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tanggal Terbit</th>
                                    <th scope="col">Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $item)
                                    <tr>
                                        <td>{{ $item->kode_buku }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->tanggal_terbit }}</td>
                                        <td>
                                            @if ($item->gambar)
                                                <img src="{{ asset('uploads/' . $item->gambar) }}" alt="Gambar Buku"
                                                    width="100">
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
