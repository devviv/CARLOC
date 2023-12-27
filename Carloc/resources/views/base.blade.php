<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carloc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Car<span class="text-primary">Loc</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars" aria-hidden="true"></i> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cars') }}">Voitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">A Propos</a>
                    </li>
                </ul>
                @auth
                <ul>
                    <a href="" class="m-3"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    <a href="{{route('reservations')}}" class="m-3">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('show_panier')}}" class="m-3">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('profile.edit')}}" class="m-3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                </ul>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Creer un compte</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('main')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="{{ route('index') }}"
                                class="logo">Car<span class="text-primary">loc</span></a>
                        </h2>
                        <p>Votre partenaire de confiance pour une expérience de location de voitures exceptionnelle.
                            Notre mission est de vous offrir la liberté de voyager à votre manière, en vous proposant
                            une flotte diversifiée de véhicules de qualité et un service client de premier ordre.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><i class="fa-brands fa-x"></i></a></li>
                            <li class="ftco-animate"><a
                                    href="https://www.facebook.com/socialinformatic?mibextid=ZbWKwL"><i
                                        class="fa-brands fa-facebook"></i></a></li>
                            <li class="ftco-animate"><a href="https://www.linkedin.com/company/social-informatic/"><i
                                        class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">A Propos</a>
                            </li>
                            <li><a href="#" class="py-2 d-block">Termes et conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Garantie du meilleur prix</a></li>
                            <li><a href="#" class="py-2 d-block">Politique de confidentialité et de cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Service client</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Modalité de paiement</a></li>
                            <li><a href="#" class="py-2 d-block">Conseils de réservation</a></li>
                            <li><a href="#" class="py-2 d-block">Comment ça fonctionne</a></li>
                            <li><a href="#" class="py-2 d-block">Contactez-nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vous avez des questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"> <i class="fa-solid fa-location-dot"></i> Adidogomé, Lomé -
                                        TOGO </a></li>
                                <li><a href="#"> <i class="fa-solid fa-phone"></i> +288
                                        96 18 35 19</a></li>
                                <li><a href="#"> <i class="fa-solid fa-envelope"></i> info@social-informatic.com
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa-solid fa-heart text-danger"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
