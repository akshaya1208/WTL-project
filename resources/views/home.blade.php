<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>CSTAR</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('user/img/core-img/favicon.ico') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">

</head>

<body>
    {{-- <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End --> --}}

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">CSTAR</a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('user-home') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('activities') }}">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('infobytes') }}">Infobytes</a>
                                </li>
                            </ul>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url({{ asset('user/img/collagepic/1.jpg') }});"></div>
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url({{ asset('user/img/collagepic/teachers.png') }});"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url({{ asset('user/img/collagepic/4.jpg') }});"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">

                                </div>
                                <div class="post-title">
                                    <a href="">DEPARTMENT OF COMPUTER SCIENCE</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">

                                <div class="post-title">
                                    <a href="">COMPUTER STUDENT ASSOCIATION OF RAJAGIRI (CSTAR)</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-title">
                                    <a href="single-blog.html">RAJAGIRI COLLEGE OF SOCIAL SCIENCES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <div class="tab-content" id="myTabContent">
                                <!-- ========== Sidebar Area ========== -->

                                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Widget Area -->
                                    <div class="sidebar-widget-area">
                                        <h5 class="title">About CSTAR</h5>
                                        <div class="widget-content">
                                            <p>The mango is perfect in that it is always yellow and if it’s not, I don’t
                                                want to hear about it. The mango’s only flaw, and it’s a minor one, is
                                                the effort it sometimes takes to undress the mango, carve it up in a way
                                                that makes sense, and find its way to the mouth.</p>
                                        </div>
                                    </div>
                                    <!-- Widget Area -->
                                    <div class="sidebar-widget-area">
                                        <h5 class="title">Faculty Coordinator</h5>
                                        <div class="widget-content">
                                            <!-- Single Blog Post -->
                                            <div
                                                class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('user/img/collagepic/cor3.jpeg') }}"
                                                        alt="">
                                                </div>
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h4 class="mb-0">Prof. Diljith K Benny</h4>
                                                        <h5 class="mb-0">Assistant Professor</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-widget-area">
                                        <h5 class="title">Coordinators</h5>
                                        <div class="widget-content">
                                            <!-- Single Blog Post -->
                                            <div
                                                class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('user/img/collagepic/cor2.jpg') }}"
                                                        alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h4 class="mb-0">Akshaya M S</h4>
                                                        <h5 class="mb-0">MSC CS(DA)</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div
                                                class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('user/img/collagepic/cor1.jpg') }}"
                                                        alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h4 class="mb-0">Aromal R</h4>
                                                        <h5 class="mb-0">MCA</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Widget Area -->
                                    <!-- Widget Area -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ***** Footer Area Start ***** -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="footer-single-widget">
                                    <a href="#"><img src="{{ asset('user/img/core-img/logo.png') }}"
                                            alt=""></a>
                                    <div class="copywrite-text mt-30">
                                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script> | Made with <i class="fa fa-heart-o"
                                                aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                target="_blank">Colorlib</a>
                                        <p>Proudly distributed by <a href="https://themewagon.com"
                                                target="_blank">ThemeWagon</a></p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="footer-single-widget">
                                    <ul class="footer-menu d-flex justify-content-between">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Gadgets</a></li>
                                        <li><a href="#">Video</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="footer-single-widget">
                                    <h5>Subscribe</h5>
                                    <form action="#" method="post">
                                        <input type="email" name="email" id="email"
                                            placeholder="Enter your mail">
                                        <button type="button"><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- ***** Footer Area End ***** -->

                <!-- jQuery (Necessary for All JavaScript Plugins) -->
                <script src="{{ asset('user/js/jquery/jquery-2.2.4.min.js') }}"></script>
                <!-- Popper js -->
                <script src="{{ asset('user/js/popper.min.js') }}"></script>
                <!-- Bootstrap js -->
                <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
                <!-- Plugins js -->
                <script src="{{ asset('user/js/plugins.js') }}"></script>
                <!-- Active js -->
                <script src="{{ asset('user/js/active.js') }}"></script>

</body>

</html>
