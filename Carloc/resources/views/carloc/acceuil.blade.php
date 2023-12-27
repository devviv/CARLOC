@extends('base')
@section('main')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ asset('img/bg_1.jpg') }}) ;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Un moyen rapide &amp; facile de louer une voiture</h1>
                        <p style="font-size: 18px;">Une petite rivière nommée Duden coule à côté de chez eux et lui fournit
                            les regelialia nécessaires. C'est un pays paradisiaque, dans lequel les pièces grillées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="#" class="request-form ftco-animate bg-primary">
                                <h2>Make your trip</h2>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Drop-off location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up date</label>
                                        <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off date</label>
                                        <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="text" class="form-control" id="time_pick" placeholder="Time">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Ce que nous offrons</span>
                    <h2 class="mb-2">Véhicules en vedette</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        @foreach ($cars as $car)
                            <div class="item">
                                <div class="car-wrap rounded ftco-animate">
                                    <div class="img rounded d-flex align-items-end"
                                        style="background-image: url({{ asset('storage/' . $car->img_path) }}">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">{{ $car->Modele }}</a></h2>
                                        <div class="d-flex mb-3">
                                            <span class="cat">{{ $car->nom }} </span>
                                            <p class="price ml-auto">{{ $car->prix_par_jour }} FCFA<span>/ jour</span></p>
                                        </div>
                                        <p class="d-flex mb-0 align-content-center">
                                            <a href="{{ route('payform', $car->id) }}"
                                                class="btn btn-primary py-2 m-1">Réserver
                                            </a>
                                            <a href="{{ route('show_car', $car->id) }}"
                                                class="btn btn-warning py-2 m-1">Détails
                                            </a>
                                            <a href="{{ route('add_panier', $car->id) }}" title="ajouter au panier"
                                                class="btn btn-success py-2 m-1"><i class="fa fa-cart-arrow-down"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-5">
                        <a href="{{ route('cars') }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('img/about.jpg') }});">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">A propos de nous</span>
                        <h2 class="mb-4">Bienvenue sur Carloc</h2>

                        <p>Votre partenaire de confiance pour une expérience de
                            location de voitures exceptionnelle. Notre mission est de vous offrir la liberté de voyager à
                            votre manière, en vous proposant une flotte diversifiée de véhicules de qualité et un service
                            client de premier ordre.</p>
                        <p>Chez Carloc, nous comprenons que chaque voyage est unique. C'est pourquoi nous
                            mettons tout en œuvre pour vous offrir une gamme variée de voitures adaptées à vos besoins, que
                            ce soit pour un voyage d'affaires, des vacances en famille ou simplement pour le plaisir de
                            conduire.</p>
                        <p>Notre engagement envers la satisfaction client est au cœur de notre démarche. Nous nous efforçons
                            de rendre la location de voitures simple, transparente et agréable. Avec Carloc, vous pouvez
                            compter sur une expérience de location sans tracas, du début à la fin.
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Rechercher une voiture</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 class="mb-3">Our Latest Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Wedding Ceremony</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">City Transfer</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Airport Transfer</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Whole City Tour</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
                    <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Temoignage</span>
                    <h2 class="mb-3"> Des Clients Heureux</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url({{ asset('img/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">La location de voiture avec Carloc a été une expérience incroyable. Le
                                        processus est simple, les tarifs sont compétitifs, et le service client est
                                        exceptionnel. Je recommande vivement!</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url({{ asset('img/person_2.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">J'ai loué une voiture pour un road trip avec Carloc, et je suis ravi
                                        de mon choix. La voiture était en excellent état, le service rapide, et le personnel
                                        très professionnel. Une expérience que je referai sans hésiter.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url({{ asset('img/person_3.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Je suis un client fidèle de Car. Carloc flexibilité de location, les
                                        tarifs transparents et le large choix de voitures font de cette plateforme mon choix
                                        numéro un pour la location de voiture. Merci pour un service exceptionnel!</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url({{ asset('img/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">La qualité du service client chez Carloc est vraiment ce qui les
                                        distingue. Ils sont toujours prêts à répondre à mes questions, à résoudre les
                                        problèmes rapidement et à s'assurer que je suis satisfait. Un service exceptionnel à
                                        chaque fois!</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url({{ asset('img/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Mon expérience avec Carloc a été excellente. J'ai loué une voiture
                                        pour un week-end et tout s'est déroulé sans accroc. Le véhicule était propre, le
                                        personnel courtois, et le retour de la voiture était facile. Je suis très
                                        satisfait."</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('img/image_1.jpg') }});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('img/image_2.jpg') }});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('img/image_3.jpg') }});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="60">0</strong>
                            <span>Year <br>Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1090">0</strong>
                            <span>Total <br>Cars</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="2590">0</strong>
                            <span>Happy <br>Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
