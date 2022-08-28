<!DOCTYPE html>
<html lang="en">

<!-- molla/index-19.html  22 Nov 2019 10:00:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Akrom - Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('public') }}/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public') }}/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public') }}/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{ url('public') }}/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{ url('public') }}/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ url('public') }}/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/skins/skin-demo-19.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/demos/demo-19.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrap-container">
            <header class="header header-intro-clearance header-3">
                <div class="header-top">
                    <div class="container">


                        <div class="header-right">

                            <ul class="top-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li>

                                        </li>
                                        <li>
                                            <div class="header-dropdown">
                                                <a href="#">English</a>
                                                <div class="header-menu">
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Spanish</a></li>
                                                    </ul>
                                                </div><!-- End .header-menu -->
                                            </div>
                                        </li>
                                        <li><a href="{{ url('login') }}">Login
                                            </a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-right -->

                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>

                            <a href="{{ url('home') }}" class="logo">
                                <img src="{{ url('public') }}/assets/images/demos/demo-3/logo.png" alt="Molla Logo" width="105" height="25">
                            </a>
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="{{ url('shop/filter') }}" method="POST">
                                    <div class="header-search-wrapper search-wrapper-wide">
                                        <label for="q" class="sr-only">Search</label>
                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." name="nama" value="{{ $nama ?? '' }}">
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div>

                        <div class="header-right">
                            <div class="header-dropdown-link">

                                <div class="dropdown cart-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-shopping-cart"></i>

                                    </a>
                                </div><!-- End .cart-dropdown -->
                                <div class="account">
                                    <a href="dashboard.html" title="My account">
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>

                                    </a>
                                </div><!-- End .compare-dropdown -->
                            </div>
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->

                <div class="header-bottom sticky-header">
                    <div class="container">
                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container active">
                                        <a href="{{ url('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('shop') }}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('product') }}">Product Detail</a>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-center -->

                        <div class="header-right">
                            <i class="la la-lightbulb-o"></i>
                            <p>Clearance Up to 30% Off</p>
                        </div>
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->
        </div>
        <div class="wrap-container">
            <main class="main">
                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-9">

                        </div><!-- End .col-lg-9 -->
                        <div class="col-sm-6 col-lg-3">

                        </div><!-- End .col-lg-3 -->


                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="icon-boxes-container icon-boxes-separator bg-transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rocket"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                        <p>Orders $50 or more</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rotate-left"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                        <p>Within 30 days</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-info-circle"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                        <p>When you sign up</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-life-ring"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                        <p>24/7 amazing services</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .icon-boxes-container -->

                <div class="bg-light pt-3 pb-5 mb-5">
                    <div class="container">
                        <ul class="nav nav-pills nav-big nav-border-anim justify-content-center mb-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="products-trending-link" data-toggle="tab" href="#products-trending-tab" role="tab" aria-controls="products-trending-tab" aria-selected="true">Now Trending</a>
                            </li>

                        </ul>
                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="products-trending-tab" role="tabpanel" aria-labelledby="products-trending-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    @foreach ($list_produk as $produk)
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{ url('product', $produk->id) }}">
                                                <img src="{{url('public', $produk->foto)}}" alt="" class="img-fluid" </a>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->
                                        <div class="product-body">
                                            <h3 class="product-title"><a href="{{ url('product', $produk->id) }}">{{ $produk->nama }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                stok :{{ $produk->stok }}
                                            </div>
                                            <div class="product-price">
                                                Rp. {{number_format($produk->harga)}}
                                            </div>
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                    @endforeach

                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-new-tab" role="tabpanel" aria-labelledby="products-new-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-best-tab" role="tabpanel" aria-labelledby="products-best-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light pt-4 pb-4 -->

                <div class="container">
                    <hr class="mt-0 mb-4">
                </div><!-- End .container -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <div class="container">
                    <div class="heading heading-flex mb-2">
                        <div class="heading-left">
                            <h2 class="title mb-5">Consoles & Accessories</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="{{ url('shop')}}" class="title-link">View more products <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        @foreach ($list_produk as $produk)
                        <div class="product">
                            <figure class="product-media">
                                <a href="{{ url('product') }}">
                                    <img src="{{url('public', $produk->foto)}}" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="{{ url('product') }}">{{ $produk->nama }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    stok :{{ $produk->stok }}
                                </div>
                                <div class="product-price">
                                    Rp.{{number_format($produk->harga) }}
                                </div>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->


            </main><!-- End .main -->

            <footer class="footer footer-dark">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget widget-about">
                                    <img src="{{ url('public') }}/assets/images/demos/demo-19/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                    <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                                    <div class="social-icons">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .widget about-widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="about.html">About Molla</a></li>
                                        <li><a href="#">How to shop on Molla</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="{{ url('login') }}">Log in</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Payment Methods</a></li>
                                        <li><a href="#">Money-back guarantee!</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Terms and conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="{{ url('cart') }}">View Cart</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="footer-copyright">Copyright © Arief Muhammad Akrom. All Rights Reserved.</p><!-- End .footer-copyright -->
                        <figure class="footer-payments">
                            <img src="{{ url('public') }}/assets/images/payments.png" alt="Payment methods" width="272" height="20">
                        </figure><!-- End .footer-payments -->
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End .wrap-container -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{ url('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                            </li>
                            <li>
                                <a href="{{ url('product') }}" class="sf-with-ul">Product</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="{{ url('beranda') }}">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets/js/superfish.min.js"></script>
    <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap-input-spinner.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ url('public') }}/assets/js/main.js"></script>
    <script src="{{ url('public') }}/assets/js/demos/demo-19.js"></script>
</body>


<!-- molla/index-19.html  22 Nov 2019 10:01:15 GMT -->

</html>