@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i
                                    class="fa-solid fa-forward"></i></a></span> <span>Les reservations <i
                                class="fa-solid fa-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($reservations as $reservation)
                    {{-- @php
                        $dateRetour =$reservation->date_retour
                        $date = Carbon::CreateFromFormat('Y-m-d', $dateRetour)
                        $aujourdHui = Carbon::now()
                        $jour_restant = $aujourHui->diffInDays($date);
                    @endphp --}}
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset('storage/' . $reservation->car->img_path) }});">
                            </div>
                            <div class="text">
                                <h2 class="d-flex mb-0 justify-content-between">
                                    <a href="#">{{ $reservation->car->Modele }}</a>
                                    <p class="border rounded-pill p-1 text-success">Réservé</p>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $reservation->car->nom }}</span>
                                    <p class="price ml-auto">Prix payé : {{ $reservation->prix }} FCFA </p>
                                </div>
                                <div class="d-flex mb-3">
                                    {{-- <span class="cat">Jour(s) restant(s) : {{ $jour_restant }}</span> --}}
                                    <p class="price ml-auto">Délais : {{ $reservation->date_retour }}</p>
                                </div>
                                <p class="d-flex mb-0 align-content-center">
                                    <a href="{{ route('payform', $reservation->car->id) }}"
                                        class="btn btn-primary py-2 m-1">Abonner
                                    </a>
                                    <a href="{{ route('show_car', $reservation->car->id) }}"
                                        class="btn btn-warning py-2 m-1">Détails
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
