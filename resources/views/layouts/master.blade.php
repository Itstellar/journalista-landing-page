

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{setting('site.title')}}</title>

    <meta charset="utf-8">
    <meta name="keywords" content="{{setting('site.keywords')}}">
    <meta name="description" content="{{setting('site.description')}}">
    <link rel="icon" href="{{asset('/web')}}/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/web')}}/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/web')}}/css/style.css">
</head>

<body>
<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand main_logo" href="index.html"> <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo"> </a>
                    <a class="navbar-brand single_page_logo" href="index.html"> <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>

@yield("content")

<!--::footer_part start::-->
<footer class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-4 col-lg-4">
                <div class="single_footer_part">
                    <a href="index.html" class="footer_logo_iner"> <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="#"> </a>
                    <p>Gathered. Under is whose you'll to make years is mat lights thing together fish made
                        forth thirds cattle behold won't. Fourth creeping first female.
                    </p>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="single_footer_part">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="single_footer_part">
                    <h4>Application</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{$footer->ios}}">App Store</a></li>
                        <li><a href="{{$footer->android}}">Play Store </a></li>

                    </ul>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <div class="copyright_text">
                    <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a  href="https://itstellar.com/" target="_blank"><span class="text-info font-weight-bolder">IT </span> <span class="text-info font-weight-bold" style="color: black !important">Stellar</span></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer_icon social_icon">
                    <ul class="list-unstyled">
                        <li><a href="{{$contact->facebook}}" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$contact->twitter}}" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="{{asset('/web')}}/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('/web')}}/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('/web')}}/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="{{asset('/web')}}/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="{{asset('/web')}}/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="{{asset('/web')}}/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="{{asset('/web')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/web')}}/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="{{asset('/web')}}/js/slick.min.js"></script>
<script src="{{asset('/web')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('/web')}}/js/waypoints.min.js"></script>
<script src="{{asset('/web')}}/js/contact.js"></script>
<script src="{{asset('/web')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('/web')}}/js/jquery.form.js"></script>
<script src="{{asset('/web')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('/web')}}/js/mail-script.js"></script>
<!-- custom js -->
<script src="{{asset('/web')}}/js/custom.js"></script>
</body>

</html>
