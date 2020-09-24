@extends('layouts.home_layouts')
@section('head')
    <title>Продукция</title>
@endsection

@section('content')

@include('layouts.breadcrumb_layouts')
    <div class="product product--decor">

    <div class="box product--decor-baner">
        @include('layouts.banner')
    </div>

        @if($product)
                <div class="container decor__page" id="decor">
                    <div class="box">
                        <div class="decor__card">
                            <div class="decor__img-wrap">
                                <a class="decor__img-link"
                                    href="{{$product->image ? Storage::url($product->image) : URL::asset('/images/demo/vase.jpg')}}"
                                    target="_blank">
                                    <img
                                        class="decor__img"
                                        src="{{$product->image ? Storage::url($product->image) : URL::asset('/images/demo/vase.jpg')}}">
                                </a>
                            </div>

                            <div class="decor__info">
                                <div class="decor__properties">
                                    <h2 class="decor__title">{{$product->name}}</h2>
                                    <div class="decor__subtitle">Характеристики:</div>

                                    <ul class="decor__properties-lists">
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Код товара</div>
                                            <div class="decor__properties-value">{{$product->product_code ?? 'Kr-9'}}</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Материал</div>
                                            <div class="decor__properties-value">{{$product->material->name ?? 'габбро-диабаз / гранит'}}</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Тип</div>
                                            <div class="decor__properties-value">{{$product->type->name ?? 'Одиночный'}}</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Размер</div>
                                            <div class="decor__properties-value">{{$product->size ?? '1000*1000*400'}}</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Вес</div>
                                            <div class="decor__properties-value">{{$product->weight ?? 'вес'}}.</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Гарантия</div>
                                            <div class="decor__properties-value">{{$product->warranty ?? '5 лет'}}</div>
                                        </li>
                                        <li class="decor__properties-list">
                                            <div class="decor__properties-name">Хранение</div>
                                            <div class="decor__properties-value">{{$product->storage ?? 'Бесплатно 1 год'}}</div>
                                        </li>
                                    </ul>

                                    <div class="decor__block-price">
                                        <span class="decor__price-text">Цена</span>
                                        <span class="decor__price">
                                            <span class="decor__actual-price">{{$product->actual_price}}</span>
                                            <span> руб.</span>
                                        </span>
                                    </div>

                                    <div class="product--body__row d-flex ai-center justify-start">
                                        <form id="decor-form" class="decor__form" action="{{route('cart.change.count.item')}}" method="post">
                                            <input type="hidden" name="product_id" class="type_id" value="{{$product->id}}">
                                            <input type="hidden" name="products_count" value="1">
                                            @csrf
                                            <button id="submit_order" class="btn btn--pill bth--basket btn--decor btn--m-100" href="#">Добавить в корзину</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="decor__service tab__description-item tab__description-item--green tab__description-item--customer-service">
                                    Если испытываете затруднения при оформлении заказа онлайн, воспользуйтесь помощью консультанта
                                    <a class="tab__link tab__link--decor" href="#" data-fancybox="" data-src="#callback--modal">Заказать звонок</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
</div>


            <div class="custom--carousel">
                <div class="custom--carousel__nav">
                    <div class="box">
                        <a class="custom--carousel__link custom--carousel__link--desktop active" href="javascript:void0();" rel="0">Описание</a>
                        <a class="custom--carousel__link custom--carousel__link--desktop" href="javascript:void0();" rel="1">Доставка</a>
                        <a class="custom--carousel__link custom--carousel__link--desktop" href="javascript:void0();" rel="2">Оплата</a>
                    </div>
                </div>

                <div class="custom--carousel__btns w-100">
                    <button class="custom--carousel__btn" id="prev--slide" type="button">
                    </button>

                    <button class="custom--carousel__btn" id="next--slide" type="button">
                    </button>
                </div>

                <div class="box d-flex col w-100">
                    <div class="custom--carousel__body">
                        <a class="custom--carousel__link custom--carousel__link--mobile" href="javascript:void0();">Описание</a>
                        <div class="custom--carousel__box w-100 slide0" style="display: block;">
                            {{$product->description ?? 'Описание'}}
                        </div>
                        <a class="custom--carousel__link custom--carousel__link--mobile" href="javascript:void0();">Доставка</a>
                        <div class="custom--carousel__box w-100 slide1">
                            {{$product->type->getInfo->first()->delivery ?? 'Доставка'}}
                        </div>
                        <a class="custom--carousel__link custom--carousel__link--mobile" href="javascript:void0();">Оплата</a>
                        <div class="custom--carousel__box w-100 slide2">
                            {{$product->type->getInfo->first()->payment ?? 'Оплата'}}
                        </div>
                    </div>
                </div>
            </div>

@include('recommendedCart.index')
        @endif
    </div>
@endsection
