
{{--@foreach($catalog->products as $product)--}}
    {{-- //$catalog->products products взят из метода Модели-
      теперь будет работать переключение между категориями каталога женсие мужские детсике часы--}}

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

        <div class="col-md-4 product-left p-left">
            <div class="product-main simpleCart_shelfItem">
                <a href="{{ route('showProduct', ['catalog', $product->id]) }}" class="mask"><img class="img-responsive zoom-img" src="/images/{{ $image }}" alt="{{ $product->title  }}" /></a>
                <div class="product-bottom">
                    <h3><a href="{{ route('showProduct', ['catalog', $product->id]) }}">{{ $product->title }}</h3>
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


