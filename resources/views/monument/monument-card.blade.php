@extends('layouts.home_layouts')

@section('head')

@endsection
@section('footer')
    <script src="{{URL::asset('assets/js/page.order_set_attributes.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/libs.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/html.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/settings.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/tree.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/OrbitControls.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/OBJLoader.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/MTLLoader.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/datepicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/datable.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/toastr.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/jquery.mask.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/autosize.min.js')}}"></script>
    <script src="{{asset('assets/js/front/jQuery.Brazzers-Carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/additional.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/scripts.js')}}"></script>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')

    @if(!empty($product))
        <div class="product">
            <div class="box flex-wrap main--content" id="order-view-select_details" data-url-route="/datas.html"
                data-ready-id="870">

                <!-- Банер с рекламой -->
                <div class="product-card-baner">
                    <div class="box col mt-40 mb-127">
                        @include('layouts.banner')
                    </div>
                </div>


                <!-- 3d картинка -->
                @if($product->subtype_id == 3 || $product->subtype_id == 7)
                    @include('monument.layers.3dModels.Sarcophagus')
                @else
                    @push('scripts')
                        <script src="{{URL::asset('assets/js/model-3d.js')}}"></script>
                    @endpush
                @include('monument.layers.3dModels.Single&Double')
            @endif

                <!-- Главные табы -->
                <div class="tabs">
                    <ul class="items">
                        <li class="item tab-header active" data-tab="equipment">
                            <h3 class="item__title" >
                                <span class="item__step">Шаг 1 - </span>
                                Комплектация
                            </h3>
                        </li>
                        <li class="item tab-header" data-tab="registration">
                            <h3 class="item__title">
                                <span class="item__step">Шаг 2 -</span>
                                Оформление
                            </h3>
                        </li>
                        <li class="item tab-header tab-disabled" data-tab="result">
                            <h3 class="item__title">
                                <span class="item__step">Шаг 3 -</span>
                                Результат
                            </h3>
                        </li>
                    </ul>

                    <form class="set_attributes product--details__constructor d-flex col order-step-form" action="{{route('product.save')}}" method="POST" id="order-constructor-form">
                        <input name="id" type="hidden" value="870">
                        <input type="hidden" name="final--price--equipment" value="">
                        <input type="hidden" name="final--price--registration" value="">
                        <input type="hidden" name="final--price" value="">
                        <input id="status-3d-animate" name="status-3d-animate" type="hidden" value="stop">
                        <input type="hidden" name="actual--param" value="">
                        <input id="frame-number" name="frame-number" type="hidden" value="1">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id">

                        <!-- Контент табов -->
                        <div class="tab" id="equipment">
                            <div class="card-wrap">

                                <div class="tab__info">
                                    {{--@dd($product)--}}
                                    <div class="tab__product-title">
                                        <span>{{$product->subtype->full_name}}</span>
                                        <span class="font-weight-normal">арт.:</span>
                                        <span>{{$product->product_code}}</span>
                                    </div>

                                    @if($product->is_promotional == 1)
                                        <div class="tab__price tab__price--old product--details__price">
                                            <span>Цена комплектации без скидки:</span>
                                            <span class="tab__price-old price--val--old">{{$modifiersOldPrice['total']}}</span><span> руб.*</span>
                                            <input type="hidden" name="Stella" class="elem-old-price stella__old-price" value="{{$modifiersOldPrice['Stella']}}">
                                            <input type="hidden" name="Tombstones" class="elem-old-price tombstones__old-price" value="{{$modifiersOldPrice['Tombstones']}}">
                                            <input type="hidden" name="Parterres" class="elem-old-price parterres__old-price" value="{{$modifiersOldPrice['Parterres']}}">
                                            <input type="hidden" name="Pedestals" class="elem-old-price pedestals__old-price" value="{{$modifiersOldPrice['Pedestals']}}">
                                        </div>
                                    @endif

                        {{--@dd($product->is_promotional)--}}
                                    <div class="tab__price product--details__price">
                                        <span>Цена текущей комплектации:</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} price--val">{{$product->actual_price}}</span><span> руб.*</span>
                                        <div class="tab__description tab__description--red">* - Стоимость благоустроства несет только ознакомительный харрактер, услуга по монтажу и благоустройству памятника оплачивается отдельно</div>
                                    </div>

                                    <ul class="tab__description">
                                        <li class="tab__description-item">
                                            В данном разделе вы можете выбрать комплектацию, размеры и материал элементов памятника.
                                        </li>
                                        <li class="tab__description-item">
                                            <span class="font-weight-bold">!Внимание:</span>
                                            изменения отразятся на общей цене и цене за отдельные элементы.
                                        </li>
                                        <li class="tab__description-item">
                                            <span class="font-weight-bold">!Внимание:</span>
                                            оттенок цвета товара может отличаться от картинки
                                        </li>

                                        <li class="tab__description-item tab__description-item--green">
                                            Гарантия на камень 5 лет
                                            <a class="tooltip" href="#">
                                                <span class="tooltiptext">Tooltip text</span>
                                            </a>
                                        </li>

                                        <li class="tab__description-item tab__description-item--green tab__description-item--storage">
                                            Хранение бесплатно 6 месяцев
                                            <a class="tooltip" href="#">
                                                <span class="tooltiptext">Tooltip text</span>
                                            </a>
                                        </li>

                                        <li class="tab__description-item tab__description-item--green tab__description-item--customer-service">
                                            Если испытываете затруднения при оформлении заказа онлайн, воспользуйтесь помощью консультанта
                                            <a class="tab__link" href="#"  data-fancybox="" data-src="#callback--modal">Заказать звонок</a>
                                        </li>
                                    </ul>
                                </div>

                                @if($product->subtype_id == 3 || $product->subtype_id == 7)
                                    @include('monument.layers.firstTabSarcophagus')
                                @else
                                    @include('monument.layers.firstTabSingle&Double')
                                @endif

                                <div class="tabs__next-step">
                                    <a class="tabs__next-step-link tab-header" data-tab="registration" href="#">Перейти к следующему шагу</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="registration">
                            <div class="card-wrap">
                                <div class="tab__info">
                                    <div class="tab__product-title">
                                        <span>{{$product->subtype->full_name}}</span>
                                        <span class="font-weight-normal">арт.:</span>
                                        <span>{{$product->product_code}}</span>
                                    </div>

                                    <div class="tab__price product--details__price">
                                        <span>Цена текущей комплектации:</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} price--val">{{$product->actual_price}}</span><span> руб.</span>
                                    </div>

                                    <!-- TODO Сейчас в виде теста установленна цена как за всю комплектацию -->
                                    <div class="tab__price tab__price--decor">
                                        <span>Цена текущего оформления:</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--decor">{{$product->actual_price}}</span><span> руб.</span>
                                    </div>

                                    <ul class="tab__description">
                                        <li class="tab__description-item">
                                            В данном разделе вы можете выбрать комплектацию, размеры и материал элементов памятника.
                                        </li>
                                        <li class="tab__description-item">
                                            <span class="font-weight-bold">!Внимание:</span>
                                            изменения отразятся на общей цене и цене за отдельные элементы.
                                        </li>
                                        <li class="tab__description-item">
                                            <span class="font-weight-bold">!Внимание:</span>
                                            оттенок цвета товара может отличаться от картинки
                                        </li>

                                        <li class="tab__description-item tab__description-item--green">
                                            Гарантия на камень 5 лет
                                            <a class="tooltip" href="#">
                                                <span class="tooltiptext">Tooltip text</span>
                                            </a>
                                        </li>

                                        <li class="tab__description-item tab__description-item--green tab__description-item--storage">
                                            Хранение бесплатно 6 месяцев
                                            <a class="tooltip" href="#">
                                                <span class="tooltiptext">Tooltip text</span>
                                            </a>
                                        </li>

                                        <li class="tab__description-item tab__description-item--green tab__description-item--customer-service">
                                            Если испытываете затруднения при оформлении заказа онлайн, воспользуйтесь помощью консультанта
                                            <a class="tab__link" href="#">Заказать звонок</a>
                                        </li>
                                    </ul>
                                </div>

                                @if($product->type_id == 1)
                                    @include('monument.layers.secondTabContentSingle')
                                @else
                                    @include('monument.layers.secondTabContentDouble')
                                @endif

                                <div class="tabs__next-step">
                                    <a class="tabs__next-step-link tab-header tab-disabled" data-tab="result" href="#">Перейти к следующему шагу</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab tab-result" id="result">
                            <div class="card-wrap">
                                <div class="tab__info">
                                    <div class="tab__product-title">
                                        <span>{{$product->subtype->full_name}}</span>
                                        <span class="font-weight-normal">арт.:</span>
                                        <span>{{$product->product_code}}</span>
                                    </div>

                                    @if($product->is_promotional == 1)
                                        <div class="tab__price tab__price--old product--details__price">
                                            <span>Цена комплектации без скидки:</span>
                                            <span class="tab__price-old price--val--old">{{$modifiersOldPrice['total']}}</span><span> руб.*</span>
                                        </div>
                                    @endif

                                    <div class="tab__price product--details__price">
                                        <span>Цена текущей комплектации:</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} price--val">{{$product->actual_price}}</span>
                                        <span> руб.*</span>
                                    </div>

                                    <!-- TODO Сейчас в виде теста установленна цена как за всю комплектацию -->
                                    <div class="tab__price tab__price--decor">
                                        <span>Цена текущего оформления:</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}}  tab__price-amount--decor">{{$product->actual_price}}</span>
                                        <span> руб.</span>
                                    </div>

                                    <div class="tab__price product--details__price tab__price--total">
                                        <span>Общая цена: </span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total price--val">{{$product->actual_price}}</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total"> + </span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total tab__price-amount--decor">{{$product->actual_price}}</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total"> = </span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total final--price">{{$product->actual_price}}</span>
                                        <span class="{{$product->is_promotional ? 'tab__price-amount' : 'tab__price-actual'}} tab__price-amount--total"> руб.*</span>
                                        <div class="tab__description tab__description--red">* - Стоимость благоустроства несет только ознакомительный харрактер, услуга по монтажу и благоустройству памятника оплачивается отдельно</div>
                                    </div>

                                    <div class="product--body__row product--btn-wrap d-flex ai-center mb-30 justify-start">
                                        <a id="submit_order" class="btn btn--pill bth--basket mr-20" href="#">Добавить в корзину</a>
                                        <a id="submit_fast_order" class="btn btn--pill bth--basket btn--border" href="#">Быстрый заказ</a>
                                    </div>

                                    <ul class="tab__description">
                                        <li class="tab__description-item tab__description-item--green tab__description-item--customer-service">
                                            Если испытываете затруднения при оформлении заказа онлайн, воспользуйтесь помощью консультанта
                                            <a class="tab__link" href="#">Заказать звонок</a>
                                        </li>

                                        <li class="tab__description-item tab__description-item--green tab__description-item--customer-service">
                                            Срок изготовления памятника до 1 месяца.  Срок изготовления саркофага
                                            <a class="tab__link" href="#">Заказать звонок</a>
                                        </li>
                                    </ul>
                                </div>
                                @if($product->subtype_id == 3 || $product->subtype_id == 7)
                                    @include('monument.layers.thirdTabSarcophagus')
                                @elseif($product->type_id == 1)
                                    @include('monument.layers.thirdTabContentSingle')
                                @else
                                    @include('monument.layers.thirdTabContentDouble')
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="custom--carousel">
            <div class="custom--carousel__nav">
                <div class="box">
                    <a class="custom--carousel__link custom--carousel__link--desktop" href="javascript:void0();">Описание</a>
                    <a class="custom--carousel__link custom--carousel__link--desktop" href="javascript:void0();">Доставка</a>
                    <a class="custom--carousel__link custom--carousel__link--desktop" href="javascript:void0();">Оплата</a>
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
                    <div class="custom--carousel__box w-100">
                        {{$product->description}}
                    </div>
                    <a class="custom--carousel__link custom--carousel__link--mobile" href="javascript:void0();">Доставка</a>
                    <div class="custom--carousel__box w-100">
                        {{$product->type->getInfo->first()->delivery ?? ''}}
                    </div>
                    <a class="custom--carousel__link custom--carousel__link--mobile" href="javascript:void0();">Оплата</a>
                    <div class="custom--carousel__box w-100">
                        {{$product->type->getInfo->first()->payment ?? ''}}
                    </div>
                </div>
            </div>
        </div>

        @include('recommendedCart.index')
    @endif

    @include('popups.beautificationImage')
    @include('popups.stellaImage')
    @include('popups.stellaImageRight')
    @include('popups.tombstoneImage')
    @include('popups.tombstoneImageRight')
    @include('popups.moreEngraving')
    @include('popups.moreMaterial')
    @include('popups.moreMedallion')
    @include('popups.moreText')
    @include('popups.quick-order')
@endsection



