<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Breezed HTML Bootstrap Template</title>

    <!--

    Breezed Template

    https://templatemo.com/tm-543-breezed

    -->
    <!-- Additional CSS Files -->
    @vite(["resources/js/app.js", "resources/css/app.css"])
    <link rel="stylesheet" href="{{asset('css/templatemo-breezed.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/flex-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="/admin/citas">Agendar Cita</a></li>
                        <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Drop Down</a>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">FAQ's</a></li>
                                <li><a href="">Blog</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="/auth/logout">Salir</a></li>
                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Search Area ***** -->

@yield('content')
<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright &copy; 2020 Breezed Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><p>Follow Us</p></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/popper.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{asset('js/owl-carousel.js') }}"></script>
<script src="{{asset('js/scrollreveal.min.js') }}"></script>
<script src="{{asset('js/waypoints.min.js') }}"></script>
<script src="{{asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{asset('js/imgfix.min.js') }}"></script>
<script src="{{asset('js/slick.js') }}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('js/custom.js') }}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>

</body>
</html>

