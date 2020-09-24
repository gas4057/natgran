<!-- модальное окно для быстрого заказа -->
<div id="popup-qiuck-order" class="popup-qiuck-order mCustomScrollbar" data-mcs-theme="3d-dark">
    <div class="popup-qiuck-order__outer">
        <div class="popup-qiuck-order__title">БЫСТРЫЙ ЗАКАЗ</div>
        <form id="popup-qiuck-order-form" action="">
            <div class="order--form__field d-flex ai-center">
                <input type="text" name="name" value="" id="popup-qiuck-order-name" placeholder="Ваша имя" required>
            </div>
            <div class="order--form__field d-flex ai-center">
                <input type="text" name="email" value="" id="popup-qiuck-order-email" placeholder="E-mail" required>
            </div>
            <div class="order--form__field d-flex ai-center last">
                <input type="text" name="phone" value="" id="popup-qiuck-order-phone" placeholder="Телефон для связи" required>
            </div>
        </form>
        <div class="cart--products d-flex col">
            @if(isset($cartItems))
                @foreach($cartItems['items'] as $key=>$item)
                <div class="cart--products__container d-flex col product-from-basket">
                    <div class="cart--products__close">
                        <input class="hidden-product_id" type="hidden" value="{{$item['item']['id']}}">
                        <input class="hidden-monument_id" type="hidden" value="{{$key}}">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.06665" width="16.4333" height="17" rx="8.21667" fill="white"/>
                            <path d="M9 0C4.31318 0 0.5 3.81318 0.5 8.5C0.5 13.1868 4.31318 17 9 17C13.6868 17 17.5 13.1868 17.5 8.5C17.5 3.81318 13.6868 0 9 0ZM9 16.2917C4.70365 16.2917 1.20832 12.7964 1.20832 8.5C1.20832 4.20365 4.70365 0.708322 9 0.708322C13.2964 0.708322 16.7917 4.20365 16.7917 8.5C16.7917 12.7964 13.2964 16.2917 9 16.2917Z" fill="#424242"/>
                            <path d="M12.4423 5.06208C12.304 4.92372 12.0799 4.92372 11.9415 5.06208L9.00442 7.9992L6.06734 5.06211C5.92898 4.92376 5.70486 4.92376 5.56654 5.06211C5.42818 5.20047 5.42818 5.42459 5.56654 5.56292L8.50362 8.5L5.56654 11.4371C5.42818 11.5754 5.42818 11.7996 5.56654 11.9379C5.6357 12.007 5.72634 12.0416 5.81695 12.0416C5.90757 12.0416 5.99818 12.007 6.06737 11.9379L9.00442 9.0008L11.9415 11.9379C12.0107 12.007 12.1013 12.0416 12.1919 12.0416C12.2825 12.0416 12.3731 12.007 12.4423 11.9379C12.5807 11.7995 12.5807 11.5754 12.4423 11.4371L9.50522 8.5L12.4423 5.56292C12.5807 5.42456 12.5807 5.20044 12.4423 5.06208Z" fill="#424242"/>
                        </svg>
                    </div>
                    <div class="cart--products__item_inner">
                        <div class="cart--products__item d-flex col">
                            <div class="item__sections d-flex">
                                <div class="products--header__top">
                                    <div class="cart--item__image d-flex">
                                        <img src="{{$item['item']['image'] ? Storage::url($item['item']['image']) : Url::asset('assets/img/adv-img.jpg')}}" alt="Prod">
                                    </div>
                                    <div class="cart--item__name d-flex col">
                                        <span class="prod--name">{{$item['item']['name']}} {{$item['item']['product_code']}}</span>
                                        <span class="what--we__choose">(Размер :{{$item['item']['size']}})</span>
                                    </div>
                                </div>
                                <div class="products--header__bottom">
                                    <div class="cart--item__counter d-flex">
                                        <div class="cart--item__selectContainer">
                                            <select class="cart--item__select">
                                                @for($i = 1;$i<6;$i++)
                                                    <option {{$i == $item['qty'] ? 'selected' : ''}} val="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="{{$item['item']['is_promotional'] ? 'cart--item__total' : 'cart--item__total--common'}} d-flex ai-center">
                                        @if($item['item']['type_id'] < 3)
                                        <input class="hidden-actual-price" type="hidden" value="{{$item['actualPrice']}}">
                                        <input class="hidden-old-price" type="hidden" value="{{$item['oldPrice']}}">
                                        @else
                                            <input class="hidden-actual-price" type="hidden" value="{{$item['item']['actual_price']}}">
                                            <input class="hidden-old-price" type="hidden" value="{{$item['item']['old_price']}}">
                                        @endif
                                        <input class="hidden-is_promotional" type="hidden" name="hidden-is_promotional" value="{{$item['item']['is_promotional']}}">
                                        <div>
                                            <span class="quick-order-actual-price">{{$item['actualPrice']}}</span>
                                            <span> руб.</span>
                                        </div>

                                        <div class="old d-flex justify-end">
                                            <span class="quick-order-old-price">{{$item['oldPrice']}}</span>
                                            <span class=""> руб.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            @if($product)
            <div class="cart--products__container d-flex col actual-product-this-page">
                <div class="cart--products__item_inner">
                    <div class="cart--products__item d-flex col">
                        <div class="item__sections d-flex">
                            <div class="products--header__top">
                                <div class="cart--item__image d-flex">
                                    <img src="{{$product->image ? Storage::url($product->image) : Url::asset('assets/img/adv-img.jpg')}}" alt="Prod">
                                </div>
                                <div class="cart--item__name d-flex col">
                                    <span class="prod--name">{{$product->name}} {{$product->product_code}}</span>
                                </div>
                            </div>
                            <div class="products--header__bottom">
{{--                                <div class="cart--item__counter d-flex">--}}
{{--                                    <div class="cart--item__selectContainer">--}}
{{--                                        <select class="cart--item__select">--}}
{{--                                            @for($i = 1;$i<6;$i++)--}}
{{--                                            <option {{$i == 1 ? 'selected' : ''}} val="{{$i}}">{{$i}}</option>--}}
{{--                                            @endfor--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="{{$product->is_promotional ? 'cart--item__total' : 'cart--item__total--common'}} d-flex ai-center">
                                    <input class="hidden-actual-price hidden-actual-price-this-product"
                                        type="hidden"
                                        value="{{$product->actual_price}}">
                                    <div>
                                        <span class="quick-order-actual-price quick-order-actual-price-this-product">
                                            {{$product->actual_price}}
                                        </span>
                                        <span> руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
        </div>
        <div class="order--summary__footer">
            <button id="popup-qiuck-order-submit"
                form="popup-qiuck-order-form"
                class="btn orange d-flex ai-center justify-center"
                type="submit">
                Оформить заказ
            </button>
            <label class="label--sustom__checkbox d-flex ai-start">
                <input type="checkbox" name="terms" id="terms">
                <span class="custom--checkbox"></span>
                <p>
                    Я ознакомился и принимаю условия
                    <a target="_blank" href="{{route('offer.agreement')}}"> Публичной оферты и Пользовательского соглашения</a>
                </p>
            </label>
        </div>
    </div>
</div>
