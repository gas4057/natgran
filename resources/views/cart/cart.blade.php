@extends('layouts.home_layouts')

@section('footer')
    <script src="{{URL::asset('assets/js/page.contact.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/toastr.min.js')}}"></script>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')

    @if($cart ?? '' and $cart['totalPrice'] !=0)
        <div class="box col main--content">
            <h4 class="cart--title">
                <span class="cart--title__text">КОРЗИНА </span>
                <span class="cart--title__counter"> <span>-</span> Товаров в корзине (<span class="counter">{{$cart['totalQty']}}</span>)</span>
            </h4>

            {{--<div class="cart--products__total d-flex justify-end">
                <span class="products--total__text">Итого:</span>
                <div class="product--total__prices d-flex col">
                    <span class="product--total__price">{{$cart['totalPrice']}} руб.</span>
                    <span class="product--total__old ">{{$cart['totalDiscount']}} руб.</span>
                </div>
            </div>--}}
            <div class="cart--order">
                <form class="form_cart_checkout d-flex ai-start" action="{{route('cart.checkout')}}" method="post" id="order--form">
                    <div class="order--form__left d-flex col">
                        <div class="cart--products d-flex col">
                            <div class="cart--products__container d-flex col">
                                <div class="cart--products__header d-flex">
                                        <div class="products--header__image  d-flex ai-center"></div>
                                        <div class="products--header__name d-flex ai-center"><span>Наименование</span></div>
                                        <div class="products--header__counter d-flex ai-center"><span>Колличество</span></div>
                                        <div class="products--header__total d-flex ai-center"><span>Сумма</span></div>
                                    <div class="products--header__remove d-flex ai-center"></div>
                                </div>
                                @foreach($cart['items'] as $key=>$product)
                                    <div class="cart--products__item_inner">
                                        {{--<div class="cart--item__remove mob d-flex ai-center justify-end">
                                            <button type="button" class="remove--cart__item">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.0747 8.93312C20.8305 8.68896 20.435 8.68896 20.1909 8.93312L15.0078 14.1163L9.8247 8.93318C9.58054 8.68902 9.18503 8.68902 8.94093 8.93318C8.69677 9.17734 8.69677 9.57285 8.94093 9.81695L14.124 15L8.94093 20.1831C8.69677 20.4273 8.69677 20.8228 8.94093 21.0669C9.06298 21.1889 9.22294 21.25 9.38285 21.25C9.54275 21.25 9.70265 21.1889 9.82476 21.0669L15.0078 15.8838L20.1909 21.0669C20.3129 21.1889 20.4729 21.25 20.6328 21.25C20.7927 21.25 20.9526 21.1889 21.0747 21.0669C21.3189 20.8227 21.3189 20.4272 21.0747 20.1831L15.8916 15L21.0746 9.81695C21.3188 9.57279 21.3188 9.17728 21.0747 8.93312Z" fill="#9F9F9F"/>
                                                </svg>
                                            </button>
                                        </div>--}}
                                        <div class="cart--products__item d-flex col">
                                        {{-- <span class="badge">Колличество{{$product['qty']}}</span> --}}
                                        {{-- <span class="label label-success">акционная цена:{{$product['item']['actual_price']}}</span> --}}
                                        <div class="item__sections d-flex">
                                            <div class="products--header__top">
                                                <div class="cart--item__image d-flex">
                                                    <img src="{{$product['item']['image'] ? Storage::url($product['item']['image']) : URL::asset('assets/img/news-image.jpg')}}" alt="Prod">
                                                </div>
                                                <!-- <input type="hidden" class="itemsToRm" value="{{$key}}"> -->
                                                <div class="cart--item__name d-flex col">
                                                <span class="prod--name">{{$product['item']['name']}}<</span>
                                                @if($product['item']['type_id'] != 1 && $product['item']['type_id'] != 2)
                                                    <span class="what--we__choose">({{$product['item']['size']}})</span>
                                                @else
                                                    <span class="what--we__choose">({{$product['item']['atrModifiers'] ?? 'empty'}})</span>
                                                @endif
                                                <p class="cart--item__timing">
                                                    <span class="timing--title">Срок изготовления: </span>
                                                    <span class="timig--text">1 месяц?? уточнить!</span>
                                                </p>
                                            </div>
                                            </div>

