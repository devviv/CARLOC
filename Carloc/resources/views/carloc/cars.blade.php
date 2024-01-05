@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i
                                    class="fa-solid fa-forward"></i></a></span> <span>Voitures <i
                                class="fa-solid fa-forward"></i></span></p>
                    <h1 class="mb-3 bread">Choisir une voiture</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="search">
            <form action="/search" method="post" class="col-md-6 col-sm-10 mx-auto">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher"
                        aria-label="Rechercher" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset('storage/' . $car->img_path) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="{{ route('show_car', $car->id) }}">{{ $car->Modele }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $car->nom }}</span>
                                    <p class="price ml-auto">{{ $car->prix_par_jour }} FCFA <span>/jour</span></p>
                                </div>
                                <p class="d-flex mb-0 align-content-center">
                                    <a href="{{ route('payform', $car->id) }}" class="btn btn-primary py-2 m-1">Réserver
                                    </a>
                                    <a href="{{ route('show_car', $car->id) }}" class="btn btn-warning py-2 m-1">Détails
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
            {{-- <div class="mb-5">
                {{$cars->links()}}
            </div> --}}
        </div>
    </section>
@endsection
