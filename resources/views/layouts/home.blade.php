@extends('layouts.template')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
        data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Saya <span>Khosy Robbin Hood</span> perancang website Info Buku</h2>
                    <p>Selamat datang di "Info Buku" - Portal Informasi Buku Terlengkap!

                        Kami adalah destinasi utama bagi para pecinta buku, penulis, dan pembaca yang haus akan
                        pengetahuan. Di "Info Buku," kami memahami pentingnya buku dalam membentuk pikiran dan
                        menginspirasi perubahan positif dalam hidup Anda.</p>
                    <a href="{{ asset('template') }}/contact.html" class="btn-get-started">Detail Saya</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ asset('template') }}/assets/img/gallery/gallery-1.jpg" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="{{ asset('template') }}/assets/img/gallery/gallery-1.jpg" title="Gallery 1"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="{{ asset('template') }}/gallery-single.html" class="details-link"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ asset('template') }}/assets/img/gallery/gallery-2.jpg" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="{{ asset('template') }}/assets/img/gallery/gallery-2.jpg" title="Gallery 2"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="{{ asset('template') }}/gallery-single.html" class="details-link"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ asset('template') }}/assets/img/gallery/gallery-3.jpg" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <span class="custom-text mb-2">Teks Anda di sini</span>
                                <a href="{{ asset('template') }}/assets/img/gallery/gallery-3.jpg" title="Gallery 3"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="{{ asset('template') }}/gallery-single.html" class="details-link"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ asset('template') }}/assets/img/gallery/gallery-4.jpg" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center flex-column">
                                <span class="custom-text mb-2">Teks Anda di sini</span>
                                <a href="{{ asset('template') }}/assets/img/gallery/gallery-4.jpg" title="Gallery 4"
                                    class="glightbox preview-link mb-2"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="{{ asset('template') }}/gallery-single.html" class="details-link mb-2"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->
@endsection
