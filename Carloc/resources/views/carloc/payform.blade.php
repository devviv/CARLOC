@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight mb-3" style="background-image: url({{ asset('img/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i
                                    class="fa-solid fa-forward"></i></a></span> <span>Payer <i
                                class="fa-solid fa-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <div class="form col-md-6 col-sm-12 m-5">
        <form action="{{route('payer')}}" method="post" class="shadow m-2 p-3 rounded border ">
            @csrf
            <div class="m-2">
                <label for="numero" class="form-label">Numero de téléphone</label>
                <input type="tel" class="form-control" name="numero" id="numero" value="{{old('numero')}}">

                @error('numero')
                    {{$message}}
                @enderror
            </div>
            <div class="m-2">
                <label for="operateur" class="form-label">Opérateur</label>
                <select name="operateur" id="operateur" class="form-select" value="{{old('operateur')}}">
                    <option value="0">Opérateur</option>
                    <option value="1">Togocom</option>
                    <option value="2">Moov Africa</option>
                </select>;
                 @error('operateur')
                    {{$message}}
                @enderror
            </div>
            <div class="m-2">
                <input type="number" class="form-control" name="car_id" id="car_id" value="{{ $car->id }}" hidden>

            </div>
            <div class="m-2">
                <label for="jours" class="form-label">Nombre de jours</label>
                <input type="number" class="form-control" name="jours" id="jours">
                 @error('jours')
                    {{$message}}
                @enderror
            </div>
            <div class="m-2">
                <label for="prix_jour" class="form-label">Prix / jour</label>
                <input type="text" class="form-control" name="prix_jour" id="prix_jour" value="{{ $car->prix_par_jour }} FCFA"
                    disabled>
                     @error('prix_jour')
                    {{$message}}
                @enderror
            </div>
            <div class="m-2">
                <label for="date_debut" class="form-label">Date de début</label>
                <input type="date" class="form-control" name="date_debut" id="date_debut value="" onchange="changeDate()">
                 @error('date_debut')
                    {{$message}}
                @enderror
            </div>
            {{-- <div class="m-2">
                <label for="date_retour" class="form-label">Date de retour</label>
                <input type="date" class="form-control" name="date_retour" id="date_retour" value=""
                    disabled>
            </div> --}}
            <input type="submit" value="Payer" class="btn btn-primary">
        </form>
    </div>

    <script>
        // var jours = document.getElementById('jours');
        // var prix_jour =document.getElementById('prix_jour');
        // var prix = document.getElementById('prix');
        // // var date_debut =document.getElementById('date_debut');
        // // var date_retour = document.getElementById('date_retour');

        // console.log(jours);
        // console.log(prix_jour);
        // console.log(prix);
        // function changePrix(prixJour){
        //     var prix_total = Number(jours.value) * prixJour
        //     prix.value = prix_total + ' FCFA'

        // }

        // function changeDate(){
        //     var date_de_debut = Date(date_debut.value)
        //     var date_de_retour = Date(date_retour.value) + Number(jours.value)
        // }

    </script>
@endsection
