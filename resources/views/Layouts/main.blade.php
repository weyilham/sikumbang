<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIKUMBANG | Sistem Informasi Tumbuh Kembang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
        <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">Jl. Kh.Sochari, Serang</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">test@example.com</a></small>
                </div>
                <div class="top-link pe-2">

                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl py-3">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">SI<span class="text-secondary">KUMBANG</span></h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#kuisioner" class="nav-item nav-link">kuisioner</a>
                        <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="#kontak" class="nav-item nav-link">Kontak</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                    </div>
                    <div class="d-flex me-4">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                            <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-primary">Ada pertanyaan ?</span>
                            <a href="#"><span class="text-secondary">Free: + 0812345678</span></a>
                        </div>
                    </div>
                    <a href="{{ url('admin') }}" class="btn-search btn btn-primary btn-md-square rounded-circle"><i
                            class="fas fa-sign-in-alt text-white"></i></a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s" id="kontak">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h2 class="fw-bold mb-3"><span class="text-primary mb-0 font-bold">SI</span><span
                                class="text-secondary">KUMBANG</span></h2>
                        <p class="mb-4">Sistem Infromasi Tumbuh Kembang.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary"
                            style="border-radius: 50% 20% / 10% 40%;">
                            <p>SIKUMBANG Membantu Orang Tua dan Tenaga Medis dalam Memantau Perkembangan Anak Secara
                                Digital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4
                            class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                            Lokasi</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a href="" class="text-body mb-4"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i> Jl. Kh.Sochari, Serang -
                                Banten</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fas fa-envelope text-primary me-2"></i> test@example.com</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fa fa-clock text-primary me-2"></i> Senin - Jumat, 8:00 - 9:00</a>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"
                                    href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"
                                    href=""><i class="fab fa-twitter"></i></a>
                                <a href="#"
                                    class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle text-white"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4
                            class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                            Support Us</h4>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="/assets/logo.png" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="/assets/Growthguardian.png" class="img-fluid rounded-circle p-2"
                                        alt="">
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i
                                class="fas fa-copyright text-light me-2"></i>SIKUMBANG</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="#">SIKUMBANG</a>
                    {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript /Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ambil CSRF token dari meta tag
            }
        });
    </script>

    @stack('script')
</body>

</html>
