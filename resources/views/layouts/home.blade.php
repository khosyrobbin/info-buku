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

                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('tentang') }}" class="btn-get-started">Detail Saya</a>
                        @endif
                    @else
                        <a href="{{ route('tentang') }}" class="btn-get-started">Detail Saya</a>
                        <a href="{{ route('home.create') }}" class="btn btn-outline-success">Tambah Buku</a>
                    @endguest
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    @foreach ($buku as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">

                                <img src="{{ asset('uploads/' . $item->gambar) }}" class="img-fluid" alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center flex-column">
                                    <span class="custom-text"><strong>"{{ $item->judul }}"</strong></span>
                                    <span class="custom-text mb-4">{{ $item->penulis }}</></span>
                                    <a href="{{ asset('uploads/' . $item->gambar) }}"
                                        title="Judul: {{ $item->judul }}<br> Penulis: {{ $item->penulis }}<br> Penerbit: {{ $item->penerbit }}<br> Tanggal Terbit: {{ $item->tanggal_terbit }}"
                                        class="glightbox preview-link mb-4"><i class="bi bi-arrows-angle-expand"></i></a>
                                    @guest
                                    @else
                                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            <a href="{{ route('buku.edit', $item->id) }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    @endguest
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->
@endsection
