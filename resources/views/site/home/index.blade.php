@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<!-- END SERVICES -->
<section class="section-agents section-t8 home">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @if((new \Jenssegers\Agent\Agent())->isDesktop() || (new \Jenssegers\Agent\Agent())->isTablet())
            @foreach($banners as $key=>$banner)
            <div class="carousel-item @if($key==0) active @endif desk">
                <a target="_blank" href="{{$banner->url_desk}}">
                    <img src="{{ asset('images/banners/desktop/'.$banner->imagedesk) }}" class="d-block w-100" alt="...">
                </a>
            </div>
            @endforeach
            @endif
            @if((new \Jenssegers\Agent\Agent())->isMobile())
            @foreach($banners as $key=>$banner)
            <div class="carousel-item @if($key==0) active @endif banner-mobile">
                <a target="_blank" href="{{$banner->url_mobile}}">
                    <img src="{{ asset('images/banners/mobile/'.$banner->imagemobile) }}" class="d-block w-100" >
                </a>
            </div>
            @endforeach
            @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row  mb-3 text-center">
            <h2 class="mt-5 mb-5 titles-home-categories tittle-home-cat">Categorías únicas</h2>
        </div>
        <div class="row">
            @foreach($categories as $item)
            @if($item->name != 'EasyGift')
            <div class="col-md-2 col-4 categories-home text-center mb-4" onclick="location.href='/catalogo/{{$item->slug}}'">
                <div class="btn-categories">
                    <img class="image-subcategory-list-product" src="{{ asset('images/categories/'.$item->file) }}" alt="{{ $item->name }}">
                </div>
                {{ $item->name }}
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="row mt-5" style="margin-right: initial;">
        <h2 class="mt-5 mb-5 titles-home">
            Empresas que <div class="d-block d-sm-block d-md-none"><br></div> <strong>confían en nosotros</strong>
        </h2>
        <div class="swiper mySwiperclientes ">
            <div class="swiper-wrapper">
                @foreach($imagesFactory as $img)
                <div class="swiper-slide empresas-slide">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <img src="{{ asset($img.'?'.rand()) }}" alt="{{ $img }}" class="img-d img-fluid">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper mySwiperclientesmobile ">
            <div class="swiper-wrapper">              
                @foreach($imagesFactory as $img)
                <div class="swiper-slide empresas-slide">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <img src="{{ asset($img.'?'.rand()) }}" alt="{{ $img }}" class="img-d img-fluid">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">            
            <div class="col-md-5">
                <img src="{{ asset('images/imagehome.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-7">
                <h2 class="mt-5 mb-5 titles-home title-nosotros"><strong>¿Qué es Kanbai?</strong></h2>
                <p>
                Kanbai es una plataforma diseñada 100% para realizar las compras de lo que necesitas en tu empresa.   
                </p>
                <p> 
                Aquí reunimos la mejor oferta con los mejores precios y todas las facilidades para que ahorres tiempo y dinero. Además ponemos a tu disposición avanzadas herramientas para hacer seguimiento a tus proyectos y facilitar el proceso completo.
                </p> 
                <p>
                Te damos la bienvenida al futuro de las compras empresariales.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <h2 class="mt-5 mb-5 titles-home title-nosotros"><strong>Por que nosotros?</strong></h2>
            <div class="row mt-5">
                <div class="col-md-3 mb-3 itemnosotros">
                    <div class="card-nosotros">
                        <img src="{{ asset('images/iconocheck.png') }}" alt="Razas" class="img-d img-nosotros">
                        Todo lo que necesita tu empresa en un solo lugar. Reunimos las mejores empresas de categorías no core todos verificados y con capacidad de cumplimiento.
                    </div>
                </div>
                <div class="col-md-3 mb-3 itemnosotros">
                    <div class="card-nosotros ">
                        <img src="{{ asset('images/iconocheck.png') }}" alt="Razas" class="img-d img-nosotros">
                        Ahórale dinero a tu empresa reduciendo los tiempos de investigación, vinculación y contratación.
                    </div>
                </div>
                <div class="col-md-3 mb-3 itemnosotros">
                    <div class="card-nosotros">
                        <img src="{{ asset('images/iconocheck.png') }}" alt="Razas" class="img-d img-nosotros">
                        Damos acompañamiento permanente a tus proyectos y los respaldamos con contratos de cumplimiento que aseguran el abastecimiento del bien.
                    </div>
                </div>
                <div class="col-md-3 mb-3 itemnosotros">
                    <div class="card-nosotros">
                        <img src="{{ asset('images/iconocheck.png') }}" alt="Razas" class="img-d img-nosotros">
                        La mejor relación costo beneficio. Monitoreamos el mercado para ofrecer lo mejor a los mejores precios.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 news-products">
            <h2 class="mt-5 mb-5 titles-home title-new-products"><strong>Nuevos productos</strong></h4>
                <p class="text-center">Productos nuevos todas las semanas</p>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($newproducts as $item)
                        <div class="swiper-slide list-products-desk">
                            <a href="/catalogo/producto/{{$item->id}}/{{$item->name}}">
                                <div class="card mb-3 card-related" >
                                    <div class="card-body cardproducts padding-0">
                                        <div class="col-md-12 col-12 mb-3 padding-7 cont-img-desk" >
                                            @if(count($item->gallery)>0)
                                                <img src="{{ asset('images/products/'.$item->gallery[0]->file.'') }}" alt="{{$item->name}}" class="image-list-product-desk">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-1 info-related">
                                            <h4 class="title-product-desk" style="font-size: 14px;">{{$item->name}}</h4>
                                            <p class="price">
                                                <img src="{{ asset('images/Precio_Icono.png') }}" alt="Rango" class="img-d img-fluid">
                                                Desde: <span>@if(count($item->escalas)>0)${{number_format($item->escalas[0]->price, 0, 0, '.')}}  @endif </span> 
                                            </p>
                                            <p class="quantity">
                                                <img src="{{ asset('images/Cantidad_Icono.png') }}" alt="Pedido minímo" class="img-d img-fluid">
                                                Pedido minímo: <span>{{$item->quantity_min }} </span>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
        </div>
    </div>
