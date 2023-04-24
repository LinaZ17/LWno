@extends('layouts.main_head')

@section('title', 'Search')


@section('content')


    @if($products)
        <!--product-starts-->
        <div class="product">
            <div class="container">
                <div class="product-top">
                    <div class="product-one">

                        <div class="row row-cols-4">

                            @foreach($products as $product)

                                {{-- для появления картинок--}}
                                @php
                                    $image = '';
                                    if(count($product->images)  > 0){
                                        $image = $product->images[0]['img'];
                                    }else{
                                        $image = 'no_image.png';
                                    }
               //                      обращаемся к массиву через count()
               //                      images() метод из Модели
                                @endphp

                                <div class="col-md-3 product-left mt-3">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="{{ route('showProduct', ['catalog', $product->id]) }}"
                                           class="mask"><img class="img-responsive zoom-img" src="images/{{ $image }}"
                                                             alt="{{ $product->title }}"/></a>
                                        <div class="product-bottom">

                                            <h3>
                                                <a href="{{ route('showProduct', ['catalog', $product->id]) }}">{{ $product->title }}</a>
                                            </h3>
                                            <p>Explore Now</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span
                                                    class=" item_price">€ {{ $product->price }}</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-50%</span>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            {{--                    <div class="clearfix"></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div>Sorry</div>
    @endif
    <!--product-end-->



@endsection






