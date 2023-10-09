@extends('layouts.template')
@section('content')
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Tentang</h2>
                        <p>Merupakan lulusan Politeknik Negeri Malang dengan Program Studi D-IV Teknik Informatika dengan IPK 3.61.</p>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('template') }}/assets/img/robbin.JPEG" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 content">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>31 Maret
                                            2001</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tempat Lahir:</strong>
                                        <span>Banyuwangi</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>No HP:</strong> <span>0822 3259
                                            8644</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tempat Tinggal:</strong>
                                        <span>Banyuwangi</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>22</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>khosyrh@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    @endsection