</section>

<section class="section-testimonials nav-arrow-a testimonials-desk">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="mt-5 mb-5 titles-home title-nosotros"><b>¿Que dicen nuestros clientes?</b></h2>
            </div>
        </div>
        <div class="row mt-5">
            <div id="testimonial-carousel" class="swiper">
                <div class="swiper-wrapper">
                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box-desk">
                            <div class="row">
                                <!-- INICIO TESTIMONIO -->
                                <div class="col-sm-4 col-md-4 bg-gray-desk">
                                    <div class="content-testimonial">
                                        <div class="testimonial-author-box">
                                            <center>
                                                <img src="{{ asset('assets/images/avatars/review-daniela.png') }}" alt="" class="testimonial-avatar">
                                            </center>
                                            <p class="testimonial-author">
                                                <span class="testimonial-name">Daniela Muñoz</span>
                                                <span class="testimonial-star">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <br>
                                                <span class="testimonial-date">Skandia S.A.</span>
                                            </p>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Trabajo en el área de marketing de una compañía financiera, en donde hacemos diferentes actividades, y en donde nuestros clientes externos e internos son nuestra mayor prioridad. En Kanbai encontramos soluciones a la medida para apoyo a estas actividades, la mejor disposición, flexibilidad y cumplimiento para llevar a cabo nuestro trabajo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FINAL TESTIMONIO -->

                                <!-- INICIO TESTIMONIO -->
                                <div class="col-sm-4 col-md-4 bg-gray-desk">
                                    <div class="content-testimonial">
                                        <div class="testimonial-author-box">
                                            <center>
                                                <img src="{{ asset('assets/images/avatars/review-valeria.png') }}" alt="" class="testimonial-avatar">
                                            </center>
                                            <p class="testimonial-author">
                                                <span class="testimonial-name">Valeria Galban</span>
                                                <span class="testimonial-star">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <br>
                                                <span class="testimonial-date">Office Experience Manager LATAM Kin+Carta</span>
                                            </p>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Coordino el área de experiencia de oficina de una empresa de tecnología donde el bienestar del empleado es de suma importancia, dada la competencia en el mercado tecnológico por el mejor talento . En Kanbai hemos encontrado un aliado para regalos, merchandising y apoyo a actividades. Su aporte ha sido importante para lograr nuestros objetivos y mantener a nuestros colaboradores felices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FINAL TESTIMONIO -->

                                <!-- INICIO TESTIMONIO -->
                                <div class="col-sm-4 col-md-4 bg-gray-desk">
                                    <div class="content-testimonial">
                                        <div class="testimonial-author-box">
                                            <center>
                                                <img src="{{ asset('assets/images/avatars/review-sara.png') }}" alt="" class="testimonial-avatar">
                                            </center>
                                            <p class="testimonial-author">
                                                <span class="testimonial-name">Sara Rúa</span>
                                                <span class="testimonial-star">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <br>
                                                <span class="testimonial-date">CMO - Head of Growth</span>
                                            </p>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Soy líder de marketing de una Startup donde nuestro principal objetivo es el crecimiento de la plataforma, realizamos diferentes actividades, eventos y activaciones, en los cuales Kanbai ha sido un gran aliado para hacer de estas actividades algo muy original y especial. Su tecnología de proyectos es muy chévere porque puedo estar tranquila sobre en qué fase van las cosas, la comunicación es muy buena, encuentro de todo, la calidad es excelente y los precios muy buenos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FINAL TESTIMONIO -->

                            </div>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>
    </div>
