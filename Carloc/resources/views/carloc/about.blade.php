@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil<i
                                    class="fa-solid fa-forward"></i></a></span> <span>About us <i
                                class="fa-solid fa-forward"></i></span></p>
                    <h1 class="mb-3 bread">A propos</h1>
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
@endsection
