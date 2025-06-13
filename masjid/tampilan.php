<?php
  session_start();
    
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Masjid Khairul Ba'i 2025</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
  <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>

  <header class="bg-primary-gradient" style="background:#fafafa;">
    <nav class="navbar navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
      <div class="container">
        <img src="assets/img/logo.jpg" width="81" height="70"><span style="font-family:'Raleway';margin:0px;font-size:1.25rem;"><br><br><br></span><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" href="./tampilan.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href=".#1">Activity</a></li>
            <li class="nav-item"><a class="nav-link" href="./jadwal sholat.php">Prayer-Times</a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php"><span style="font-weight:300;">Contact Us</span></a></li>
            <li class="nav-item"><a class="nav-link" href="kotak-masukan.php">Feedback Form</a></li>
</li>
          </ul>
          </div>
      </div>  
    </nav>
    <div class="container pt-4 pt-xl-5">
      <section id="2">
      <h1 class="fw-bold"><br><span style="font-weight:normal;">Welcome <?=  $_SESSION['username'] ?>, to&nbsp;</span><span style="font-weight:normal;color:rgb(35, 155, 19);">Masjid Khairul Ba'i</span><br><br></h1>
      <div class="row pt-5">
        <div class="col-homescreen"><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="pulse" style="background:rgb(255,255,255);border-width:2px;border-color:rgb(35, 155, 19);color:rgb(35, 155, 19);padding-top:7.6px;margin-top:-23px;margin-bottom:12px;">Masjid Khoirul Bai SMK N 1 Adiwerna yang berdiri sejak 1960-an di Kota Megapolis merupakan simbol keberanian, persatuan, dan keteguhan umat Islam. Didirikan oleh sekelompok pemuda yang penuh semangat, masjid ini tidak hanya menjadi tempat ibadah, tetapi juga pusat kegiatan keagamaan, sosial, dan pendidikan yang aktif. Dengan arsitektur megah yang mencerminkan keindahan Islam, masjid ini menyelenggarakan berbagai kegiatan seperti pengajian, kelas Al-Quran, program pemberdayaan masyarakat, dan bantuan sosial, menjadikannya sarana memperkuat keimanan sekaligus membangun solidaritas sosial di tengah masyarakat.</a>
        <div class="col-12 col-lg-10 col-xxl-6 mx-auto">
          <div class="simple-slider">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(&quot;assets/img/begron.jpg&quot;) right / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/dalam.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/masjid.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/taman.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/wudhu1.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/wudhu2.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/sampingkiri.jpg') center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('assets/img/belakangmasjid.jpg') center / cover no-repeat;"></div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev" style="color:#e69036;"></div>
              <div class="swiper-button-next" style="color:#e69036;"></div>
            </div>
          </section>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="py-5">
    <div class="container text-center float-none py-5">
      <p class="mb-4" style="font-size: 1.6rem;">The 5 Pillars of Islam</p><a href="#"> <img class="m-3" src="assets/img/brands/Group%206%20(1).png" width="201" height="136" style="border-width: 0px;border-style: solid;border-top-left-radius: 1rem;border-top-right-radius: 1rem;"><img class="m-3" src="assets/img/brands/Group%2011.png" width="201" height="136" style="border-top-left-radius: 1rem;border-top-right-radius: 1rem;"><img class="m-3" src="assets/img/brands/Group%2012.png" width="201" height="136" style="border-top-left-radius: 1rem;border-top-right-radius: 1rem;"><img class="m-3" src="assets/img/brands/Group%2013.png" width="201" height="136" style="border-top-left-radius: 1rem;border-top-right-radius: 1rem;"><img class="m-3" src="assets/img/brands/Group%2014.png" width="201" height="136" style="border-top-left-radius: 1rem;border-top-right-radius: 1rem;"></a><a href="#"> </a><a href="#"> </a><a href="#"> </a><a href="#"> </a><a href="#"> </a>
    </div>
  </section>
  <section>
    <!-- Start: Features Cards -->
    <div class="container bg-primary-gradient py-5" id="Mosque-Services" style="background: #fafafa;">
      <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <section id="1">
          <p class="fw-bold text-success mb-2" style="color: var(--bs-primary);">Activity</p>
          <h3 class="fw-bold">What we can do</h3>
        </div>
      </div>
      <div class="py-5 p-lg-5" style="background: #fafafa;">
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
          <div class="col mb-5">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5" style="height: 326px;">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-pray text-success" style="font-size: 43px;width: 61px;height: 79px;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                    <path d="M7 20h8l-4 -4v-7l4 3l2 -2"></path>
                  </svg></div>
                <h5 class="fw-bold card-title">Sholat</h5>
                <p class="text-muted card-text mb-4" style="height: 8rem;"> Sholat adalah ibadah wajib bagi umat Islam yang dilakukan lima kali sehari sebagai bentuk ketaatan dan komunikasi langsung dengan Allah SWT.