</section>
<!-- End Testimonials Section -->

<!-- ======= Testimonials Section ======= -->

<section class="section-testimonials nav-arrow-a testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="mt-5 mb-5 titles-home title-nosotros"><b>¿Que dicen nuestros clientes?</b></h2>
            </div>
        </div>
        <div class="row mt-5">
            <div id="testimonial-carousel" class="swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Start carousel item -->
                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="testimonial-author-box">
                                        <center>
                                            <img src="{{ asset('assets/images/avatars/review-daniela.png') }}" alt="" class="testimonial-avatar">
                                        </center>
                                        <p class="testimonial-author">
                                            <span class="testimonial-name">Daniela Muñoz</span>
                                            <span class="testimonial-star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                            <br>
                                            <span class="testimonial-date">Skandia S.A.</span>
                                        </p>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Trabajo en el área de marketing de una compañía financiera, en donde hacemos diferentes actividades, y en donde nuestros clientes externos e internos son nuestra mayor prioridad. En Kanbai encontramos soluciones a la medida para apoyo a estas actividades, la mejor disposición, flexibilidad y cumplimiento para llevar a cabo nuestro trabajo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                    <!-- Start carousel item -->
                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="testimonial-author-box">
                                        <center>
                                            <img src="{{ asset('assets/images/avatars/review-valeria.png') }}" alt="" class="testimonial-avatar">
                                        </center>
                                        <p class="testimonial-author">
                                            <span class="testimonial-name">Valeria Galban</span>
                                            <span class="testimonial-star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                            <br>
                                            <span class="testimonial-date">Office Experience Manager LATAM Kin+Carta</span>
                                        </p>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Coordino el área de experiencia de oficina de una empresa de tecnología donde el bienestar del empleado es de suma importancia, dada la competencia en el mercado tecnológico por el mejor talento . En Kanbai hemos encontrado un aliado para regalos, merchandising y apoyo a actividades. Su aporte ha sido importante para lograr nuestros objetivos y mantener a nuestros colaboradores felices.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                    <!-- Start carousel item -->
                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="testimonial-author-box">
                                        <center>
                                            <img src="{{ asset('assets/images/avatars/review-sara.png') }}" alt="" class="testimonial-avatar">
                                        </center>
                                        <p class="testimonial-author">
                                            <span class="testimonial-name">Sara Rúa</span>
                                            <span class="testimonial-star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                            <br>
                                            <span class="testimonial-date">CMO - Head of Growth</span>
                                        </p>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Soy líder de marketing de una Startup donde nuestro principal objetivo es el crecimiento de la plataforma, realizamos diferentes actividades, eventos y activaciones, en los cuales Kanbai ha sido un gran aliado para hacer de estas actividades algo muy original y especial. Su tecnología de proyectos es muy chévere porque puedo estar tranquila sobre en qué fase van las cosas, la comunicación es muy buena, encuentro de todo, la calidad es excelente y los precios muy buenos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->
                </div>
            </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>
    </div>
