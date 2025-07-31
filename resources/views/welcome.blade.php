<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Aplikasi Pengaduan Masyarakat Siak</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Questrial:wght@400&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <h1 class="sitename">Aplikasi Pengaduan Masyarakat</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#how-we-work">Alur Pengaduan</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#portfolio">Galeri</a></li>
                    <li><a href="#contact">Pengaduan</a></li>
                    <li><a href="{{ route('login') }}">Masuk</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>Aplikasi Pengaduan Masyarakat <span> <br>Siak</span></h1>
                            <p>Aplikasi resmi untuk memfasilitasi masyarakat Kabupaten Siak dalam menyampaikan pengaduan
                                terhadap layanan publik secara cepat, mudah, dan transparan.</p>
                            <div class="hero-actions justify-content-center justify-content-lg-start">
                                <a href="#how-we-work" class="btn-primary scrollto">Ajukan Pengaduan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="img/siak.png" class="img-fluid floating" alt="" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="img/diskominfotik.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/disparbudpora.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Clients Section -->

        <!-- How We Work Section -->
        <section id="how-we-work" class="how-we-work section">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Alur Pengaduan</h2>
                <p>Aplikasi Pengaduan Masyarakat Siak</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="steps-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="step-item">
                                <div class="step-circle">
                                    <span>1</span>
                                </div>
                                <h3>1. Pengajuan</h3>
                                <p>Warga mengisi formulir pengaduan dengan data yang lengkap melalui aplikasi ini.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="step-item">
                                <div class="step-circle">
                                    <span>2</span>
                                </div>
                                <h3>2. Verifikasi</h3>
                                <p>Petugas Dinas terkait akan meninjau dan memverifikasi pengaduan yang masuk.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="step-item">
                                <div class="step-circle">
                                    <span>3</span>
                                </div>
                                <h3>3. Tindak Lanjut</h3>
                                <p>Pengaduan diteruskan ke instansi terkait untuk segera ditindaklanjuti.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="step-item">
                                <div class="step-circle">
                                    <span>4</span>
                                </div>
                                <h3>4. Respon dan Selesai</h3>
                                <p>Pihak terkait memberikan respon atau solusi, dan pelapor mendapatkan notifikasi
                                    status.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /How We Work Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="img/istana.jpg" alt="About" class="img-fluid">
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="col-lg-6">
                        <div class="content">
                            <h2>Apa Itu Aplikasi Pengaduan Masyarakat Siak?</h2>
                            <p class="lead">Platform digital yang dikembangkan oleh Pemerintah Kabupaten Siak untuk
                                meningkatkan partisipasi publik dan akuntabilitas layanan.</p>
                            <p>Aplikasi ini memungkinkan masyarakat menyampaikan keluhan, kritik, atau saran terhadap
                                pelayanan publik yang diselenggarakan oleh OPD (Organisasi Perangkat Daerah) secara
                                langsung, mudah diakses, dan transparan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Dokumentasi Kegiatan</h2>
                <p>Berikut adalah beberapa dokumentasi dan hasil tindak lanjut dari pengaduan masyarakat yang telah
                    ditangani.</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="fitRows"
                    data-sort="original-order">
                    <div class="row gy-4 portfolio-grid isotope-container">
                        @foreach ($galleries as $gallery)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid"
                                            alt="{{ $gallery->title }}" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('storage/' . $gallery->image) }}"
                                                    class="glightbox zoom-link" title="{{ $gallery->title }}">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>{{ $gallery->title }}</h3>
                                        <p>{{ $gallery->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Portfolio Item -->
                    </div>
                    <!-- End Portfolio Grid -->
                </div>
            </div>
        </section>
        <!-- /Portfolio Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Pertanyaan yang Sering Diajukan (FAQ)</h2>
                <p>Temukan jawaban atas pertanyaan umum seputar proses dan penggunaan Aplikasi Pengaduan Masyarakat
                    Siak.</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="faq-wrapper">
                            <div class="faq-item faq-active">
                                <div class="faq-header">
                                    <span class="faq-number">01</span>
                                    <h4>Bagaimana cara mengirimkan pengaduan?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Klik tombol "Ajukan Pengaduan", isi formulir yang tersedia, lalu kirimkan.
                                            Anda akan mendapat notifikasi setelah pengaduan diproses.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ Item -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span class="faq-number">02</span>
                                    <h4>Apakah pengaduan saya bersifat rahasia?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Ya. Identitas pelapor akan dijaga kerahasiaannya kecuali atas permintaan
                                            hukum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ Item -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span class="faq-number">03</span>
                                    <h4>Berapa lama waktu proses pengaduan?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Rata-rata 1–7 hari kerja tergantung tingkat urgensi dan jenis pengaduan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Pengaduan</h2>
                <p>Ada keluhan, saran, atau laporan terkait layanan publik? Sampaikan pengaduan Anda sekarang melalui
                    aplikasi ini. Kami siap mendengarkan dan menindaklanjuti demi pelayanan yang lebih baik.</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-7 order-lg-1 order-2">
                        <div class="contact-form-container">
                            <div class="form-intro">
                                <h2>Ayo lakukan pengaduan</h2>
                                <p>Isi formulir di bawah ini untuk mengirimkan pengaduan Anda. Pastikan data yang
                                    Anda berikan lengkap dan jelas agar kami dapat menindaklanjuti dengan cepat.</p>
                            </div>
                            <form action="{{ route('report.store') }}" method="post"
                                class="php-email-form contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" id="userName"
                                                placeholder="Nama Anda" required="">
                                            <label for="userName" class="field-label">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="email" class="form-input" name="email" id="userEmail"
                                                placeholder="Email Anda" required="">
                                            <label for="userEmail" class="field-label">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="tel" class="form-input" name="phone" id="userPhone"
                                                placeholder="Nomor HP Anda">
                                            <label for="userPhone" class="field-label">Nomor HP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" class="form-input" name="subject"
                                                id="messageSubject" placeholder="Subjek" required="">
                                            <label for="messageSubject" class="field-label">Subjek</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field message-field">
                                    <textarea class="form-input message-input" name="message" id="userMessage" rows="5"
                                        placeholder="Laporkan apa aspirasi dan kritik anda" required=""></textarea>
                                    <label for="userMessage" class="field-label">Pesan</label>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
                                </div>
                                <button type="submit" class="send-button">
                                    Kirim Pengaduan
                                    <span class="button-arrow">→</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-2 order-1">
                        <div class="contact-sidebar">
                            <div class="contact-header">
                                <h3>Hubungi Kami</h3>
                                <p>Silakan hubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih
                                    lanjut.</p>
                            </div>
                            <div class="contact-methods">
                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Alamat</span>
                                        <p>R22C+R7Q, Sungai Mempura<br>Kec. Mempura, Kabupaten Siak, Riau 28773</p>
                                    </div>
                                </div>
                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Jam Operasional</span>
                                        <p>
                                            Senin: 07.30 – 16.00<br>
                                            Selasa: 07.30 – 16.00<br>
                                            Rabu: 07.30 – 16.00<br>
                                            Kamis: 07.30 – 16.30<br>
                                            Jumat: 07.30 – 16.30<br>
                                            Sabtu: Tutup<br>
                                            Minggu: Tutup
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="connect-section">
                                <span class="connect-label">Terkoneksi dengan kami</span>
                                <div class="social-links">
                                    <a href="#" class="social-link">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="footer-content">
                        <a href="#" class="logo d-flex align-items-center mb-4">
                            <span class="sitename">Aplikasi Pengaduan Masyarakat Siak</span>
                        </a>
                        <p class="mb-4">
                            Platform pengaduan resmi dari Pemerintah Kabupaten Siak untuk meningkatkan kualitas
                            pelayanan publik melalui partisipasi masyarakat.
                        </p>
                        <div class="newsletter-form">
                            <h5>Berlangganan Info</h5>
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Masukkan email Anda" required>
                                    <button type="submit" class="btn-subscribe">
                                        <i class="bi bi-send"></i>
                                    </button>
                                </div>
                                <div class="loading">Memuat...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Terima kasih telah berlangganan!</div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="footer-links">
                        <h4>Tautan Cepat</h4>
                        <ul>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Beranda</a></li>
                            <li><a href="#how-we-work"><i class="bi bi-chevron-right"></i> Alur Pengaduan</a></li>
                            <li><a href="#about"><i class="bi bi-chevron-right"></i> Tentang</a></li>
                            <li><a href="#portfolio"><i class="bi bi-chevron-right"></i> Galeri</a></li>
                            <li><a href="#faq"><i class="bi bi-chevron-right"></i> FAQ</a></li>
                            <li><a href="#contact"><i class="bi bi-chevron-right"></i> Pengaduan</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Ajukan Pengaduan</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Cek Status Pengaduan</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Panduan Pengguna</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Laporan Publik</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-contact">
                        <h4>Hubungi Kami</h4>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="contact-info">
                                <p>Dinas Komunikasi dan Informatika<br>Kabupaten Siak, Riau, Indonesia</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="contact-info">
                                <p>(0764) 1234567</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="contact-info">
                                <p>pengaduan@siakkab.go.id</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>© <span>{{ date('Y') }}</span> <strong class="px-1 sitename">Aplikasi Pengaduan
                                    Masyarakat Siak</strong> - DISKOMINFO Siak</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="footer-bottom-links">
                            <a href="#">Kebijakan Privasi</a>
                            <a href="#">Syarat & Ketentuan</a>
                        </div>
                        <div class="credits">
                            Dikembangkan oleh <a href="#">Raudhah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
