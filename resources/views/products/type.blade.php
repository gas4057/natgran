@extends('layouts.home_layouts')

@section('head')
    <title>Декор</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/page.products_type_sort_render.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/additional.js')}}"></script>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')

    <div class="box catalog-baner">@include('layouts.banner')</div>

    <div class="box catalog-section">
        <!------------------------------ sidebar start ------------------------------>
        <div class="catalog--sidebar d-flex col">
            <h2 class="title--orange">Каталог</h2>

        <div class="catalog--side-bar-toggle-wrap">
            <div class="catalog--side-bar-toggle"></div>
        </div>

        <form id="form_sort-m" class="form_sort form_sort-m d-flex ai-center justify-end w-100" action="{{route('products.sort')}}" method="get">
            <input type="hidden" class="type_id" value="">
            @csrf
            <div class="sort--select d-flex ai-center">
                <span class="sort--select__name">показывать</span>
                <label>
                    <select class="select_sort pagination" name="paginate">
                        @foreach($data_paginate as $val)
                            <option {{$paginate == $val ? 'selected' : ''}} value={{$val}}>{{$val}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="sort--select d-flex ai-center">
                <span class="sort--select__name">сортировать</span>
                <label>
                    <select class="select_sort sorting" name="sortBy">
                        @foreach($data_orderBy as $key=>$val)
                            <option {{$sortBy == $key ? 'selected' : ''}} value={{$key}}>{{$val}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
        </form>

            <div class="catalog--sidebar__header d-flex w-100 ai-center">
                Продукция:
            </div>
            <div class="catalog--sidebar__content d-flex col">
                <ul class="catalog--sidebar__lists">
                    @foreach($types as $type)
                        @if($loop->iteration <5)
                    <li class="catalog--sidebar__list {{$type->subtype()->exists() ? '' : 'empty'}} ">

                        <div class="accordion--catalog-box {{$prod_type->id == $type->id ? 'active-acc-catalog' : ''}} {{$prod_type->id == $type->id ? 'selected' : ''}}">
                            <a class="accordion--catalog{{$type->subtype()->exists() ? '' : '--empty'}} " href="{{route('products.type',[$type->id])}}">
                                <h4 class="accordion--catalog__header">
                                    {{$type->name}}
                                </h4>
                            </a>
                            <a class="accordion--catalog-toggle" href="#" data-panel="panel-{{$type->id}}"></a>
                        </div>

                        <div id="panel-{{$type->id}}" class="panel {{$prod_type->id == $type->id ? 'open' : ''}}">
                            <ul class="catalog--sidebar__options">
                                @foreach($type->subtype as $subtypes)
                                <li class="catalog--sidebar__option {{$subtypes->id == $subtypeId ? 'active' : ''}}">
                                    <a class="catalog--sidebar__link" href="{{route('products.type',[$type->id,$subtypes->id])}}">
                                        <div class="catalog--sidebar__text">{{$subtypes->subtype_name}}</div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="catalog--sidebar__header d-flex w-100 ai-center">
                Декор:
            </div>
            <div class="catalog--sidebar__content d-flex col">
                <ul class="catalog--sidebar__lists">
                    @foreach($types as $type)
                        @if($loop->iteration >4)
                            @if($type->subtype()->exists())
                        <li class="catalog--sidebar__list {{$type->subtype()->exists() ? '' : 'empty'}} ">
                            <div class="accordion--catalog-box {{$prod_type->id == $type->id ? 'active-acc-catalog' : ''}} {{$prod_type->id == $type->id ? 'selected' : ''}}">
                                <a class="accordion--catalog{{$type->subtype()->exists() ? '' : '--empty'}} " href="{{route('products.type',[$type->id])}}">
                                    <h4 class="accordion--catalog__header">
                                        {{$type->name}}
                                    </h4>
                                </a>
                                <a class="accordion--catalog-toggle" href="#" data-panel="panel-{{$type->id}}"></a>
                            </div>

                            <div id="panel-{{$type->id}}" class="panel {{$prod_type->id == $type->id ? 'open' : ''}}">
                                <ul class="catalog--sidebar__options">
                                    @foreach($type->subtype as $subtypes)
                                        <li class="catalog--sidebar__option {{$subtypes->id == $subtypeId ? 'active' : ''}}">
                                            <a class="catalog--sidebar__link" href="{{route('products.type',[$type->id,$subtypes->id])}}">
                                                <div class="catalog--sidebar__text">{{$subtypes->subtype_name}}</div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                            @endif
                            @endif
                    @endforeach
                        @foreach($types as $type)
                            @if($loop->iteration >4)
                                @if(!$type->subtype()->exists())
                                    <li class="catalog--sidebar__list {{$loop->iteration != 6  ? 'empty' : ''}}">

                                        <div class="accordion--catalog-box {{$prod_type->id == $type->id ? 'active-acc-catalog' : ''}} {{$prod_type->id == $type->id ? 'selected' : ''}}">
                                            <a class="accordion--catalog{{$loop->iteration > 2 ? '--empty' : ''}} " href="{{route('products.type',[$type->id])}}">
                                                <h4 class="accordion--catalog__header">
                                                    {{$type->name}}
                                                </h4>
                                            </a>
                                            <a class="accordion--catalog-toggle" href="#" data-panel="panel-{{$type->id}}"></a>
                                        </div>

                                        <div id="panel-{{$type->id}}" class="panel {{$prod_type->id == $type->id ? 'open' : ''}}">
                                            <ul class="catalog--sidebar__options">
                                                @foreach($type->subtype as $subtypes)
                                                    <li class="catalog--sidebar__option {{$subtypes->id == $subtypeId ? 'active' : ''}}">
                                                        <a class="catalog--sidebar__link" href="{{route('products.type',[$type->id,$subtypes->id])}}">
                                                            <div class="catalog--sidebar__text">{{$subtypes->subtype_name}}</div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                </ul>
            </div>
        </div>
    @if(!$products->isEmpty())
            <input type="hidden" name="subtype_id" value="{{$subtypeId}}">
            <input type="hidden" name="type_id" value="{{$prod_type->id}}">
        @csrf
            <!------------------------------ sidebar end ------------------------------>
            <div class="catalog--items d-flex col w-100">

                <!------------------------------ sort start ------------------------------>
                <div class="catalog--sort d-flex">

                <div class="catalog--side-bar-toggle">
                    <!-- Фильтры и сортировка -->
                    Фильтр
                </div>

                    <form id="form_sort" class="form_sort  form_sort-d d-flex ai-center justify-end w-100" action="{{route('products.sort')}}" method="get">
                        <input type="hidden" class="type_id" value="">
                        @csrf
                        <div class="sort--select d-flex ai-center">
                            <span class="sort--select__name">показывать</span>
                            <label>
                                <select class="select_sort pagination" name="paginate">
                                    @foreach($data_paginate as $val)
                                            <option {{$paginate == $val ? 'selected' : ''}} value={{$val}}>{{$val}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="sort--select d-flex ai-center">
                            <span class="sort--select__name">сортировать</span>
                            <label>
                                <select class="select_sort sorting" name="sortBy">
                                    @foreach($data_orderBy as $key=>$val)
                                        <option {{$sortBy == $key ? 'selected' : ''}} value={{$key}}>{{$val}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </form>
                </div>
                <!------------------------------ sort end ------------------------------>
                <!------------------------------ elems start ------------------------------>
                <div id="catalog-items-render">
                    <div class="catalog--elems d-flex flex-wrap">
                        @foreach($products as $product)
                        <a href="{{route('products.id',$product->id)}}" class="product--item d-flex col ai-center">
                            <div class="product--item__img-wrap {{$product->type_id == 1 || $product->type_id == 2 ? 'monument-3d' : ''}}">
                                <img class="product--item__img"
                                     src="{{$product->image ? Storage::url($product->image) : Url::asset('assets/img/stella.jpg')}}"
                                     alt="...">
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
                                <div class="product--item__link btn orange d-flex ai-center justify-center mb-0" tabindex="0">
                                    Подробнее
                            </div>
                            </div>
                            @if($product->is_promotional == 1)
                                <div class="product--item__sell">
                                    <div class="product--item__economy">Экономия</div>
                                    <div class=""><span class="fw-700">{{$product->saving}}</span> руб.</div>
                                </div>
                            @endif
                        </a>
                        @endforeach

                    </div>

                    <div class="catalog--footer-pagination d-flex ai-center justify-center">
                        <ul>
                            {{$products->links()}}
                        </ul>
                    </div>
                </div>
            @else
                    <div class="box basket-empty">
                        <h2 class="title--black">
                <span>В данной категории пока нет товара</span>
                        </h2>
                    </div>
            @endif
    <div class="catalog--sidebar-overlay"></div>
@endsection