{{--                                            <div class="cart--item__price d-flex col">--}}
{{--                                                <span class="actual--price">{{$product['actualPrice']}} руб.</span>--}}
{{--                                                @isset($product['oldPrice'])--}}
{{--                                                    <span class="old--price">{{$product['oldPrice']}} руб.</span>--}}
{{--                                                @endisset--}}
{{--                                            </div>--}}
                                            <div class="products--header__bottom">
                                                <div class="cart--item__counter d-flex">
                                                    {{--
                                                        *Выбор количества товаров через плюс и минус (если заказчик захочет вернуть)

                                                        <button class="cart--item__btn minus d-flex ai-center justify-center" type="button">-</button>
                                                        <input type="text" class="cart--item__count" value="{{$product['qty']}}"/>
                                                        <button class="cart--item__btn plus d-flex ai-center justify-center" type="button">+</button>
                                                    --}}
                                                    <div class="cart--item__selectContainer">
                                                        <select class="cart--item__select">
                                                            @for($i = 1;$i<6;$i++)
                                                                <option {{$i == $product['qty'] ? 'selected' : ''}} val="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="{{$product['item']['is_promotional'] ? 'cart--item__total' : 'cart--item__total--common'}} d-flex ai-center align-content-center flex-wrap">
                                                    <div class="d-flex ai-center justify-center col-100">
                                                        <span class="price-product m-0">{{$product['actualPrice']}}</span>
                                                        <span class="m-0 ml-5"> руб.</span>
                                                    </div>
                                                    @if($product['item']['is_promotional'] == 1)
                                                        <div class="d-flex ai-center justify-center col-100 old">
                                                            <span class="price-product--old m-0">{{$product['oldPrice']}} </span><span class="m-0"> руб.</span>
                                                        </div>
                                                    @endif

                                                    <input class="hidden-price" type="hidden" value="{{$product['actualPrice']}}">
                                                    <input class="hidden-price--old" type="hidden" value="{{$product['oldPrice']}}">
                                                    <input class="hidden-product_id" type="hidden" name="product_id" value="{{$product['item']['id']}}">
                                                    <input class="hidden-monument_id itemsToRm" type="hidden" value="{{$key}}">
                                                    <input class="hidden-is_promotional" type="hidden" name="hidden-is_promotional" value="{{$product['item']['is_promotional']}}">
                                                </div>
                                            </div>
                                            <div class="cart--item__remove d-flex ai-center justify-end">
                                                <button type="button" class="remove--cart__item">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21.0747 8.93312C20.8305 8.68896 20.435 8.68896 20.1909 8.93312L15.0078 14.1163L9.8247 8.93318C9.58054 8.68902 9.18503 8.68902 8.94093 8.93318C8.69677 9.17734 8.69677 9.57285 8.94093 9.81695L14.124 15L8.94093 20.1831C8.69677 20.4273 8.69677 20.8228 8.94093 21.0669C9.06298 21.1889 9.22294 21.25 9.38285 21.25C9.54275 21.25 9.70265 21.1889 9.82476 21.0669L15.0078 15.8838L20.1909 21.0669C20.3129 21.1889 20.4729 21.25 20.6328 21.25C20.7927 21.25 20.9526 21.1889 21.0747 21.0669C21.3189 20.8227 21.3189 20.4272 21.0747 20.1831L15.8916 15L21.0746 9.81695C21.3188 9.57279 21.3188 9.17728 21.0747 8.93312Z" fill="#9F9F9F"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cart--item__delete d-flex w-100 ai-center">
                                            <div class="cart--item__deleted d-flex ai-center h-100">
                                                <span class="cart--item__deletedTitle d-flex ai-center h-100">Удалено: </span>
                                                <p class="cart--item__deletedProd d-flex ai-center h-100">
                                                    @if($product['item']['type_id'] != 1 && $product['item']['type_id'] != 2)
                                                        <span class="deletedProd__info d-flex ai-center h-100">({{$product['item']['size']}})</span>
                                                    @else
                                                        <span class="deletedProd__info d-flex ai-center h-100">({{$product['item']['modifiers'] ?? 'empty'}})</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <button class="cancelDelete" type="button">Отменить удаление</button>
                                        </div>


                                        {{--
                                            <form class="form_cart_rm_item" action="{{route('cart.rm.item')}}" method="get">
                                                <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                                                <input type="hidden" name="product_qty" value="1">
                                                @csrf
                                                <button class="btn-default" type="submit">удалить 1</button>
                                            </form>

                                            <form class="form_cart_add_item" action="{{route('cart.add.item')}}" method="get">
                                                <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                                                @csrf
                                                <button class="btn-default" type="submit">добавить 1</button>
                                            </form>

                                            <form class="form_cart_rm_all_item" action="{{route('cart.rm.all.items')}}" method="get">
                                                <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                                                @csrf
                                                <button class="btn-default" type="submit">удалить всё Х</button>
                                            </form> --}}
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <section class="cart--order__contact order--section">
                            <div class="order--section__header">1. Контактные данные</div>
                            <div class="order--section__content d-flex flex-wrap">
                                <div class="col-50 d-flex col">
                                    <div class="order--form__field d-flex ai-center">
                                        <span class="required">Имя получателя</span>
                                        <input type="text" name="name" value="" required>
                                    </div>
                                    <div class="order--form__field d-flex ai-center">
                                        <span class="required">Телефон</span>
                                        <div class="input-wrap">
                                            <input type="text" name="phone" value="" id="phone-basket" required>
                                            <label for="phone">Укажите номер телефона <span class="red">без цифры 8</span></label>
                                        </div>
                                    </div>
                                    <div class="order--form__field d-flex ai-center">
                                        <span>Эл.адрес</span>
                                        <input type="text" name="email" value="">
                                    </div>
                                </div>
                                <div class="col-50">
                                    <textarea name="message" placeholder="Ваш комментарий...."></textarea>
                                </div>
                                <div class="col-100 form--warning">
                                    <p><span>*</span> - Поля, обязательные для заполнения</p>
                                </div>
                            </div>
                        </section>
                        <section class="cart--order__delivery order--section">
                            <div class="order--section__header">2. Доставка</div>
                            <div class="order--section__content d-flex flex-wrap">
                                <div class="order--form__field d-flex ai-center col-100">
                                    <span class="required">Выберите ваш город</span>
                                    <div class="order--form__select">
                                        <select class="select-box order--form__select w-100" name="delivery_id" disabled>
                                            <option disabled data-price="0">Выберите город доставки</option>
                                            @foreach($cities as $city)
                                                <option @if($loop->first) selected @endif value={{$city->id}}
                                                    data-price="{{$city->price + 0}}">{!! $city->city !!} - {{($city->price + 0)}}р.
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <label class="order--form__label d-flex col">
                                    <input class='standart__delivery' type="radio" value="Доставка местной почтовой службой Стандарт" data-coast="paid" data-price="0" name="delivery--inp"/>
                                    <span class="label--custom__radio"></span>
                                    <span class="label--title"> Доставка местной почтовой службой Стандарт</span>
                                    <span class="label--info">Предпологаемая дата доставки: <br> 20 июня - 30 июня</span>
                                    <p class="label--price">
                                        Стоимость от:
                                        <span class="order--form__price">0</span><span> руб.</span>
                                        <input class="order--form__price--hidden" type="hidden" name="order--form__price--hidden" value="0">
                                    </p>
                                </label>
                                <label class="order--form__label d-flex col">
                                    <input type="radio" value="Доставка местной почтовой службой Стандарт" data-coast="free"
                                           data-price="бесплатно" name="delivery--inp" checked/>



                                    <span class="label--custom__radio"></span>
                                    <span class="label--title"> Самовывоз со склада в городе {{$freeDeliveryCity->city ?? 'Лида'}}</span>
                                    <span class="label--info">Адрес склада: <br> {{$freeDeliveryCity->address ?? 'Проспект Ленина 72, 5 проезд'}}</span>
                                    <p class="label--price">
                                        Стоимость от:
                                        <span>бесплатно</span>
                                    </p>
                                </label>
                            </div>

