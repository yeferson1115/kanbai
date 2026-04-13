@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<section class="section-banner-desk section-t8 " style="padding-top: 7rem;">
    @if($info['banners']!=null)
    <div id="carusel" class="carousel slide carousel-fade" data-bs-ride="carusel">
        <div class="carousel-inner">
            @foreach($info['banners'] as $key=>$item)
                @php $n = 0 @endphp 
                @if($item->type==1)               
                <div class="carousel-item @if($key==0) active @endif banner-category" style="padding: 0;">
                    <a href="{{$item->url}}" target="_blank">
                        <img style="border-radius: 0px;" src="{{ asset('images/categories/banners/'.$item->file.'') }}" class="d-block w-100"></a>  
                </div>
                @php $n++ @endphp 
                @endif
            @endforeach 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    @endif
</section>
<section class="section-banner-mobile section-t8 " style="padding-top: 11rem;">
    @if($info['banners']!=null)
    <div id="carusel-mobile" class="carousel slide carousel-fade" data-bs-ride="carusel-mobile">
        <div class="carousel-inner">
            @foreach($info['banners'] as $key=>$item)
                @php $x = 0 @endphp 
                @if($item->type==2)               
                <div class="carousel-item @if($x==0) active @endif banner-category" >
                    <a href="{{$item->url}}" target="_blank"><img src="{{ asset('images/categories/banners/'.$item->file.'') }}" class="d-block w-100"></a>  
                </div>
                @php $x++ @endphp 
                @endif
            @endforeach 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carusel-mobile" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carusel-mobile" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    @endif
</section>
<!-- ======= list products Section ======= -->
<section class="section-agents ">
    @if($info['namesubcategory']!=null)
    <div class="miga-pan mt-2">
        <div class="container">
            <a href="/catalogo/{{ $info['slugcategory'] }}">< Volver a {{$info['namecategory']}} </a> 
        </div> 
    </div> 
    @endif 

    <div class="container">
    @if($info['namesubcategory']==null)
        <div class="row mt-4">
            <!-- Slider -->
            <div class="slider">
              <ul class="content-category-s">
                @foreach($categories as $item)
                  <li>
                    <a href="/catalogo/{{$info['namecategory']}}/{{$item->slug}}" class="link-slider">
                        <div class="content-catagory-slider">
                            <img src="{{ asset('images/subcategories/'.$item->file) }}" alt="" />
                        </div>
                        <p style="text-align: center;">{{$item->name}}</p>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
        </div>
        

        @if($info['bannerscommerce']!=null)
        <div class="row mt-4">
            <!-- Slider -->
            <div class="slider bannerscommerce">
                @foreach($info['bannerscommerce'] as $item) 
                @if((new \Jenssegers\Agent\Agent())->isDesktop() || (new \Jenssegers\Agent\Agent())->isTablet())
                @if($item->type==1)                
                <a href="{{$item->url}}" target="_blank">
                    <img style="border-radius: 20px;    max-width: 100%;" src="{{ asset('images/categories/commerce/desk/'.$item->file) }}" alt="" />
                </a>
                @endif
                @endif
                @if((new \Jenssegers\Agent\Agent())->isMobile())
                @if($item->type==2)                
                <a href="{{$item->url}}" target="_blank">
                    <img style="border-radius: 20px;    max-width: 100%;" src="{{ asset('images/categories/commerce/mobile/'.$item->file) }}" alt="" />
                </a>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        @endif

        @if($info['imagesattributes']!=null)
        <div class="row mt-4">
            <!-- Slider -->
            <div class="slider imagesattributes">
                @foreach($info['imagesattributes'] as $item)
                    <a href="#" >
                        <div class="content-attributes">
                            <img style="margin: 0 auto; width: 304px; height: 160px; object-fit: cover;border-radius: 30px;" src="{{ asset('images/categories/attributes/'.$item->file) }}" alt="" />
                        </div>
                        <p style="text-align: center;">{{$item->title}}</p>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        @endif
        <div class="mt-5">
         @livewire('productos',['info'=>$info])
        </div>
    </div>
</section>
<!-- End list products Section -->
<section class="section-testimonials nav-arrow-a testimonials">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card-kanbai">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-6 text-center">
                                <div class="circle-icon text-center">
                                    <img src="{{ asset('images/purple-calendar.png') }}" width="120">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h5 class="mt-5 titles-home-categories">¿Tienes un proyecto especifico?</h5>
                            </div>
                            <div class="col-12 text-center">&nbsp;</div>
                            <div class="col-12 text-center">Permitenos crear una propuesta 100% adaptada a tus necesidades</div>
                            <div class="col-12 text-center">&nbsp;</div>
                            <div class="col-12 text-center">
                                <a href="/solicitud-personalizada" class="btn btn-shedule">Crear Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    
    $(document).ready(function(){
        $('.imagesattributes').slick({
  dots: false,
	prevArrow: $('.prev'),
	nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.responsive').slick({
  dots: false,
  autoplay:true,
	prevArrow: $('.prev'),
	nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 7,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.bannerscommerce').slick({
  dots: false,
	prevArrow: $('.prev'),
	nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


    var myCarousel = document.querySelector('#carusel')
    var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
    });

});

</script>
@endpush
