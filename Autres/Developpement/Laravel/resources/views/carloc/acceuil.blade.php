@extends('base')
@section('main')
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="banner_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Location de voiture <br><span style="color: #fe5b29;">Pour
                                            toi</span></h1>
                                    <p class="banner_text">Découvrez notre flotte de voitures de qualité et trouvez celle
                                        qui correspond à votre style.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Voir plus</a></div>
                                        <div class="contact_bt active"><a href="#">Contactez nous</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Diapositive 2 -->
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Voyagez avec style <br><span style="color: #fe5b29;">et
                                            confort</span></h1>
                                    <p class="banner_text">Louez une voiture élégante pour rendre votre voyage agréable et
                                        mémorable.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Voir plus</a></div>
                                        <div class="contact_bt active"><a href="#">Contactez nous</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Diapositive 3 -->
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Flexibilité de location <br><span style="color: #fe5b29;">à
                                            votre service</span></h1>
                                    <p class="banner_text">Choisissez la durée qui vous convient le mieux, que ce soit pour
                                        une journée ou plusieurs semaines.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Voir plus</a></div>
                                        <div class="contact_bt active"><a href="#">Contactez nous</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_img"><img src="{{ asset('img/banner-img.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_iman"><img src="{{ asset('img/about-img.png') }}" class="about_img"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">A propos <span style="color: #fe5b29;">de nous</span></h1>
                            <p class="about_text">
                                Lorsque vous choisissez CARLOC, vous optez pour une expérience de location de voitures sans
                                tracas. Nous mettons à votre disposition une flotte diversifiée de véhicules, allant des
                                modèles élégants aux voitures familiales spacieuses. <br>
                                Notre engagement envers la satisfaction client, la transparence et la flexibilité de
                                location font de nous le choix idéal pour tous vos besoins de déplacement. Profitez de la
                                liberté de voyager à votre manière, que ce soit pour un voyage d'affaires, des vacances en
                                famille ou simplement pour le plaisir de conduire.
                            </p>
                            <div class="readmore_btn"><a href="#">Voir plus</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <div class="search_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="search_taital">Rechercher ta meilleure voiture</h1>
                    <p class="search_text">Rechercher selon votre préférence</p>
                    <!-- select box section start -->
                    <div class="container">
                        <div class="select_box_section">
                            <div class="select_box_main">
                                <div class="row">
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                            <option value="" disabled selected>Modèle</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                            <option value="" disabled selected>Type</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                            <option value="" disabled selected>Prix</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="search_btn"><a href="#">Rechercher maintenant</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select box section end -->
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section start -->
    <div class="gallery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="gallery_taital">Nos meilleures offres</h1>
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
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Prenez un rendez-vous</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Name" name="Name">
                            <input type="text" class="mail_text" placeholder="Email" name="Email">
                            <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">Send</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
@endsection
