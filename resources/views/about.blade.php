{{-- Google web font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">

{{-- Icon Font style --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

{{-- Link CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /********** Template CSS **********/
    :root {
        --primary: #FEA116;
        --light: #F1F8FF;
        --dark: #0F172B;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-semi-bold {
        font-weight: 600 !important;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 45px;
        bottom: 45px;
        z-index: 99;
    }


    /*** Spinner ***/
    #spinner {
        opacity: 0;
        visibility: hidden;
        transition: opacity .5s ease-out, visibility 0s linear .5s;
        z-index: 99999;
    }

    #spinner.show {
        transition: opacity .5s ease-out, visibility 0s linear 0s;
        visibility: visible;
        opacity: 1;
    }


    /*** Button ***/
    .btn {
        font-weight: 500;
        text-transform: uppercase;
        transition: .5s;
    }

    .btn.btn-primary,
    .btn.btn-secondary {
        color: #FFFFFF;
    }

    .btn-square {
        width: 38px;
        height: 38px;
    }

    .btn-sm-square {
        width: 32px;
        height: 32px;
    }

    .btn-lg-square {
        width: 48px;
        height: 48px;
    }

    .btn-square,
    .btn-sm-square,
    .btn-lg-square {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
        border-radius: 2px;
    }


    /*** Navbar ***/
    .navbar-dark .navbar-nav .nav-link {
        margin-right: 30px;
        padding: 25px 0;
        color: #FFFFFF;
        font-size: 15px;
        text-transform: uppercase;
        outline: none;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link.active {
        color: var(--primary);
    }

    @media (max-width: 991.98px) {
        .navbar-dark .navbar-nav .nav-link {
            margin-right: 0;
            padding: 10px 0;
        }
    }


    /*** Header ***/
    .carousel-caption {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(15, 23, 43, .7);
        z-index: 1;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 3rem;
        height: 3rem;
    }

    @media (max-width: 768px) {
        #header-carousel .carousel-item {
            position: relative;
            min-height: 450px;
        }

        #header-carousel .carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

    .page-header {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .page-header-inner {
        background: rgba(15, 23, 43, .7);
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: var(--light);
    }

    .booking {
        position: relative;
        margin-top: -100px !important;
        z-index: 1;
    }


    /*** Section Title ***/
    .section-title {
        position: relative;
        display: inline-block;
    }

    .section-title::before {
        position: absolute;
        content: "";
        width: 45px;
        height: 2px;
        top: 50%;
        left: -55px;
        margin-top: -1px;
        background: var(--primary);
    }

    .section-title::after {
        position: absolute;
        content: "";
        width: 45px;
        height: 2px;
        top: 50%;
        right: -55px;
        margin-top: -1px;
        background: var(--primary);
    }

    .section-title.text-start::before,
    .section-title.text-end::after {
        display: none;
    }


    /*** Service ***/
    .service-item {
        height: 320px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        background: #FFFFFF;
        box-shadow: 0 0 45px rgba(0, 0, 0, .08);
        transition: .5s;
    }

    .service-item:hover {
        background: var(--primary);
    }

    .service-item .service-icon {
        margin: 0 auto 30px auto;
        width: 65px;
        height: 65px;
        transition: .5s;
    }

    .service-item i,
    .service-item h5,
    .service-item p {
        transition: .5s;
    }

    .service-item:hover i,
    .service-item:hover h5,
    .service-item:hover p {
        color: #FFFFFF !important;
    }


    /*** Youtube Video ***/
    .video {
        position: relative;
        height: 100%;
        min-height: 500px;
        background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(../img/video.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .video .btn-play {
        position: absolute;
        z-index: 3;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        box-sizing: content-box;
        display: block;
        width: 32px;
        height: 44px;
        border-radius: 50%;
        border: none;
        outline: none;
        padding: 18px 20px 18px 28px;
    }

    .video .btn-play:before {
        content: "";
        position: absolute;
        z-index: 0;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        display: block;
        width: 100px;
        height: 100px;
        background: var(--primary);
        border-radius: 50%;
        animation: pulse-border 1500ms ease-out infinite;
    }

    .video .btn-play:after {
        content: "";
        position: absolute;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        display: block;
        width: 100px;
        height: 100px;
        background: var(--primary);
        border-radius: 50%;
        transition: all 200ms;
    }

    .video .btn-play img {
        position: relative;
        z-index: 3;
        max-width: 100%;
        width: auto;
        height: auto;
    }

    .video .btn-play span {
        display: block;
        position: relative;
        z-index: 3;
        width: 0;
        height: 0;
        border-left: 32px solid var(--dark);
        border-top: 22px solid transparent;
        border-bottom: 22px solid transparent;
    }

    @keyframes pulse-border {
        0% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            opacity: 1;
        }

        100% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            opacity: 0;
        }
    }

    #videoModal {
        z-index: 99999;
    }

    #videoModal .modal-dialog {
        position: relative;
        max-width: 800px;
        margin: 60px auto 0 auto;
    }

    #videoModal .modal-body {
        position: relative;
        padding: 0px;
    }

    #videoModal .close {
        position: absolute;
        width: 30px;
        height: 30px;
        right: 0px;
        top: -30px;
        z-index: 999;
        font-size: 30px;
        font-weight: normal;
        color: #FFFFFF;
        background: #000000;
        opacity: 1;
    }


    /*** Testimonial ***/
    .testimonial {
        background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url(../img/carousel-2.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .testimonial-carousel {
        padding-left: 65px;
        padding-right: 65px;
    }

    .testimonial-carousel .testimonial-item {
        padding: 30px;
    }

    .testimonial-carousel .owl-nav {
        position: absolute;
        width: 100%;
        height: 40px;
        top: calc(50% - 20px);
        left: 0;
        display: flex;
        justify-content: space-between;
        z-index: 1;
    }

    .testimonial-carousel .owl-nav .owl-prev,
    .testimonial-carousel .owl-nav .owl-next {
        position: relative;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        background: var(--primary);
        border-radius: 2px;
        font-size: 18px;
        transition: .5s;
    }

    .testimonial-carousel .owl-nav .owl-prev:hover,
    .testimonial-carousel .owl-nav .owl-next:hover {
        color: var(--primary);
        background: #FFFFFF;
    }


    /*** Team ***/
    .team-item,
    .team-item .bg-primary,
    .team-item .bg-primary i {
        transition: .5s;
    }

    .team-item:hover {
        border-color: var(--secondary) !important;
    }

    .team-item:hover .bg-primary {
        background: var(--secondary) !important;
    }

    .team-item:hover .bg-primary i {
        color: var(--secondary) !important;
    }


    /*** Footer ***/
    .newsletter {
        position: relative;
        z-index: 1;
    }

    .footer {
        position: relative;
        margin-top: -110px;
        padding-top: 180px;
    }

    .footer .btn.btn-social {
        margin-right: 5px;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--light);
        border: 1px solid #FFFFFF;
        border-radius: 35px;
        transition: .3s;
    }

    .footer .btn.btn-social:hover {
        color: var(--primary);
    }

    .footer .btn.btn-link {
        display: block;
        margin-bottom: 5px;
        padding: 0;
        text-align: left;
        color: #FFFFFF;
        font-size: 15px;
        font-weight: normal;
        text-transform: capitalize;
        transition: .3s;
    }

    .footer .btn.btn-link::before {
        position: relative;
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        margin-right: 10px;
    }

    .footer .btn.btn-link:hover {
        letter-spacing: 1px;
        box-shadow: none;
    }

    .footer .copyright {
        padding: 25px 0;
        font-size: 15px;
        border-top: 1px solid rgba(256, 256, 256, .1);
    }

    .footer .copyright a {
        color: var(--light);
    }

    .footer .footer-menu a {
        margin-right: 15px;
        padding-right: 15px;
        border-right: 1px solid rgba(255, 255, 255, .3);
    }

    .footer .footer-menu a:last-child {
        margin-right: 0;
        padding-right: 0;
        border-right: none;
    }
</style>

{{-- Page Header Start --}}
<div class="container page-header-inner py-5">
    <div class="container text-center pb-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

{{-- Booking --}}
<div class="container booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input placeholder="Check in" type="date" class="form-control datetimepicker-input"
                                    data-target="#date1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" placeholder="Check out"
                                    data-target="#date2" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Pilih Jumlah Menginap</option>
                                <option value="1">1 Orang</option>
                                <option value="2">2 Orang</option>
                                <option value="3">3 Orang</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Pilih Jumlah Kamar</option>
                                <option value="1">1 Kamar</option>
                                <option value="2">2 Kamar</option>
                                <option value="3">3 Kamar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- About --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Luxury Hotel</span></h1>
                <p class="mb-4">Selamat datang di Luxury Hotel, destinasi mewah yang menggabungkan kenyamanan, desain
                    elegan, dan layanan tak tertandingi di jantung Lampung Utara Kotabumi. Di Luxury Hotel, kami
                    berkomitmen untuk memberikan pelayanan pribadi yang penuh perhatian, memastikan setiap kebutuhan
                    Anda terpenuhi dengan sempurna. Baik Anda berkunjung untuk bisnis, liburan, atau perayaan khusus,
                    kami hadir untuk membuat setiap momen Anda lebih istimewa, menjadikan setiap detik Anda di sini
                    berharga dan penuh kenyamanan.</p>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Rooms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
