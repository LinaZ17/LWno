@extends('layouts.main_head')

@section('title', $brand->title)


@section('content')

    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">{{ $brand->title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->

    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">

                    <div class="row row-cols-4">

                        <div class="product-one">
                        @foreach($brand->products as $product)
                            @include('layouts.card')
                        @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection





