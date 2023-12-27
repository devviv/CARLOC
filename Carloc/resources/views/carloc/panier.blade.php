@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i
                                    class="fa-solid fa-forward"></i></a></span> <span>Panier <i
                                class="fa-solid fa-forward"></i></span></p>
                    <h1 class="mb-3 bread">Les voitures du panier</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
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
                                    <p class="price ml-auto">${{ $car->prix_par_jour }} FCFA <span>/jour</span></p>
                                </div>
                                <p class="d-flex mb-0 align-content-center">
                                    <a href="{{ route('payform', $car->id) }}" class="btn btn-primary py-2 m-1">Réserver
                                    </a>
                                    <a href="{{ route('show_car', $car->id) }}" class="btn btn-warning py-2 m-1">Détails
                                    </a>
                                    <button id="delete" onclick="deletePanier({{ $car->id }})"
                                        title="supprimer du panier" class="btn btn-danger py-2 m-1">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
        <!-- Votre section de confirmation ici -->

        <section class="confirmation" id="confirmationPopup" style="display: none;">
            <div class="text-center border rounded">
                <p>Etes-vous sûr? Cette action est irréversible.</p>
                <div class="boutons">
                    <a href="#" class="btn btn-success m-1" onclick="hidePopup()">Annuler</a>
                    <a href="{{ route('delete_panier', 0) }}" id="confirmOkButton" class="btn btn-danger m-1">Supprimer</a>
                </div>
            </div>
        </section>


    </section>

    <script>
        // Fonction pour afficher le popup
        function deletePanier(carId) {
            document.getElementById('confirmationPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';

            var deleteUrlTemplate = "{{ route('delete_panier', '__ID__') }}";
            var deleteUrl = deleteUrlTemplate.replace('__ID__', carId);
            document.getElementById('confirmOkButton').href = deleteUrl;
        }

        // Fonction pour cacher le popup
        function hidePopup() {
            document.getElementById('confirmationPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
@endsection
