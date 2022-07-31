<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="edu-mini.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <title>Tugas Bootstrap</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand ms-5" href="#"><img src="eduwork.png" alt="" width="180" height="30" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ms-5">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kelas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Private Mentoring</a></li>
                            <li><a class="dropdown-item" href="#">Webinar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link" href="#"><i class="fas fa-right-to-bracket"></i> Sign in</a>
                    </li>
                    <li class="nav-item ms-5">
                        <button class="nav-link text-white" href="#">Register+</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="contoh.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h1 class="display-3 text-white mb-4" style="font-size: 4em; font-weight: 400;">Raih profesi idamanmu, kami bantu sampai diterima kerja</h1>
                        <p>tanpa biaya pendaftaran !</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">DAFTAR SEKARANG</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="contoh.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h1 class="display-3 text-white mb-4">Program Pelatihan & Penyaluran ISA, bayar nanti setelah berpenghasilan dan bisa dicicil sampai 12x.</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">DAFTAR SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="col-12">
                <div class="row about">
                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-display"></i>
                            Apa sih eduwork itu?
                        </h4>
                        <h6 class="ms-5">Platform yang membantu kamu mendapatkan pekerjaan, di bimbing oleh mentor yang akan menjadi teman seperjuanganmu dalam belajar & ber-karir.</h6>
                    </div>

                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-display"></i>
                            Program ISA
                        </h4>
                        <h6 class="ms-5">Dengan program Income Sharing Agreement, kamu bisa fokus belajar dulu, bayarnya nanti setelah mendapatkan kerja/penghasilan.</h6>
                    </div>

                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-user-large"></i>
                            Berbagai Mentor
                        </h4>
                        <h6 class="ms-5">Ada berbagai mentor/kelas yang tersedia berbagai bidang. Pilih mentor atau bidang yang kalian inginkan. Dan kejar pekerjaan idaman kalian !</h6>
                    </div>

                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-gears"></i>
                            Berbagai Mentor
                        </h4>
                        <h6 class="ms-5">Setelah lulus kamu akan dibantu untuk mendapatkan pekerjaan sesuai dengan ilmu yang kalian pelajari.</h6>
                    </div>

                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-user-large"></i>
                            Berbagai Mentor
                        </h4>
                        <h6 class="ms-5">Dibimbing oleh mentor yang berpengalaman di dunia industri, jadi belajar praktek praktis, bukan sebatas teori akademik!</h6>
                    </div>

                    <div class="col-md-4 py-md-3 mt-4">
                        <h4>
                            <i class="fas fa-display"></i>
                            Berbagai Mentor
                        </h4>
                        <h6 class="ms-5">Bisa secara Online atau Offline, diskusikan & sepakati saja semuanya dengan mentormu !</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tahap -->
    <div class="container-xxl py-3">
        <div class="tahap">
            <div class="title">
                <h2 class="mt-4">Bagaimana tahapnya ?
                    <hr>
                    <span class="second-title">berikut tahapannya</span>
                </h2>
            </div>
            <div class="container py-4">
                <div class="step">
                    <div class="col-12">
                        <div class="row text-white">
                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-1"></i> Daftar</h1>
                                    <h6 class="ms-5">Pilih jenis pekerjaan/kelas yang anda inginkan</h6>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-2"></i> Seleksi</h1>
                                    <h6 class="ms-5">Hanya menerima yang memiliki komitmen</h6>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-3"></i> Confirm</h1>
                                    <h6 class="ms-5">Memastikan/mencari mentor yang bersedia</h6>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-4"></i> Belajar</h1>
                                    <h6 class="ms-5">Belajar online/offline sepakati dengan mentor</h6>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-5"></i> Penyaluran</h1>
                                    <h6 class="ms-5">Eduwork membantu anda mendapatkan kerja</h6>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="nomor py-md-3 mt-4">
                                    <h1><i class="fas fa-6"></i> Cicilan</h1>
                                    <h6 class="ms-5">Mulai cicilan dari penghasilan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imgTahap">
                <img class="img-fluid w-100" src="tahap1.png" alt="">
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="testi">
                <div class="title-1">
                    <h3>Testimonials
                        <hr>
                    </h3>
                    <span>Lihat komentar komentar dari lulusan kami</span>
                </div>

                <div class="col-12">
                    <div class="row g-4 mt-3 px-4 py-3">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="testi-1.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Pajar</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">Saya seorang lulusan SMK, materi dan bimbingan yang diberikan sangat baik untuk di dunia kerja. mentor yang berpengalaman selalu membantu masalah yang ada selama belajar. langsung dibantu disalurkan ke perusahaan, dan terbukti bahwa saya bisa mendapatkan tawaran kerja di 3 perusahaan berbeda. Luar biasa!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="testi-2.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Galih</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">didunia pemrograman menghapal syntax tidak prioritas, karena bisa dilihat di dokumentasi. disini saya mendapatkan arahan yang tepat bagaimana memecahkan masalah yang besar dibagi menjadi masalah yang kecil sehingga bisa diselesaikan bertahap. dengan arahan yang mudah dimengerti</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="testi-3.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Vandy</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">sangat bagus & sangat jelas saya yg sebelumnya tidak pernah menggunakan framework laravel jdi sanggar akrab dgn laravel dan setiap peserta yang sudah lulus bisa mendapatkan portofolio untuk bekal melamar di perusahaan, diajarkan softskill seperti tips trik saat interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="testi-4.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Frada</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">Setelah lulus saya berkeinginan untuk mengasah skill lebih dalam lagi agar jadi programmer yang siap kerja. Eduwork lah jawabanya, saya mendapatkan arahan yang tepat. Metode belajar yang asik dan mentor yang selalu membantu memecahkan masalah.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="test-5.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Vandy</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">Sangat menyenang kan belajar di sana , kita di ajarkan cara belajar sehingga kita bisa mandiri kedepanya bila ada update teknologi , suasana belajar juga asik dan fleksibel.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="testi-6.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Vandy</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                                    <p class="card-text mt-3">Pembelajaran yg interaktif membuat suasana belajar menjadi seru, mentor yg ramah membuat nyaman suasana belajar, arahan dari mentor jelas dan mudah dipahami, yg menjadi nilai tambah adalah adanya pembelajaran untuk debuging saat develop sistem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Penyaluran -->
    <div class="container-xxl penyaluran py-2">
        <div class="container">
            <div class="owl-carousel owl-theme py-5">
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-1.png">
                    </div>
                </div>
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-2.png">
                    </div>
                </div>
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-3.png">
                    </div>
                </div>
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-4.png">
                    </div>
                </div>
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-5.png">
                    </div>
                </div>
                <div class="penyaluran-item position-relative bg-white rounded overflow-hidden">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="penyaluran-6.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bergabung -->
    <div class="container-xxl bergabung py-2">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="vid">
                            <div class="content-title mt-3 ms-5">
                                <h4 class="text-center">Edu<span style="color: #35a2e0;">Work</h4></span>
                            </div>
                            <video class="rounded-circle mt-3" autoplay="" muted="" loop="" width="250">
                                <source src="pelita.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <div class="col-md-6 px-3 py-4">
                        <div class="caption mt-3">
                            <h2>Bergabung dengan komunitas kami</h2>
                            <p class="mt-3">Dengan mengikuti kelas di EduWork , kalian akan otomatis menjadi salah satu member pada komunitas kami. Kalian akan mendapatkan kawan dan mentor yang dapat saling membantu untuk mensupport kesulitan - kesulitan kalian di tempat kerja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="faq">
                <div class="faq-title">
                    <h3>FAQ</h3>
                    <hr class="text-center">
                    <p>apabila ada yang ingin ditanyakan bisa menghubungi wa : 0888-6669-969</p>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="true" aria-controls="one">
                                        Eduwork itu apa ?
                                    </button>
                                </h2>
                                <div id="one" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accor1">
                                    <div class="accordion-body">
                                        Eduwork adalah platform yang memungkinkan kamu mendapatkan pekerjaan idaman dengan cara di bimbing oleh mentor yang akan menjadi teman seperjuanganmu dalam belajar dan ber-karir..
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="true" aria-controls="two">
                                        Bagaimana proses seleksinya ?
                                    </button>
                                </h2>
                                <div id="two" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        Dengan menjawab soal soal yang ada diberikan melalui sistem yang sudah disediakan diwebsite.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor3">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="true" aria-controls="three">
                                        Cara mendaftar ?
                                    </button>
                                </h2>
                                <div id="three" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor3">
                                    <div class="accordion-body">
                                        kamu hanya perlu mendaftar di website dengan fasilitas yang sudah disediakan, bisa menggunakan akun facebook, akun gmail atau akun email biasa
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#four" aria-expanded="true" aria-controls="four">
                                        Bagaimana proses belajarnya ?
                                    </button>
                                </h2>
                                <div id="four" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor4">
                                    <div class="accordion-body">
                                        Proses belajar bisa offline / online, ketentuan belajar disepakati masing - masing oleh mentor dengan peserta.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor5">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#five" aria-expanded="true" aria-controls="five">
                                        Apakah ada persyaratan ?
                                    </button>
                                </h2>
                                <div id="five" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor5">
                                    <div class="accordion-body">
                                        Persayaratan tergantung mentor masing - masing. yang paling penting memiliki komitmen yang tinggi. Metode ISA persyaratan khusus bersedia langsung bekerja setelah lulus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor6">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#six" aria-expanded="true" aria-controls="six">
                                        Bagaimana penyalurannya ?
                                    </button>
                                </h2>
                                <div id="six" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor6">
                                    <div class="accordion-body">
                                        Eduwork membantu menyalurkan peserta yang sudah lulus dengan cara menawarkan ke perusahaan-perusahaan yang telah bekerjasama dengan kami.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor7">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seven" aria-expanded="true" aria-controls="seven">
                                        Apakah itu ISA ?
                                    </button>
                                </h2>
                                <div id="seven" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor7">
                                    <div class="accordion-body">
                                        ISA adalah income sharing agreement, dimana siswa dapat belajar tanpa pembayaran terlebih dahulu, pembayaran dilakukan hanya apabila peserta sudah dapat pekerjaan / penghasilan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor8">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#eight" aria-expanded="true" aria-controls="eight">
                                        Bagaimana setelah bekerja ?
                                    </button>
                                </h2>
                                <div id="eight" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor8">
                                    <div class="accordion-body">
                                        setelah bekerja anda masih dapat melakukan konsultasi dan mendapatkan pendampingan dari mentor anda, tentunya dengan waktu dan cara yang telah di sepakati 2 belah pihak
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor9">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nine" aria-expanded="true" aria-controls="nine">
                                        Apakah ada program regular (Non ISA) ?
                                    </button>
                                </h2>
                                <div id="nine" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accor9">
                                    <div class="accordion-body">
                                        Ya , dengan model pembayaran diawal dengan sistem deposit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="accordion" id="accor10">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ten" aria-expanded="true" aria-controls="ten">
                                        Berapa total tanggungan ?
                                    </button>
                                </h2>
                                <div id="ten" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accor10">
                                    <div class="accordion-body">
                                        total yang dibayarkan kepada eduwork & mentor sesuai dengan ketentuan masing-masing mentor. Pilih sesuai yang kalian mau
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-xxl footer py-4">
        <div class="container">
            <div class="footer-title">
                <h3>Ada yang ingin ditanyakan ?</h3>
                <hr>
                <p>Silahkan hubungi 0888-6669-969</p>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg-square back-to-top">Tanya ? <i class="fa-brands fa-whatsapp"></i>0888-6669-969</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/61d234db31.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="fas fa-arrow-left"></i>',
            '<i class="fas fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>