</section>
<!-- End Testimonials Section -->

<section class="section-testimonials nav-arrow-a ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">&nbsp;<hr>&nbsp;</div>
            <div class="col-sm-12 text-center">
                <h2 class="mt-5 titles-home title-nosotros"><strong>Agendemos una reunión</strong></h2>
                <p>Tomemos un espacio para que conoscas como podemos ayudar a tu empresa</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 contenedor-agenda">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="circle-logo-desk">
                            <img src="{{ asset('images/purple-calendar.png?'.rand()) }}" alt="{{ $img }}" class="img-agenda">
                        </div>
                    </div>
                    <div class="col-md-9 mt-3">
                        <form class="form" role="form" action="javascript:void(0)" enctype="multipart/form-data" id="main-form" autocomplete="off">
                            <input type="hidden" id="_url" value="{{ url('agendar-reunion') }}">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                            <div class="col-12 divinput-desk">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" id="name" name="name">
                                    <span class="input-group-text icon-append" id=""><i class="bi bi-x-circle"></i></span>
                                    <span class="missing_alert text-danger" id="name_alert"></span>
                                </div>
                            </div>
                            <div class="col-12 divinput-desk">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" name="email">
                                    <span class="input-group-text icon-append" id=""><i class="bi bi-x-circle"></i></span>
                                    <span class="missing_alert text-danger" id="email_alert"></span>
                                </div>
                            </div>
                            <div class="col-12 divinput-desk">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2" id="phone" name="phone">
                                    <span class="input-group-text icon-append" id=""><i class="bi bi-x-circle"></i></span>
                                    <span class="missing_alert text-danger" id="phone_alert"></span>
                                </div>
                            </div>
                            <div class="col-12 divinput-desk">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Organizacion" aria-label="Recipient's username" aria-describedby="basic-addon2" id="organization" name="organization">
                                    <span class="input-group-text icon-append" id=""><i class="bi bi-x-circle"></i></span>
                                    <span class="missing_alert text-danger" id="organization_alert"></span>
                                </div>
                            </div>
                            <div class="col-12 text-center" style="margin-bottom: 25px;">
                                <button type="submit" class="btn-suscribe-desk">Suscribirse</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@push('scripts')
<script src="{{ asset('js/app/schedulemeeting/create.js') }}"></script>
<script>
$(document).ready(function() {

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,


        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".mySwiperclientesmobile", {
        slidesPerView: 3,
        spaceBetween: 15,
        loop: true,
        loopFillGroupWithBlank: true,

        autoplay: {
            delay: 500,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".mySwiperclientes", {
        slidesPerView: 7,
        spaceBetween: 15,
        loop: true,
        loopFillGroupWithBlank: true,

        autoplay: {
            delay: 500,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });




   


    var thumbnails = document.getElementsByClassName('thumbnail');
    var current;


    for (var i = 0; i < thumbnails.length; i++) {
        initThumbnail(thumbnails[i], i);
    }


    function initThumbnail(thumbnail, index) {
        thumbnail.addEventListener('click', function() {
            splide.go(index);
        });
    }


   
});

</script>
@endpush
