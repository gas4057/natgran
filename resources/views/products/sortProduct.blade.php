<div class="catalog--elems d-flex flex-wrap">
    @foreach($products as $product)
        <div class="product--item d-flex col ai-center">
            <div class="product--item__img-wrap">
                <img class="product--item__img" src="{{$product->image ? Storage::url($product->image) : URL::asset('/images/demo/vase.jpg')}}" alt="...">
            </div>

            <div class="product--item__description">
                <div class="product--item__info">
                    <div class="product--item__type">
                        <span class="fw-600">{{$product->name}}</span>
                    </div>

                    <div class="item-price old"><span>{{$product->is_promotional ? $product->old_price : ""}}</span><span> руб.</span></div>
                </div>

                <div class="product--item__price">
                    <div class="product--item__art">
                        <span class="fw-400">арт.:</span>
                        <span class="fw-600">{{$product->product_code}}</span>
                    </div>

                    <div class="{{$product->is_promotional ? 'item-price--current' : 'item-price--actual'}}"><span>{{$product->actual_price}}</span><span> руб.</span></div>
                </div>
            </div>

            <div class="product--item__link-wrap">
                <a href="{{route('products.id',$product->id)}}" class="product--item__link btn orange d-flex ai-center justify-center mb-0" tabindex="0">
                    Подробнее
                </a>
            </div>
            @if($product->is_promotional == 1)
                <div class="product--item__sell">
                    <div class="product--item__economy">Экономия</div>
                    <div class=""><span class="fw-700">{{$product->saving}}</span> руб.</div>
                </div>
            @endif
        </div>
    @endforeach

</div>

<div class="catalog--footer-pagination d-flex ai-center justify-center">
    <ul>
        {{$products->links()}}
    </ul>
</div>