{{--                          TODO ожидаю delivery_id на случай если выбрана беспл.доставка. Сейчас приходит delivery--inp --}}
                              <input id="delivery-hidden-id" hidden type="number" value="{{$freeDeliveryCity->id}}">
                        </section>
                        <section class="cart--order__payment order--section">
                                <div class="order--section__header">3. Оплата</div>
                                <div class="order--section__content d-flex flex-wrap">
                                    <label class="order--form__label order--form__label_payment d-flex ai-center">
                                        <input type="radio" value="1" name="cashless_payment" checked/>
                                        <span class="label--custom__radio label--custom__radio_pay "></span>
                                        <img  src="{{URL::asset('assets/img/cach.svg')}}" alt=""/>
                                        <span class="label--title">Оплата в офисе компании</span>
                                    </label>
                                    <label class="order--form__label order--form__label_payment d-flex ai-center">
                                        <input type="radio" value="2" name="cashless_payment"/>
                                        <span class="label--custom__radio label--custom__radio_pay "></span>
                                        <img  src="{{URL::asset('assets/img/card.svg')}}" alt=""/>
                                        <span class="label--title">Банковская картой</span>
                                    </label>
                                    <label class="order--form__label order--form__label_payment d-flex ai-center">
                                        <input type="radio" value="2" name="cashless_payment"/>
                                        <span class="label--custom__radio label--custom__radio_pay "></span>
                                        <img  src="{{URL::asset('assets/img/erip.svg')}}" alt=""/>
                                        <span class="label--title">Оплата в офисе компании</span>
                                    </label>
                                </div>
                        </section>
                    </div>
                    <div class="order--form__right d-flex">
                        <section class="cart--order__summary order--section">
                            <div class="order--section__header">Сводка по заказу</div>
                            <div class="order--summary__content no-sale">
                                <div class="summary--content__field d-flex">
                                    <span class="col-50 field--name">Товаров на:</span>
                                    <p class="col-50 d-flex col">
                                        <span class="current d-flex justify-end">
                                            <span class="current-actual-js">{{$cart['totalPrice']}}</span>
                                            <span class="ml-5">руб.</span>
                                        </span>
                                        <span class="old d-flex justify-end">
                                            <span class="current-old-js">{{$cart['totalDiscount']}}</span>
                                            <span class="ml-5">руб.</span>
                                        </span>
                                        <input class="current-actual-price-hidden" type="hidden" name="current-actual-price-hidden" value="{{$cart['totalPrice']}}">
                                        <input type="hidden" name="current-old-price-hidden" value="{{$cart['totalPrice']}}">
                                    </p>
                                </div>
                                <div class="summary--content__field d-flex economy">
                                    <span class="col-50 field--name">Экономия:</span>
                                    <span class="col-50 bold d-flex justify-end"><span class="current-economy-js">{{$cart['totalPriceDif']}}</span><span class="ml-5">руб.</span>
                                </div>
                                <div class="summary--content__field d-flex">
                                    <span class="col-50 field--name">Доставка:</span>
                                    <span class="summary--content__field__delivery col-50 bold d-flex justify-end">бесплатно</span>
                                    <input class="current-delivery-price-hidden" type="hidden" name="current-delivery-price-hidden" value="0">
                                </div>
                                <div class="summary--content__field d-flex total-sum">
                                    <span class="col-50 field--name">Общая сумма</span>
                                    <span class="current ml-auto">
                                        <span class="current-total-js">{{$cart['totalPrice']}}</span>
                                        <span class="ml-5">руб.</span>
                                    </span>
                                </div>
                            </div>
                            <div class="order--summary__footer">
                                <label class="label--sustom__checkbox d-flex ai-start">
                                    <input type="checkbox" name="terms" id="terms"/>
                                    <span class="custom--checkbox"></span>
                                    <p>
                                        Я ознакомился и принимаю условия
                                        <a href="{{route('offer.agreement')}}"> Публичной оферты и Пользовательского соглашения</a>
                                    </p>
                                </label>
                                @csrf
                                <button class="btn orange d-flex ai-center justify-center" type="submit">Оформить заказ</button>
                            </div>
                        </section>
                        <div class="payments">
                            <div class="payments__title">Доступные способы оплаты:</div>
                            <div class="payments__items">
                                <div class="payments__item">
                                    <img src="{{URL::asset('assets/img/visa.svg')}}" alt="">
                                </div>
                                <div class="payments__item">
                                    <img src="{{URL::asset('assets/img/master.svg')}}" alt="">
                                </div>
                                <div class="payments__item">
                                    <img src="{{URL::asset('assets/img/maestro.svg')}}" alt="">
                                </div>
                                <div class="payments__item">
                                    <img src="{{URL::asset('assets/img/e-pay.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="box basket-empty">
            <h2 class="title--black">
                <span>Пока корзина пуста, перейдите в
                <a class="sheme--toCatalog" href="{{route('products')}}">каталог</a>
                и выберете нужный Вам товар.</span>
            </h2>
{{--            <h2 class="title--orange">No items in Cart</h2>--}}
        </div>
    @endif
@endsection
