<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')

    @yield('metta')


    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <!--<link rel="stylesheet" href="assets/css/style-liberty.css">-->
    <link href="{{ asset('assets/client/css/style-liberty.css') }}" rel="stylesheet" media="all">
    @yield('additional-css')
</head>r
<body>
<div class="w3l-bootstrap-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <div class="container">
            <a class="navbar-brand" href="{{URL::to("/")}}"><img src="{{asset('assets/client/images/logo.png')}}"> </a>
            <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{URL::to("/")}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to("about")}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to("how-it-work")}}">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to("pricing")}}">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to("contact")}}">Contact</a>
                    </li>
                </ul>
                <div class="form-inline">
                    @if(isset( \App\Http\Controllers\SupplierController::getSupplier()->id))
                        <p style="font-weight: bold;color:darkblue">
                        Welcome : {{\App\Http\Controllers\SupplierController::getSupplier()->name}} &nbsp;&nbsp;&nbsp; </p>
                        <a href="{{URL::to("clientlogout")}}" class="login mr-4">Log Out</a>
                        <p style="font-weight: bold;color:deeppink">
                            Your Login Expired in[{{ date_diff(date_create(\App\Http\Controllers\SupplierController::getSupplier()->validity_date),date_create(date('Y-m-d')))->format("%a") }}] Day/s</p>
                    @else
                        <a href="clientlogin" class="login mr-4">Log in</a>
                        <a href="{{URL::to("signup")}}" class="btn btn-primary btn-theme">SIGN UP</a>
                    @endif


                </div>
            </div>
        </div>
    </nav>
</div>
</nav>
</div>


                 @yield('contents')



{{--<section class="w3l-index-block2 py-5">
    <div class="container py-md-3">
        <div class="heading text-center mx-auto">
            <h3 class="head">We provide solutions to grow your business </h3>
            <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Nulla mollis dapibus nunc, ut rhoncus
                turpis sodales quis. Integer sit amet mattis quam.</p>
        </div>
        <div class="row bottom_grids pt-md-3">
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="s-block">
                    <a href="blog-single.html" class="d-block p-lg-4 p-3">
                        <img src="assets/images/s1.png" alt="" class="img-fluid" />
                        <h3 class="my-3">Global Network</h3>
                        <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="s-block">
                    <a href="blog-single.html" class="d-block p-lg-4 p-3">
                        <img src="assets/images/s2.png" alt="" class="img-fluid" />
                        <h3 class="my-3">High Benefits</h3>
                        <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="s-block">
                    <a href="blog-single.html" class="d-block p-lg-4 p-3">
                        <img src="assets/images/s3.png" alt="" class="img-fluid" />
                        <h3 class="my-3">Partnership</h3>
                        <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>--}}

<!-- footer-28 block -->
<section class="w3l-market-footer">
    <footer class="footer-28">
        <div class="footer-bg-layer">
            <div class="container py-lg-3">
                <div class="row footer-top-28">
                    <div class="col-md-6 footer-list-28 mt-5">

                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
            <div class="container">
                <p class="copy-footer-28 text-center"> ApparelImportersData.com. All Rights Reserved</p>
            </div>
        </div>
        </div>
    </footer>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>


    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- //footer-28 block -->

<!-- jQuery, Bootstrap JS -->



<script src="{{ asset('assets/vendor/jquery-3.5.1.js') }}"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>


{{--
<script src="{{ asset('assets/client/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
--}}

<!--      <script src="assets/client/js/jquery-3.3.1.min.js"></script>
      <script src="assets/client/js/bootstrap.min.js"></script>-->

<!-- Template JavaScript -->
<script src="{{ asset('assets/client/js/owl.carousel.js') }}"></script>

<!-- <script src="assets/client/js/owl.carousel.js"></script>-->

<!-- script for owlcarousel -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script for owlcarousel -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{ asset('assets/client/js/smartphoto.js') }}"></script>
<!--<script src="assets/client/js/smartphoto.js"></script>-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sm = new SmartPhoto(".js-img-viwer", {
            showAnimation: false
        });
        // sm.destroy();
    });
</script>
<script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
<!--<script src="assets/client/js/jquery.magnific-popup.min.js"></script>-->
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
@yield('additional-js')

</body>
</html>
