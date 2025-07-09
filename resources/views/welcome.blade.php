<!DOCTYPE html>
<!--
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyFaskes</title>
     
    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- End Google Font-->
    
    <!-- ======= Styles =======-->
    <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendors/aos/aos.css" rel="stylesheet">
    <!-- End Styles-->
    
    <!-- ======= Theme Style =======-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- End Theme Style-->
    
    <!-- ======= Apply theme =======-->
    <script>
      // Apply the theme as early as possible to avoid flicker
      (function() {
      const storedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>
  </head>
  <body>
    
    
    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">
      
      
      <!-- ======= Header =======-->
      <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
        <div class="container d-flex align-items-center justify-content-between">
          
          
          <!-- Start Logo-->
          <a class="navbar-brand w-auto" href="index.html">
           <img class="logo img-fluid" src="assets/images/logofaskes-.png" alt="Logo" style="height: 40px; vertical-align: middle;">

            </a>
          <!-- End Logo-->
          
          <!-- Start offcanvas-->
          <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1" aria-labelledby="fbs__net-navbarsLabel">
            
            
            <div class="offcanvas-header">
              <div class="offcanvas-header-logo">
                <!-- If you use a text logo, uncomment this if it is commented-->
                
                <!-- h5#fbs__net-navbarsLabel.offcanvas-title Vertex-->
                
                <!-- If you plan to use an image logo, uncomment this if it is commented-->
                <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">
                  
                  
                  <!-- logo dark--><img class="logo dark img-fluid" src="assets/images/logo-dark.svg" alt="FreeBootstrap.net image placeholder"> 
                  
                  <!-- logo light--><img class="logo light img-fluid" src="assets/images/logo-light.svg" alt="FreeBootstrap.net image placeholder"></a>
                
              </div>
              <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body align-items-lg-center">
              
              
              <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#features">Faskes</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#kategoris">Kategoris</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">Team</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#footer">Contact</a></li>
              </ul>
              
            </div>
          </div>
          <!-- End offcanvas-->
          
          <div class="ms-auto w-auto">
            
            <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2" href="{{ route('filament.pasien.auth.register')}}">Sign Up</a>
            <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2" href="{{ route('filament.pasien.auth.login')}}">Login</a>
              
              <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto" data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars" aria-label="Toggle navigation" aria-expanded="false">
                <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="21" x2="3" y1="6" y2="6"></line>
                  <line x1="15" x2="3" y1="12" y2="12"></line>
                  <line x1="17" x2="3" y1="18" y2="18"></line>
                </svg>
                <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
              
            </div>
            
          </div>
        </div>
      </header>
      <!-- End Header-->
      
      <!-- ======= Main =======-->
      <main>
        
        
        <!-- ======= Hero =======-->
        <section class="hero__v6 section" id="home">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                  <div class="col-lg-11"><span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">MyFaskes With You</span>
                    <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">Layanan Fasilitas Kesehatan yang Mudah, Cepat, dan Terpercaya</h1>
                    <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">Temukan dan akses berbagai fasilitas kesehatan terbaik di sekitarmu. Dari klinik hingga rumah sakit, semua ada dalam satu platform.</p>
                    <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300"><a class="btn" href="#features">Cari Faskes Sekarang</a><a class="btn btn-white-outline" href="#"> Pelajari Lebih Lanjut
                        <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg></a></div>
                    <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400">
  <span class="logos-title text-uppercase mb-4 d-block">Didukung Oleh</span>
  <div class="logos-images d-flex gap-4 align-items-center">
    <img class="img-fluid" src="assets/images/Logo BPJS Kesehatan.png" alt="BPJS Kesehatan" style="width: 110px;">
    <img class="img-fluid" src="assets/images/logo-195-balitbangkes.png" alt="Dinas Kesehatan" style="width: 100px;">
    <img class="img-fluid" src="assets/images/dinas-kesehatan.jpg" alt="Puskesmas" style="width: 150px;">
  </div>
</div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero-img"><img class="img-main img-fluid rounded-4" src="assets/images/op.avif" alt="Hero Image" data-aos="fade-in" data-aos-delay="500"></div>
              </div>
            </div>
          </div>
          <!-- End Hero-->
        </section>
        <!-- End Hero-->
        
        <!-- ======= About =======-->
        <section class="about__v4 section" id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-md-2">
                <div class="row justify-content-end">
                  <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">About us</span>
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">Apa itu MyFaskes?</h2>
                    <div data-aos="fade-up" data-aos-delay="200">
                      <p>MyFaskes adalah platform digital yang membantu masyarakat Indonesia dalam mencari, dan mengakses fasilitas kesehatan terbaik di seluruh wilayah.</p>
                      <p>Kami percaya bahwa pelayanan kesehatan yang berkualitas harus mudah ditemukan, transparan, dan terjangkau. Dengan MyFaskes, kamu bisa melihat informasi lengkap tentang klinik, puskesmas, rumah sakit, dan layanan kesehatan lainnya, langsung dari genggaman tangan.</p>
                    </div>
                    <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">Nilai Utama</h4>
                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up" data-aos-delay="400">
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Innovation</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Aksesibilitas</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Kualitas Layanan</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Informasi Terpercaya</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Dukungan untuk Masyarakat</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6"> 
                <div class="img-wrap position-relative"><img class="img-fluid rounded-4" src="assets/images/doctor.avif" alt="FreeBootstrap.net image placeholder" data-aos="fade-up" data-aos-delay="0">
                  <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                    <div>
                      <h3 class="text-uppercase fw-bold">Misi Kami</h3>
                      <p class="fs-5 mb-0">Meningkatkan kemudahan akses masyarakat terhadap layanan kesehatan.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About-->
        
        <!-- ======= Features =======-->
        <section class="section features__v2" id="features">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                  <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                      <div class="row"> 
                        <div class="col-lg-11">
                          <div class="h-100 flex-column justify-content-between d-flex">
                            <div>
                              <h2 class="mb-4">Jenis Fasilitas Kesehatan</h2>
                              <p class="mb-5">Di MyFaskes, kamu dapat menemukan berbagai jenis fasilitas kesehatan sesuai kebutuhanmu, mulai dari layanan dasar hingga lanjutan.</p>
                            </div>
                            <div class="align-self-start"><a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" href="https://youtu.be/3DGJT612pMw?si=4xJ6hcpsr-54TY8x" data-gallery="video"><i class="bi bi-play-fill"></i> Watch the Video</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div class="row justify-content-end">
                        <div class="col-lg-11">
                          <div class="row">
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                              <div class="icon text-center mb-4"><i class="bi bi-hospital fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Rumah Sakit Umum</h3>
                              <p>Menyediakan pelayanan kesehatan menyeluruh, mulai dari rawat jalan, rawat inap, hingga IGD.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                              <div class="icon text-center mb-4"><i class="bi bi-capsule fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Puskesmas & Klinik</h3>
                              <p>Layanan dasar untuk konsultasi dan pengobatan awal.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                              <div class="icon text-center mb-4"><i class="bi bi-heart-pulse"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Praktek Dokter Mandiri</h3>
                              <p>Temui dokter umum atau spesialis sesuai kebutuhanmu.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                              <div class="icon text-center mb-4"><i class="bi bi-droplet"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Apotek & Laboratorium</h3>
                              <p>Dapatkan obat dan lakukan pemeriksaan kesehatan.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features-->
        
        <!-- ======= kategoris =======-->
        <section class="section pricing__v2" id="kategoris">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-5 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Kategoris</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Kategori Fasilitas Kesehatan</h2>
                <p data-aos="fade-up" data-aos-delay="200">MyFaskes memudahkan kamu untuk memilih fasilitas kesehatan berdasarkan jenis pengelolaan — baik milik pemerintah, swasta, dan Yayasan.</p>
              </div>
            </div>
             <div class="row">
      <!-- Faskes Pemerintah -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 rounded-4 price-table h-100 text-center">
          <div class="icon mb-3">
            <i class="bi bi-hospital fs-1 text-success"></i>
          </div>
          <h3 class="mb-3">Pemerintah</h3>
          <p>Faskes milik negara seperti Puskesmas dan RSUD yang terjangkau dan terintegrasi BPJS.</p>
          <ul class="text-start mt-3 mb-4 mx-auto" style="max-width: 250px; list-style-type: disc;">
            <li>Terjangkau dan merata</li>
            <li>Dikelola Kemenkes/Daerah</li>
            <li>Terintegrasi dengan BPJS</li>
          </ul>
          <a href="#" class="btn btn-outline-success">Get Started</a>
        </div>
      </div>

      <!-- Faskes Swasta -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="p-4 rounded-4 price-table h-100 text-center">
          <div class="icon mb-3">
            <i class="bi bi-building fs-1 text-primary"></i>
          </div>
          <h3 class="mb-3">Swasta</h3>
          <p>Faskes milik pribadi atau organisasi yang modern dan cepat dengan banyak pilihan layanan.</p>
          <ul class="text-start mt-3 mb-4 mx-auto" style="max-width: 250px; list-style-type: disc;">
            <li>Pelayanan fleksibel</li>
            <li>Banyak pilihan spesialis</li>
            <li>Bisa asuransi/umum</li>
          </ul>
          <a href="#" class="btn btn-outline-primary">Get Started</a>
        </div>
      </div>

      <!-- Faskes Yayasan -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
        <div class="p-4 rounded-4 price-table h-100 text-center">
          <div class="icon mb-3">
            <i class="bi bi-heart-pulse fs-1 text-danger"></i>
          </div>
          <h3 class="mb-3">Yayasan</h3>
          <p>Faskes berbasis sosial dan keagamaan yang memberikan pelayanan murah atau gratis.</p>
          <ul class="text-start mt-3 mb-4 mx-auto" style="max-width: 250px; list-style-type: disc;">
            <li>Dikelola lembaga sosial</li>
            <li>Fokus pada kemanusiaan</li>
            <li>Pelayanan berbasis donasi</li>
          </ul>
          <a href="#" class="btn btn-outline-danger">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- End Pricing-->
        
        <!-- ======= Stats =======-->
        <section class="stats__v3 section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="rounded-borders">
                    <div class="rounded-border-1"></div>
                    <div class="rounded-border-2"></div>
                    <div class="rounded-border-3"></div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2">0</span><span>K+</span></h3>
                      <p class="mb-0">Fasilitas Kesehatan Terdaftar</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="2">0</span><span>%</span></h3>
                      <p class="mb-0">Kepuasan Pengguna</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="2">0</span><span></span></h3>
                      <p class="mb-0">Wilayah Terjangkau</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Stats-->
        
        <!-- ======= Services =======-->
        <section class="section services__v3" id="services">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Our Services</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Mendukung Inovasi Kesehatan Melalui Layanan Unggulan</h2>
              </div>
            </div>
            <div class="row g-4">
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="M50.327 4H25.168a6.007 6.007 0 0 0-6 6v5.11h-8.375a3.154 3.154 0 0 0-3.12 3.18v5.47a1 1 0 0 0 .724.961 3.204 3.204 0 0 1 0 6.097 1 1 0 0 0-.724.962v5.49a3.154 3.154 0 0 0 3.12 3.18H34.5c-2.147 8.057 9.408 12.135 12.77 4.441a1 1 0 0 0-1.841-.779 4.778 4.778 0 1 1-4.403-6.636c1.039-.159 2.453 1.082 3.063-.225.449-1.37-1.383-1.598-2.336-1.734V31.8a1 1 0 0 0-.72-.96 3.21 3.21 0 0 1 0-6.11 1 1 0 0 0 .72-.96v-5.48a3.154 3.154 0 0 0-3.12-3.18H21.168V10a4.004 4.004 0 0 1 4-4h3.21l1.24 3.066a3.982 3.982 0 0 0 3.708 2.503h8.826a3.984 3.984 0 0 0 3.71-2.503L47.1 6h3.228a4.004 4.004 0 0 1 4 4v1.6a1 1 0 0 0 2 0V10a6.007 6.007 0 0 0-6-6ZM38.633 17.11a1.153 1.153 0 0 1 1.12 1.18v4.792a5.234 5.234 0 0 0 0 9.405V35.6a6.789 6.789 0 0 0-4.333 2.85H10.793a1.153 1.153 0 0 1-1.12-1.18v-4.8a5.232 5.232 0 0 0 0-9.401V18.29a1.153 1.153 0 0 1 1.12-1.18Zm5.375-8.793a1.994 1.994 0 0 1-1.856 1.252h-8.826a1.991 1.991 0 0 1-1.854-1.252l-.934-2.312H44.94Z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M55.327 14.6a1 1 0 0 0-1 1V54a4.004 4.004 0 0 1-4 4H25.168a4.004 4.004 0 0 1-4-4V43.45a1 1 0 0 0-2 0V54a6.007 6.007 0 0 0 6 6h25.16a6.007 6.007 0 0 0 6-6V15.6a1 1 0 0 0-1-1Z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M41.185 54.52a1 1 0 0 0 0-2h-6.891a1 1 0 0 0 0 2ZM24.713 28.383a.853.853 0 1 1-.835 1.028.998.998 0 0 0-1.184-.775c-1.765.61-.18 2.94 1.017 3.265-.271 1.919 2.27 1.926 2-.003a2.852 2.852 0 0 0-.998-5.515.851.851 0 1 1 .821-1.084 1 1 0 0 0 1.926-.54 2.857 2.857 0 0 0-1.749-1.893v-.518a1 1 0 0 0-2 0v.521a2.852 2.852 0 0 0 1.002 5.514Z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M24.713 36.43a9.092 9.092 0 0 0 9.082-9.082c-.499-12.047-17.666-12.045-18.163 0a9.092 9.092 0 0 0 9.08 9.082Zm0-16.163a7.09 7.09 0 0 1 7.082 7.081c-.371 9.388-13.793 9.387-14.163 0a7.09 7.09 0 0 1 7.08-7.081ZM46.413 37.53l-4.757 4.757-1.68-1.68a1 1 0 0 0-1.413 1.415l2.386 2.386a1 1 0 0 0 1.414 0l5.464-5.464a1 1 0 0 0-1.414-1.414Z" fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Konsultasi Dokter</h3>
                    <p class="mb-4">Layanan konsultasi dengan dokter umum atau spesialis melalui chat, video call, atau kunjungan langsung.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="m57.936 58.647-4.47-11.871a9.542 9.542 0 0 0-5.914-5.693l-7.659-2.609-1.944-2.116v-2.62a13.043 13.043 0 0 0 4.739-5.175 14.256 14.256 0 0 0 3.237.14 2.909 2.909 0 0 0 2.905-2.906v-5.382a2.895 2.895 0 0 0-1.495-2.523 13.84 13.84 0 0 0-2.807-7.777 1 1 0 0 0-1.597 1.205 11.879 11.879 0 0 1 2.386 6.19c-.012-.01-2.017.036-1.987-.023-4.064-11.113-18.668-11.126-22.702.024h-1.875c.73-9.938 13.556-14.987 21.539-8.81a1 1 0 0 0 1.196-1.605c-9.394-7.24-24.311-1.02-24.754 10.758a2.895 2.895 0 0 0-1.566 2.561v5.382a2.909 2.909 0 0 0 2.905 2.906c.4-.042 2.932.115 3.213-.122a12.843 12.843 0 0 0 4.542 5.038v2.757l-1.825 2.184-7.553 2.521a9.547 9.547 0 0 0-5.917 5.695l-4.47 11.871a1.008 1.008 0 0 0 .935 1.352H49.97a1 1 0 0 0 0-2H36.123l-2.985-7.876 2.014-2.491 2.009 1.746a1.007 1.007 0 0 0 1.643-.594l1.322-8.118 6.785 2.312a7.549 7.549 0 0 1 4.682 4.504L55.555 58H53.97a1 1 0 0 0 0 2H57a1.007 1.007 0 0 0 .936-1.353zm-13.77-39.136h1.759a.906.906 0 0 1 .905.904v5.382a.906.906 0 0 1-.905.906h-1.759zm-24.334 7.192h-1.759a.906.906 0 0 1-.905-.906v-5.382a.906.906 0 0 1 .905-.904h1.76s.038 5.959 0 7.192zm12.146-15.6a10.16 10.16 0 0 1 9.15 6.288L38.85 18.43a4.677 4.677 0 0 1-4.986-.747 6.633 6.633 0 0 0-7.78-.736l-3.91 2.325c1.2-4.704 5.135-8.169 9.803-8.169zM21.832 23.168V21.8l5.273-3.133a4.632 4.632 0 0 1 5.433.51 6.72 6.72 0 0 0 7.15 1.07l2.098-.957a12.113 12.113 0 0 1 .38 2.98c-.464 14.245-18.826 15.065-20.334.9zM35.95 34.706v1.718l-3.968 5.464-4.153-5.473v-1.78a11.242 11.242 0 0 0 8.12.071zm-9.164 3.643 3.852 5.075-3.771 3.28-1.206-7.008zM8.444 58l3.96-10.516a7.551 7.551 0 0 1 4.681-4.505l6.724-2.245 1.387 8.06a1.007 1.007 0 0 0 1.641.585l2.01-1.746 2.013 2.491L27.875 58zm25.54 0h-3.97L32 52.763zm-1.985-9.65-1.642-2.03 1.642-1.428 1.642 1.427zm5.12-1.658-3.772-3.28 3.693-5.085 1.224 1.332z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Temukan Faskes Terdekat</h3>
                    <p class="mb-4">Temukan fasilitas kesehatan terdekat dari lokasi Anda secara real-time dengan peta interaktif dan filter pencarian.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="M35.719 21.413a1 1 0 0 0-1.586 1.218 15.554 15.554 0 0 1 1.806 3.012h-6.1a19.93 19.93 0 0 0-3.417-8.42 15.637 15.637 0 0 1 5.012 2.652 1 1 0 0 0 1.245-1.565 17.676 17.676 0 1 0-11.002 31.51c14.511.067 22.936-16.94 14.042-28.407zm.966 6.23a15.507 15.507 0 0 1 .001 8.994h-6.533a35.942 35.942 0 0 0-.001-8.995zM29.84 38.635h6.102a15.688 15.688 0 0 1-9.534 8.447 19.91 19.91 0 0 0 3.432-8.447zm-1.402-6.491a34.461 34.461 0 0 1-.292 4.492h-12.94a34.731 34.731 0 0 1 .001-8.995h12.938a34.461 34.461 0 0 1 .293 4.503zm-6.812-15.67c2.533-.006 5.021 3.488 6.193 9.168H15.535c1.138-5.63 3.672-9.12 6.092-9.168zm-4.683.734a19.903 19.903 0 0 0-3.429 8.434H7.417a15.707 15.707 0 0 1 9.527-8.434zM6 32.149a15.682 15.682 0 0 1 .671-4.507h6.53a35.936 35.936 0 0 0 0 8.995H6.67A15.558 15.558 0 0 1 6 32.15zm1.413 6.487h6.1a19.912 19.912 0 0 0 3.43 8.446 15.69 15.69 0 0 1-9.53-8.446zm8.118 0h12.29c-2.589 12.171-9.703 12.166-12.29 0zM16.844 8.31H38.91a8.42 8.42 0 0 1 8.4 8.106l-2.018-2.018a1 1 0 0 0-1.414 1.414l3.74 3.74a1 1 0 0 0 1.414 0l3.74-3.74a1 1 0 0 0-1.413-1.414l-2.048 2.047A10.421 10.421 0 0 0 38.911 6.31H16.844a1 1 0 0 0 0 2zM50.105 44.448a1 1 0 0 0-1.413 0l-3.74 3.74a1 1 0 1 0 1.413 1.414l2.018-2.018a8.419 8.419 0 0 1-8.4 8.107H17.916a1 1 0 0 0 0 2h22.067a10.42 10.42 0 0 0 10.401-10.136l2.048 2.047a1 1 0 0 0 1.413-1.414zM58.589 27.13a1 1 0 0 0-1.694 1.062 7.174 7.174 0 1 1-2.549-2.453 1 1 0 1 0 .992-1.736 9.2 9.2 0 1 0-4.545 17.195c7.082.128 11.668-8.14 7.796-14.068z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M49.754 34.379a1.001 1.001 0 0 0-1.238-.682c-1.769.767.123 2.972 1.275 3.302a1 1 0 1 0 2-.024 3.075 3.075 0 0 0-1-5.975 1.078 1.078 0 1 1 1.053-1.306 1 1 0 0 0 1.187.77c1.894-.7-.034-3.134-1.24-3.463a1 1 0 1 0-2 .024 3.075 3.075 0 0 0 1 5.975 1.079 1.079 0 1 1-1.037 1.379z" fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Pendaftaran Online</h3>
                    <p class="mb-4">Daftar layanan kesehatan atau antrean rumah sakit langsung melalui platform tanpa harus datang lebih awal.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="M59 47.487h-1.81v-27.61a5.223 5.223 0 0 0-5-5.409h-3.71a1 1 0 0 0 0 2h3.71a3.228 3.228 0 0 1 3 3.41v27.609H26.03a1.013 1.013 0 0 0-.996 1.02 34.358 34.358 0 0 0 1.49 3.57 2 2 0 0 0 1.828 1.188h7.296a2 2 0 0 0 1.828-1.188l1.149-2.589L58 49.487v2.74a2.823 2.823 0 0 1-2.82 2.82H8.82A2.823 2.823 0 0 1 6 52.227v-2.74h16.03a1 1 0 0 0 0-2H8.81v-27.61a3.228 3.228 0 0 1 3-3.41h6.89c-3.535 9.154 3.658 19.594 13.63 19.48 11.076.08 18.127-12.336 12.587-21.706a14.54 14.54 0 0 0-25.162-.073 1.646 1.646 0 0 1-.163.299H11.81a5.223 5.223 0 0 0-5 5.41v27.61H5a1 1 0 0 0-1 1v3.74a4.825 4.825 0 0 0 4.82 4.82h46.36a4.825 4.825 0 0 0 4.82-4.82v-3.74a1 1 0 0 0-1-1zm-23.352 3.778h-7.296l-.788-1.775h8.872zm-4.332-17.37a12.517 12.517 0 0 1-9.29-5.372l2.072-1.196a10.137 10.137 0 0 0 7.218 4.188zm2 .001v-2.38a10.12 10.12 0 0 0 7.224-4.178l2.073 1.197a12.5 12.5 0 0 1-9.297 5.361zm11.521-12.471A12.435 12.435 0 0 1 43.61 26.8l-2.064-1.192a10.127 10.127 0 0 0 .008-8.344l2.064-1.192a12.412 12.412 0 0 1 1.22 5.353zM33.33 8.967a12.503 12.503 0 0 1 9.295 5.37l-2.073 1.196a10.124 10.124 0 0 0-7.222-4.187zm7.129 12.458a8.144 8.144 0 0 1-8.13 8.14c-10.794-.446-10.804-15.824 0-16.27a8.138 8.138 0 0 1 8.13 8.13zM31.329 8.966v2.38a10.138 10.138 0 0 0-7.226 4.177l-2.073-1.196a12.518 12.518 0 0 1 9.3-5.36zm-10.295 7.095 2.064 1.192a10.022 10.022 0 0 0-.003 8.343l-2.064 1.192a12.473 12.473 0 0 1 .003-10.727z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M32.322 22.446a1.276 1.276 0 1 1-1.225 1.632 1 1 0 0 0-1.921.556 3.29 3.29 0 0 0 2.146 2.202v.352a1 1 0 0 0 2 0v-.363a3.272 3.272 0 0 0-1-6.38A1.276 1.276 0 1 1 33.57 18.9a1 1 0 0 0 1.956-.418 3.287 3.287 0 0 0-2.204-2.423c.082-.687-.226-1.374-1-1.385-.78.016-1.08.697-1 1.392a3.272 3.272 0 0 0 1 6.38z" fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Rekam Medis Digital</h3>
                    <p class="mb-4">Simpan dan akses riwayat medis Anda secara aman, kapan pun dibutuhkan di seluruh faskes terintegrasi.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="M38.972 31.507a7.01 7.01 0 0 0-4.32-12.487H23.604a3.001 3.001 0 0 0-2.998 2.998v19.988a3.001 3.001 0 0 0 2.998 2.998h12.8c7.723-.104 9.639-10.635 2.568-13.497zm-16.367-9.49a1 1 0 0 1 1-.999h11.047a4.997 4.997 0 1 1 0 9.994H22.605zm13.798 20.988H23.604a1 1 0 0 1-.999-1v-8.994h13.798a4.997 4.997 0 0 1 0 9.994z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M51.798 12.238a27.71 27.71 0 0 0-3.132-2.708 1 1 0 0 0-1.186 1.609 25.317 25.317 0 0 1 2.162 1.82l-2.117 2.117A22.896 22.896 0 0 0 33.002 9.05V6.057a25.425 25.425 0 0 1 11.2 3.02 1 1 0 0 0 .946-1.761C26.702-2.634 3.907 11.036 4.02 32.012c-.31 15.036 12.945 28.294 27.983 27.983 24.827-.03 37.332-30.174 19.795-47.757zm-.734 2.126a25.768 25.768 0 0 1 6.899 16.648h-3A22.896 22.896 0 0 0 48.94 16.49zm-38.123 0 2.118 2.117A22.815 22.815 0 0 0 9.05 31.012H6.043a25.768 25.768 0 0 1 6.898-16.648zM6.043 33.01h2.999a22.896 22.896 0 0 0 6.025 14.524L12.94 49.66A25.768 25.768 0 0 1 6.043 33.01zm24.96 24.96a25.768 25.768 0 0 1-16.648-6.898l2.125-2.125a22.896 22.896 0 0 0 14.523 6.025zm-19.988-25.96a20.892 20.892 0 0 1 11.64-18.784 1 1 0 0 0-.892-1.788 23.283 23.283 0 0 0-5.294 3.626l-2.114-2.114a25.768 25.768 0 0 1 16.648-6.9v3.01a22.7 22.7 0 0 0-5.356.865 1 1 0 0 0 .558 1.918c13.1-3.976 26.996 6.454 26.785 20.168-1.15 27.836-40.823 27.84-41.975 0zm21.987 25.96v-2.998a22.896 22.896 0 0 0 14.523-6.025l2.125 2.125a25.768 25.768 0 0 1-16.648 6.899zm18.062-8.311-2.125-2.125a22.896 22.896 0 0 0 6.024-14.524h3a25.768 25.768 0 0 1-6.9 16.649z" fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Cek Kesehatan Berkala</h3>
                    <p class="mb-4">Akses layanan medical check-up, vaksinasi, dan pemantauan kesehatan rutin secara mudah dan terjadwal.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                          <path d="M49.5 4H24.34a6.007 6.007 0 0 0-6 6v5.29a1 1 0 0 0 2 0V10a4.005 4.005 0 0 1 4-4h3.218l1.237 3.066a3.984 3.984 0 0 0 3.71 2.503h8.826a3.984 3.984 0 0 0 3.71-2.503L46.277 6H49.5a4.004 4.004 0 0 1 4 4v44a4.004 4.004 0 0 1-4 4H24.34a4.005 4.005 0 0 1-4-4V39.42h11.8a6.774 6.774 0 0 0 12.998 2.159 1 1 0 0 0-1.842-.78 4.778 4.778 0 1 1-2.638-6.3 1 1 0 0 0 1.298-.56c.446-1.634-1.965-1.701-3.062-1.776a6.785 6.785 0 0 0-6.6 5.257H13.502a3.003 3.003 0 0 1-3-3v-7.932h27.4v2.672a1 1 0 0 0 2 0v-5.87a5.006 5.006 0 0 0-5-5H13.5a5.006 5.006 0 0 0-5 5c.007 1.424-.005 9.521 0 11.13a5.006 5.006 0 0 0 5 5h4.84V54a6.007 6.007 0 0 0 6 6H49.5a6.007 6.007 0 0 0 6-6V10a6.007 6.007 0 0 0-6-6zm-6.314 4.317a1.994 1.994 0 0 1-1.855 1.252h-8.827a1.992 1.992 0 0 1-1.854-1.252l-.934-2.312H44.12zM10.501 23.29a3.003 3.003 0 0 1 3-3h21.4a3.003 3.003 0 0 1 3 3v1.198H10.5z" fill="currentColor" opacity="1" data-original="#000000"></path>
                          <path d="M33.472 52.52a1 1 0 0 0 0 2h6.89a1 1 0 0 0 0-2zM37.844 37.294a1 1 0 0 0-1.414 1.415l2.387 2.387a1 1 0 0 0 1.414 0l5.464-5.465a1 1 0 0 0-1.414-1.414l-4.757 4.757zM13.29 33.143a1 1 0 0 0 0 2h2.45a1 1 0 0 0 0-2z" fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                      </svg></span>
                    <h3 class="fs-5 mb-3">Apotek Digital</h3>
                    <p class="mb-4">Pesan dan beli obat langsung dari faskes terpercaya, tersedia layanan antar obat hingga ke rumah Anda.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Read more</span></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Services-->
        <!-- ======= Testimonials =======-->
<section class="section testimonials__v2" id="testimonials">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-5 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Testimonials</span>
        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Apa Kata Pengguna Kami</h2>
        <p data-aos="fade-up" data-aos-delay="200">Cerita nyata kepuasan dari pengguna layanan fasilitas kesehatan kami</p>
      </div>
    </div>
    <div class="row g-4" data-masonry='{"percentPosition": true }'>

      <!-- Testimoni 1 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Layanan konsultasi dokternya sangat cepat dan informatif. Saya tidak perlu antre di klinik hanya untuk keluhan ringan. Sangat terbantu! &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-1-min.jpg" alt="Foto Sarah Aulia"></div>
            <div class="lh-base"><strong class="d-block">Sarah Aulia</strong><span>Mahasiswa</span></div>
          </div>
        </div>
      </div>

      <!-- Testimoni 2 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Sistem pendaftaran online-nya sangat membantu. Bisa booking faskes tanpa perlu datang lebih awal. Prosesnya cepat dan ramah! &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-2-min.jpg" alt="Foto Ahmad Rizky"></div>
            <div class="lh-base"><strong class="d-block">Ahmad Rizky</strong><span>Karyawan Swasta</span></div>
          </div>
        </div>
      </div>

      <!-- Testimoni 3 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Saya gunakan fitur booking lab untuk cek darah. Semua praktis dan hasil keluar cepat lewat aplikasi. Recommended! &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-3-min.jpg" alt="Foto Dr. Linda"></div>
            <div class="lh-base"><strong class="d-block">Dr. Linda Kartika</strong><span>Dokter Umum</span></div>
          </div>
        </div>
      </div>

      <!-- Testimoni 4 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Anak saya bisa dapat jadwal vaksinasi tepat waktu lewat aplikasi ini. Info lengkap dan petugasnya juga sangat ramah. &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-4-min.jpg" alt="Foto Agus Setiawan"></div>
            <div class="lh-base"><strong class="d-block">Agus Setiawan</strong><span>Orang Tua</span></div>
          </div>
        </div>
      </div>

      <!-- Testimoni 5 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Fitur pencarian faskes sangat akurat! Saat di luar kota, saya bisa tahu fasilitas terdekat yang sesuai BPJS. Sangat praktis. &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-5-min.jpg" alt="Foto Maria Yuliani"></div>
            <div class="lh-base"><strong class="d-block">Maria Yuliani</strong><span>Wiraswasta</span></div>
          </div>
        </div>
      </div>

      <!-- Testimoni 6 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="testimonial rounded-4 p-4">
          <blockquote class="mb-3">
            &ldquo; Proses klaim asuransi digitalnya mudah dan cepat! Cukup unggah bukti dari HP, langsung diproses tanpa harus ke kantor. &rdquo;
          </blockquote>
          <div class="testimonial-author d-flex gap-3 align-items-center">
            <div class="author-img"><img class="rounded-circle img-fluid" src="assets/images/person-sq-6-min.jpg" alt="Foto Bima Fadillah"></div>
            <div class="lh-base"><strong class="d-block">Bima Fadillah</strong><span>Freelancer</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End Testimonials -->

       <!-- ======= FAQ =======-->
<section class="section faq__v2" id="faq">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-6 col-lg-7 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">FAQ</span>
        <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Pertanyaan yang Sering Diajukan</h2>
        <p data-aos="fade-up" data-aos-delay="100">Dapatkan jawaban seputar layanan fasilitas kesehatan digital kami di bawah ini.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-content">
          <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                  Apa saja layanan yang tersedia di platform ini?
                </button>
              </h2>
              <div id="faqOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  Platform kami menyediakan layanan seperti pencarian faskes terdekat, pendaftaran online, booking konsultasi dengan dokter, jadwal vaksinasi, klaim asuransi kesehatan digital, serta layanan laboratorium dan apotek.
                </div>
              </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                  Apakah platform ini bisa digunakan untuk pasien BPJS?
                </button>
              </h2>
              <div id="faqTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Ya, kami bekerja sama dengan berbagai fasilitas kesehatan yang menerima pasien BPJS. Pengguna bisa memilih opsi “Faskes BPJS” saat mencari layanan.
                </div>
              </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                  Apakah saya bisa berkonsultasi dengan dokter secara online?
                </button>
              </h2>
              <div id="faqThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Tentu. Kami menyediakan fitur konsultasi online dengan dokter umum maupun spesialis. Konsultasi bisa dilakukan melalui video call atau chat sesuai jadwal yang tersedia.
                </div>
              </div>
            </div>
            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                  Bagaimana cara mendaftar layanan kesehatan melalui platform ini?
                </button>
              </h2>
              <div id="faqFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Anda cukup membuat akun, kemudian pilih jenis layanan dan faskes yang diinginkan. Setelah itu, pilih jadwal, isi data diri, dan konfirmasi pendaftaran. Bukti reservasi akan dikirimkan melalui email atau bisa diakses di dashboard akun Anda.
                </div>
              </div>
            </div>
            <!-- FAQ 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                  Apakah ada layanan darurat atau 24 jam?
                </button>
              </h2>
              <div id="faqFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Kami menyediakan daftar faskes yang buka 24 jam atau memiliki layanan darurat. Anda bisa memfilternya di pencarian fasilitas berdasarkan jam operasional dan tipe layanan.
                </div>
              </div>
            </div>
            <!-- FAQ 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faqSix" aria-expanded="false" aria-controls="faqSix">
                  Apakah data medis saya aman di platform ini?
                </button>
              </h2>
              <div id="faqSix" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Ya, kami menggunakan sistem enkripsi dan perlindungan data sesuai standar keamanan kesehatan digital. Data pribadi dan riwayat medis Anda hanya dapat diakses oleh Anda dan tenaga medis yang Anda izinkan.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End FAQ -->

           <!-- ======= How it works =======-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="section howitworks__v1" id="how-it-works">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 text-center mx-auto">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Our Team</span>
        <h2 data-aos="fade-up" data-aos-delay="100">Meet The Team</h2>
        <p data-aos="fade-up" data-aos-delay="200">
          Di balik layanan MyFaskes yang cepat dan terpercaya, ada tim hebat yang bekerja dengan sepenuh hati. Yuk, kenalan!
        </p>
      </div>
    </div>
    <div class="row g-md-5">
      <!-- Person 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
          <img src="assets/images/ulma (2).jpeg" alt="Person 1" class="step-image mb-3 mx-auto">
          <!-- Sosmed -->
          <div class="social-icons mb-4">
            <a href="https://www.instagram.com/ulmaazt/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.instagram.com/ulmaazt/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/ulmaazt/" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <div>
            <h3 class="fs-5 mb-1">Khuluqul Mahmudah</h3>
            <p>0110124052</p>
          </div>
        </div>
      </div>

      <!-- Person 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
          <img src="assets/images/hilda.jpeg" alt="Person 2" class="step-image mb-3 mx-auto">
          <div class="social-icons mb-4">
            <a href="https://instagram.com/da._nj/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://instagram.com/da._nj/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://instagram.com/da._nj/" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <h3 class="fs-5 mb-1">Hilda Raudatul Janah</h3>
          <p>0110124220</p>
        </div>
      </div>

      <!-- Person 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
          <img src="assets/images/dias.jpeg" alt="Person 3" class="step-image mb-3 mx-auto">
          <div class="social-icons mb-4">
            <a href="https://instagram.com/diasyas_31/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://instagram.com/diasyas_31/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://instagram.com/diasyas_31/" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <h3 class="fs-5 mb-1">Dias Sutisna Supian</h3>
          <p>0110124173</p>
        </div>
      </div>

      <!-- Person 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
          <img src="assets/images/dapa.jpeg" alt="Person 4" class="step-image mb-3 mx-auto">
          <div class="social-icons mb-4">
            <a href="https://instagram.com/zammz.06/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://instagram.com/zammz.06/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://instagram.com/zammz.06/" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <h3 class="fs-5 mb-1">Dafa Mumtaza Azzam</h3>
          <p>01101240127</p>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- End How it works-->

      <!-- ======= Footer MyFaskes =======-->
<footer class="footer pt-5 pb-5" id="footer">
  <div class="container">
    <div class="row mb-5 pb-4">
      <div class="col-md-7">
      </div>
    </div>
    <div class="row justify-content-between mb-5 g-xl-5">
      <div class="col-md-4 mb-5 mb-lg-0">
        <h3 class="mb-3">Tentang MyFaskes</h3>
        <p class="mb-4">MyFaskes adalah platform yang membantu masyarakat menemukan informasi layanan fasilitas kesehatan secara cepat dan mudah di seluruh Indonesia.</p>
      </div>
      <div class="col-md-7">
        <div class="row g-2">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <h3 class="mb-3">Fitur</h3>
            <ul class="list-unstyled">
              <li><a href="#">Pencarian Faskes</a></li>
              <li><a href="#">Kategori Layanan</a></li>
              <li><a href="#">Jadwal Operasional</a></li>
              <li><a href="#">Pendaftaran Online</a></li>
              <li><a href="#">Artikel Kesehatan</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <h3 class="mb-3">Tautan Cepat</h3>
            <ul class="list-unstyled">
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#testimonials">Testimoni</a></li>
              <li><a href="#faq">FAQ</a></li>
              <li><a href="#contact">Kontak</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact">
            <h3 class="mb-3">Kontak Kami</h3>
            <p class="d-flex mb-3"><i class="bi bi-geo-alt-fill me-3"></i><span>Jl. Margonda Raya No.80 Depok, Jawa Barat</span></p>
            <a class="d-flex mb-3" href="mailto:support@myfaskes.id"><i class="bi bi-envelope-fill me-3"></i><span>support@myfaskes.id</span></a>
            <a class="d-flex mb-3" href="tel://+6281234567890"><i class="bi bi-telephone-fill me-3"></i><span>+62 812-3456-7890</span></a>
            <a class="d-flex mb-3" href="https://myfaskes.id"><i class="bi bi-globe me-3"></i><span>www.myfaskes.id</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row credits pt-3">
      <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">
        &copy;
        <script>document.write(new Date().getFullYear());</script> MyFaskes. 
        All rights reserved. Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh Tim MyFaskes.
      </div>
      <div class="col-xl-4 justify-content-start justify-content-xl-end quick-links d-flex flex-column flex-xl-row text-center text-xl-start gap-1">
        Website ini dikembangkan sebagai bagian dari proyek tim mahasiswa.
      </div>
    </div>
  </div>
</footer>
<!-- End Footer MyFaskes-->
        
      </main>
    </div>
    
    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->
    
    <!-- ======= Javascripts =======-->
    <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/gsap/gsap.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/glightbox/glightbox.min.js"></script>
    <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendors/aos/aos.js"></script>
    <script src="assets/vendors/purecounter/purecounter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/send_email.js"></script>
    <!-- End JavaScripts-->
  </body>
</html>