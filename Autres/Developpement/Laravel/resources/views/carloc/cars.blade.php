@extends('base')
@section('main')
    <!-- gallery section start -->
    <div class="gallery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="gallery_taital">Nos meilleurs offres</h1>
                </div>
            </div>
            <div class="gallery_section_2">
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-md-4">
                            <div class="gallery_box mb-5">
                                <a href="{{ route('show_car', $car->id) }}">
                                    <div class="gallery_img"><img src="{{ asset('storage/' . $car->img_path) }}">
                                    </div>
                                </a>
                                <h3 class="types_text"> {{ $car->Modele }} {{ $car->nom }} </h3>
                                <p class="looking_text">${{ $car->prix }} par semaine</p>
                                <div class="read_bt"><a href="#">Réserver</a></div>
                                </div>lass="looking_text">${{ $car->prix }} par semaine</p>
                                <div class="read_bt"><a href="#">Réserver</a></div>
                            </div>
                        </div>
                    @endforeach
                    <div class="mb-5">
                        {{ $cars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section end -->
@endsection
