<div class="familar">
    <div class="box">
        <div class="familiar--products d-flex w-100 col">
            @if(!empty($recommendedCarts))

                <span class="familiar--products__title">С этим товаром часто покупают:</span>

                <div class="familiar--body">

                    @foreach($recommendedCarts as $cart)
                        <a class="familiar--item" href={{route('products.type',$cart->product_type_id)}}>
                            <div class="familiar--img-wrap">
                                <img
                                    src="{{$cart->image !=null ? Storage::url($cart->image) : URL::asset('assets/img/familiar-1.jpg')}}"
                                    alt="..." class="familiar--img">
                            </div>

                            <div class="familiar--content">
                                <h3 class="familiar--title">{{$cart->title}}</h3>
                                <p class="familiar--text">{{$cart->content}}</p>
                            </div>
                        </a>
                    @endforeach


                </div>
            @endif


        </div>
    </div>
</div>
