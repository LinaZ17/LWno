@extends('layouts.main_head')

@section('title', 'Luxury Watches')

@section('content')

<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="/images/abt-1.jpg" alt=""/>
                    <figcaption>
                        <h2>Nulla maximus nunc</h2>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="/images/abt-2.jpg" alt=""/>
                    <figcaption>
                        <h4>Mauris erat augue</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="/images/abt-3.jpg" alt=""/>
                    <figcaption>
                        <h4>Cras elit mauris</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product">
    <div class="container">
        <div class="product-top">

            <div class="product-one">

                <div class="row row-cols-4">

                    @foreach($products as $product)

                    {{--  для появления картинок--}}
                    @php
                        //dd($product->images); //images() метод из Модели
                      $image = '';
                      if (count($product->images) > 0){
                           $image = $product->images[0]['img'];
                      }else{
                          $image = 'no_image.png';
                     }
                      //   обращаемся к массиву через count()
                      //  images() метод из Модели
                    @endphp
                        <div class="product-one">
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="{{ route('showProduct', ['catalog', $product->id]) }}" class="mask"><img class="img-responsive zoom-img" src="/images/{{ $image }}" alt="{{ $product->title  }}" /></a>
                            <div class="product-bottom">
                                <h3><a href="{{ route('showProduct', ['catalog', $product->id]) }}">{{ $product->title }}</a></h3>
                                <p>Explore Now</p>

                                <form action="{{ route('basketAdd', $product->id) }}" method="Post">
                                    @csrf
                                    <h4>
                                        <button type="submit" class="item_add"><i></i></button>
                                        <span class=" item_price">{{ $product->price }}</span>
                                    </h4>
                                </form>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                           </div>
                          </div>
                        </div>
                    @endforeach

                 </div>

             </div>

        </div>
    </div>
</div>

<!--product-end-->

@endsection

{{--footer--}}

