@extends('base')
@section('main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img/contact.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i
                                    class="fa-solid fa-forward"></i></a></span> <span>Contact <i
                                class="fa-solid fa-forward"></i></span></p>
                    <h1 class="mb-3 bread">Contactez-nous</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-4">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Addresse:</span> Adidogomé, Lomé - Togo</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-mobile-phone"></span>
                                </div>
                                <p><span>Téléphone:</span> <a href="tel://1234567920">+ 228 96 18 35 19</a></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> info@social-informatic.com <a
                                        href="mailto:info@social-informatic.com"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 block-9 mb-md-5">
                    {{-- <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Objet">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer le message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form> --}}
                    <iframe
                        data-tally-src="https://tally.so/embed/wzYDoq?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1"
                        loading="lazy" width="100%" height="457" frameborder="0" marginheight="0" marginwidth="0"
                        title="Contact form
"></iframe>
                    <script>
                        var d = document,
                            w = "https://tally.so/widgets/embed.js",
                            v = function() {
                                "undefined" != typeof Tally ? Tally.loadEmbeds() : d.querySelectorAll("iframe[data-tally-src]:not([src])")
                                    .forEach((function(e) {
                                        e.src = e.dataset.tallySrc
                                    }))
                            };
                        if ("undefined" != typeof Tally) v();
                        else if (d.querySelector('script[src="' + w + '"]') == null) {
                            var s = d.createElement("script");
                            s.src = w, s.onload = v, s.onerror = v, d.body.appendChild(s);
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>
@endsection