<br><br></p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5" style="height: 326px;">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><i class="icon ion-ios-heart text-success" style="width: 61px;height: 79px;font-size: 39px;color: #e69036;"></i></div>
                <h5 class="fw-bold card-title">Tadarus&nbsp;</h5>
                <p class="text-muted card-text mb-4" style="height: 8rem;margin-bottom: 24px;"> Tadarus adalah kegiatan membaca dan mempelajari Al-Qur'an, biasanya dilakukan secara berkelompok, terutama di bulan Ramadan untuk meningkatkan pemahaman dan keberkahan.
<br><br></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5" style="height: 326px;">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school text-success" style="font-size: 46px;width: 61px;height: 79px;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                  </svg></div>
                <h5 class="fw-bold card-title">Kajian</h5>
                <p class="text-muted card-text mb-4" style="height: 8rem;">Kajian adalah kegiatan pembelajaran agama Islam yang membahas berbagai topik seperti akidah, fiqih, dan akhlak, biasanya disampaikan oleh ustaz atau dai kepada jamaah.
<br><br></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-mic text-success" style="font-size: 41px;width: 61px;height: 50px;">
                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"></path>
                    <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3"></path>
                  </svg></div>
                <h5 class="fw-bold card-title">Hadroh&nbsp;</h5>
                <p class="text-muted card-text mb-4" style="height: 8rem;">Hadroh adalah pertunjukan seni Islami yang berisi lantunan shalawat dan puji-pujian kepada Nabi Muhammad SAW, sering diiringi dengan alat musik tradisional seperti rebana.<br><br></p>
              </div>
            </div>
          </section>
          </div>
        </div>
      </div>
    </div><!-- End: Features Cards -->
  </section>
  <section></section><!-- Start: Contact Details -->
  <section class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <p class="fw-bold text-success mb-2">Contacts</p>
          <h2 class="fw-bold" id="Mosque-ContactUs">How you can reach us</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-xl-4">
          <div><iframe src="https://maps.google.com/maps?q=SMKN+1+Adiwerna,+Pesarean,+Adiwerna,+Tegal,+Jawa+Tengah,+Indonesia&output=embed" width="100%" height="400" style="border:0;" allowfullscreen="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
          <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md" style="background: rgb(230,144,54);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                </svg></div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Phone</h6>
                <p class="text-muted mb-0">+(62) 89123456</p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md" style="background: rgb(230,144,54);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                </svg></div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Email</h6>
                <p class="text-muted mb-0">masjidKhairulbai@gmail.com</p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md" style="background: rgb(230,144,54);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001m-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282"></path>
                </svg></div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Location</h6>
                <p class="text-muted mb-0">Jl. Raya II, Pekuncen, Pesarean, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End: Contact Details -->
  <!-- Start: Newsletter Subscription Color -->
  <section class="py-5"></section><!-- End: Newsletter Subscription Color -->
  <!-- Start: Footer Multi Column -->
  <footer class="bg-primary-gradient">
    <div class="container py-4 py-lg-5">
      <div class="row justify-content-center">
        <!-- Start: Services -->
        <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
          <h3 class="fs-6 fw-bold">Activity</h3>
          <ul class="list-unstyled">
            <li><a href="#1">Sholat</a></li>
            <li><a href="#1">Tadarus</a></li>
            <li><a href="#1">Kajian</a></li>
            <li><a href="#1">Hadroh</a></li>
          </ul>
        </div><!-- End: Services -->
        <!-- Start: About -->
        <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
          <h3 class="fs-6 fw-bold">About</h3>
          <ul class="list-unstyled">
            <li><a href="#2">The Masjid</a></li>
            <li><a href="#2">Information</a></li>
            <li><a href="#2">Image</a></li>
          </ul>
        </div><!-- End: About -->
        <!-- Start: Social Icons -->
        <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last">
          <div class="fw-bold d-flex align-items-center mb-2">
                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"></path>
                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
              </svg></span><span>Create By</span></div>
          <p class="text-muted">Ahmad Attaqi F.F  | Arief Satori <br> Farel Aulia Fernandi | Muh Lukman K <br> M Syafiq Itaqoni | Samy Abrar A </p>
        </div><!-- End: Social Icons -->
      </div>
      <hr>
      <div class="text-muted d-flex justify-content-between align-items-center pt-3">
        <p class="mb-0">Copyright © 2025 Khairul Ba'i Mosque</p>
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
            </svg>
          </li>
          <li class="list-inline-item"></li>
          <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
            </svg></li>
        </ul>
      </div>
    </div>
  </footer><!-- End: Footer Multi Column -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>