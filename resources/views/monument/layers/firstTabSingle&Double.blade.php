<div class="tabs-content">
    <h3 class="tab__title">Выберите комплектацию:</h3>
    <!-- стелла -->
    @if(!empty($stella))
        <div class="stella__params ajax__params">
            <div id="accordion-stella" class="accordion product--tab__header active-acc">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-stella.svg')}}" alt="...">
                </div>

                <div class="accordion__title">
                    <p class="header--info__name" id="stella__name">
                        Стелла:
                        <span class="elem-price">{{$total_price['Stella'] ?? 'EMPTY' }}</span>
                        <span class="elem-currency">руб.</span>
                    </p>

                    @if(!empty($stella['first']))
                        <p class="header--info__params">
                            высота
                            <span class="stella--height">{{$stella['first']['height']}}, </span>
                            ширина
                            <span class="stella--width">{{$stella['first']['width']}}, </span>
                            толщина
                            <span class="stella--thickness">{{$stella['first']['thickness']}}</span>
                        </p>
                    @endif
                    <input type="hidden" name="stella_price" value="{{$total_price['Stella'] ?? 'EMPTY'}}">

                    <input type="hidden" class="stella_id" value="{{$stella['first']['id'] ?? 'EMPTY'}}">
                </div>

                <p class="header--info__material">
                    <img class="stella--material preview--material" src="#" alt="...">
                </p>
            </div>
            <div class="panel open">
                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Высота:</div>

                    <div class="product--row__params stele__size d-flex ai-center" data-dimension="material">
                        @foreach($stella['height'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="height-{{$item['height']}}" data-type="height" data-element="stella">
                                    <input class="hide-input par--js" type="radio" name="height" value="{{$item['height']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['height']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Ширина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($stella['width'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="width-{{$item['width']}}" data-type="width" data-element="stella">
                                    <input class="hide-input par--js" type="radio" name="width" value="{{$item['width']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['width']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Толщина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($stella['thickness'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="thickness-{{$item['thickness']}}" data-type="thickness" data-element="stella">
                                    <input class="hide-input par--js" type="radio" name="thickness" value="{{$item['thickness']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['thickness']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row product--body__row--material d-flex ai-center">
                    <div class="product--row__name product--row__name--material">
                        <span>Материал:</span>
                        <a class="product__link" href="#" data-fancybox data-src="#more-material">Подробнее</a>
                    </div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($modifierMaterials as $item)
                            <div class="product--row__label--material">
                                <label class="product--row__label stele__size-item d-flex ai-center justify-center tray__swatch material-popover"  data-model="stella" for="">
                                    <div class="stele__size-link stele__size-link--img aviable" id="material-{{$item['id']}}" data-type="material" data-element="stella">
                                        <input class="hide-input par--js" type="radio" name="material" value="{{$item['id']}}">
                                        <img class="stele__size-img"  src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                    </div>
                                </label>
                                <div class="popover-content">
                                {{$item->name}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- тумба -->
    @if(!empty($pedestal))
        <div class="pedestals__params ajax__params">
            <div id="accordion-pedestal" class="accordion product--tab__header">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-pedestal.svg')}}" alt="...">
                </div>

                <div class="accordion__title">
                    <p class="header--info__name" id="pedestals__name">
                        Тумба:
                        <span class="elem-price">{{$total_price['Pedestals']  ?? ''}}</span>
                        <span class="elem-currency">руб.</span>
                    </p>

                    @if(!empty($pedestal['first']))
                    <p class="header--info__params">
                        ширина 
                        <span class="pedestals--height">{{$pedestal['first']['height']}}, </span>
                        высота
                        <span class="pedestals--width">{{$pedestal['first']['width']}}, </span>
                        толщина
                        <span class="pedestals--thickness">{{$pedestal['first']['thickness']}}</span>
                    </p>
                    @endif
                    <input type="hidden" name="pedestals_price" value="{{$total_price['Pedestals'] ?? ''}}">
                    <input type="hidden" class="pedestals_id" value="{{$pedestal['first']['id'] ?? 'EMPTY'}}">
                </div>

                <p class="header--info__material">
                    <img class="pedestals--material preview--material" src="#" alt="...">
                </p>
            </div>
            <div class="panel">
                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Ширина:</div>

                    <div class="product--row__params stele__size d-flex ai-center">
                        @foreach($pedestal['height'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="height-{{$item['height']}}" data-type="height" data-element="pedestals">
                                    <input class="hide-input par--js" type="radio" name="height" value="{{$item['height']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['height']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Высота:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($pedestal['width'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="width-{{$item['width']}}" data-type="width" data-element="pedestals">
                                    <input class="hide-input par--js" type="radio" name="width" value="{{$item['width']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['width']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Толщина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($pedestal['thickness'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="thickness-{{$item['thickness']}}" data-type="thickness" data-element="pedestals">
                                    <input class="hide-input par--js" type="radio" name="thickness" value="{{$item['thickness']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['thickness']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row product--body__row--material d-flex ai-center">
                    <div class="product--row__name product--row__name--material">
                        <span>Материал:</span>
                        <a class="product__link" href="#" data-fancybox data-src="#more-material">Подробнее</a>
                    </div>
                    <div class="product--row__params d-flex ai-center stele__size">

                        @foreach($modifierMaterials as $item)
                        <div class="product--row__label--material">
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center tray__swatch material-popover"  data-model="pedestals" for=""><!--pedestal т.к. в моем скрипте он так называется-->
                                <div class="stele__size-link stele__size-link--img aviable" id="material-{{$item['id']}}" data-type="material" data-element="pedestals">
                                    <input class="hide-input par--js" type="radio" name="material" value="{{$item['id']}}">
                                    <img class="stele__size-img"  src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                    <!-- Замечание: Нужно предавать абсолютный src, т.к. может измениться адресс Img  -->
                                <!-- <img class="stele__size-img" src="{{$item->image}}"> -->
                                </div>
                            </label>
                            <div class="popover-content">
                                {{$item->name}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- цветник -->
    @if(!empty($parterre))
        <div class="parterres__params ajax__params">
            <div id="accordion-parterre" class="accordion product--tab__header">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-parterres.svg')}}" alt="...">
                </div>

                <div class="accordion__title">
                    <p class="header--info__name" id="parterres__name">
                        Цветник:
                        <span class="elem-price">{{$total_price['Parterres'] ?? ''}}</span>
                        <span class="elem-currency">руб.</span>
                    </p>
                    @if(!empty($parterre['first']))
                    <p class="header--info__params">
                        высота
                        <span class="parterres--height">{{$parterre['first']['height']}}, </span>
                        ширина
                        <span class="parterres--width">{{$parterre['first']['width']}}, </span>
                        толщина
                        <span class="parterres--thickness">{{$parterre['first']['thickness_size']}}</span>
                    </p>
                    @endif
                    <!-- здесь хранится цена объекта-->
                    <input type="hidden" name="parterres_price" value="{{$total_price['Parterres']  ?? ''}}">
                    <!-- объект на сцене-->
                    <input type="hidden" name="parterres_is_remove" value="false">
                    <input type="hidden" class="parterres_id" value="{{$parterre['first']['id'] ?? 'EMPTY'}}">
                </div>

                <p class="header--info__material">
                    <img class="parterres--material preview--material" src="#" alt="...">
                </p>
            </div>
            <div class="panel">

            <!-- TODO: закоментировано для доработки, т.к. этого не было в изначальном договоре -->
                {{--@if($product->type_id != 1) --}}
                    <!-- <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name  product--row__name--full">
                            Положение цветника:
                        </div>

                        <div class="product--row__params product--row__params-100 position__size stele__size d-flex ai-center" data-dimension="position_form">
                            <label class="product--row__label product--row__label--50 position__size-item stele__size-item d-flex ai-center justify-center" for="">
                                <div class="position__size-link stele__size-link aviable" id="parterres_position_horizontally" data-type="position" data-price="1" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="parterres_position" value="horizontally">
                                    <p class="d-flex ai-center justify-center">Горизонтально</p>
                                </div>
                            </label>

                            <label class="product--row__label product--row__label--50 position__size-item stele__size-item d-flex ai-center justify-center" for="">
                                <div class="position__size-link stele__size-link aviable" id="parterres_position_vertically" data-type="position" data-price="2" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="parterres_position" value="vertically">
                                    <p class="d-flex ai-center justify-center">Вертикально</p>
                                </div>
                            </label>
                        </div>
                    </div> -->
                {{--@endif--}}

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Высота:</div>

                    <div class="product--row__params stele__size d-flex ai-center">
                        @foreach($parterre['height'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="height-{{$item['height']}}" data-type="height" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="height" value="{{$item['height']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['height']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Ширина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($parterre['width'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="width-{{$item['width']}}" data-type="width" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="width" value="{{$item['width']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['width']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Толщина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($parterre['thickness'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="thickness-{{$item['thickness_size']}}" data-type="thickness" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="thickness" value="{{$item['thickness_size']}}"
                                           data-val="{{$item['thickness_size']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['thickness_size']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row product--body__row--material d-flex ai-center">
                    <div class="product--row__name product--row__name--material">
                        <span>Материал:</span>
                        <a class="product__link" href="#" data-fancybox data-src="#more-material">Подробнее</a>
                    </div>
                    <div class="product--row__params d-flex ai-center stele__size">

                        @foreach($modifierMaterials as $item)
                        <div class="product--row__label--material">
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center tray__swatch material-popover"  data-model="parterres" for="">
                                <div class="stele__size-link stele__size-link--img aviable" id="material-{{$item['id']}}" data-type="material" data-element="parterres">
                                    <input class="hide-input par--js" type="radio" name="material" value="{{$item['id']}}">
                                    <img class="stele__size-img"  src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                    <!-- Замечание: Нужно предавать абсолютный src, т.к. может измениться адресс Img  -->
                                <!-- <img class="stele__size-img" src="{{$item->image}}"> -->
                                </div>
                            </label>
                            <div class="popover-content">
                                {{$item->name}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name product--row__name--empty"></div>
                    <div class="product--row__params product--row__params-100 d-flex ai-center stele__size">
                        <label class="stele__size-item w-100" for="">
                            <div class="stele__size-link stele__size-link--toggle aviable" data-type="is_remove" data-element="parterres">
                                <input class="hide-input par--js parterres-remove-input" type="checkbox" name="is_remove" value="false">
                                <p id="toggle-parterres" class="remove-parterres">
                                    <span class="parterres-rem-toggle">Убрать </span>
                                    <span class="parterres-add-toggle">Добавить </span>
                                    цветник
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- Надгробная плита -->
    @if(!empty($tombstone))
        <div class="tombstones__params ajax__params">
            <div id="accordion-tombstone" class="accordion product--tab__header">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-tombstones.svg')}}" alt="...">
                </div>

                <div class="accordion__title">
                    <p class="header--info__name" id="tombstones__name">
                        Надгробная плита:
                        <span class="elem-price">{{$total_price['Tombstones'] ?? ''}}</span>
                        <span class="elem-currency">руб.</span>
                    </p>
                    @if(!empty($tombstone['first']))
                    <p class="header--info__params">
                        высота
                        <span class="tombstones--height">{{$tombstone['first']['height']}}, </span>
                        ширина
                        <span class="tombstones--width">{{$tombstone['first']['width']}}, </span>
                        толщина
                        <span class="tombstones--thickness">{{$tombstone['first']['thickness']}}</span>
                    </p>
                    @endif
                    <input type="hidden" name="tombstones_price" value="{{$total_price['Tombstones']  ?? ''}}">
                    <input type="hidden" name="tombstones_is_remove" value="false">
                    <input type="hidden" class="tombstones_id" value="{{$tombstone['first']['id'] ?? 'EMPTY'}}">
                </div>

                <p class="header--info__material">
                    <img class="tombstones--material preview--material" src="#" alt="...">
                </p>
            </div>
            <div class="panel">

                <!-- TODO: закоментировано для доработки, т.к. этого не было в изначальном договоре -->
                {{--@if($product->type_id != 1)--}}
                    <!-- <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name  product--row__name--full">
                            Положение Надгробной плиты:
                        </div>

                        <div class="product--row__params product--row__params-100 position__size stele__size d-flex ai-center" data-dimension="position_form">
                            <label class="product--row__label product--row__label--50 position__size-item stele__size-item d-flex ai-center justify-center" for="">
                                <div class="position__size-link stele__size-link aviable" id="tombstones_position_horizontally" data-type="position" data-price="1" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="tombstones_position" value="horizontally">
                                    <p class="d-flex ai-center justify-center">Горизонтально</p>
                                </div>
                            </label>

                            <label class="product--row__label product--row__label--50 position__size-item stele__size-item d-flex ai-center justify-center" for="">
                                <div class="position__size-link stele__size-link aviable" id="tombstones_position_vertically" data-type="position" data-price="2" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="tombstones_position" value="vertically">
                                    <p class="d-flex ai-center justify-center">Вертикально</p>
                                </div>
                            </label>
                        </div>
                    </div> -->
                {{--@endif--}}
                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Высота:</div>

                    <div class="product--row__params stele__size d-flex ai-center">
                        @foreach($tombstone['height'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="height-{{$item['height']}}" data-type="height" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="height" value="{{$item['height']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['height']}}</p>
                                </div>
                            </label>
                        @endforeach

                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Ширина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($tombstone['width'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="width-{{$item['width']}}" data-type="width" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="width" value="{{$item['width']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['width']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name">Толщина:</div>
                    <div class="product--row__params d-flex ai-center stele__size">
                        @foreach($tombstone['thickness'] as $item)
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center" for="">
                                <div class="stele__size-link aviable" id="thickness-{{$item['thickness']}}" data-type="thickness" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="thickness" value="{{$item['thickness']}}">
                                    <p class="d-flex ai-center justify-center">{{$item['thickness']}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row product--body__row--material d-flex ai-center">
                    <div class="product--row__name product--row__name--material">
                        <span>Материал:</span>
                        <a class="product__link" href="#" data-fancybox data-src="#more-material">Подробнее</a>
                    </div>
                    <div class="product--row__params d-flex ai-center stele__size">

                        @foreach($modifierMaterials as $item)
                        <div class="product--row__label--material">
                            <label class="product--row__label stele__size-item d-flex ai-center justify-center tray__swatch material-popover"  data-model="tombstones" for=""><!--plate т.к. в моем скрипте он так называется-->
                                <div class="stele__size-link stele__size-link--img aviable" id="material-{{$item['id']}}" data-type="material" data-element="tombstones">
                                    <input class="hide-input par--js" type="radio" name="material" value="{{$item['id']}}">
                                    <img class="stele__size-img"  src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                    <!-- Замечание: Нужно предавать абсолютный src, т.к. может измениться адресс Img  -->
                                <!-- <img class="stele__size-img" src="{{$item->image}}"> -->
                                </div>
                            </label>
                            <div class="popover-content">
                                {{$item->name}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="product--body__row d-flex ai-center">
                    <div class="product--row__name product--row__name--empty"></div>
                    <div class="product--row__params product--row__params-100 d-flex ai-center stele__size">
                        <label class="stele__size-item w-100" for="">
                            <div class="stele__size-link stele__size-link--toggle aviable" data-type="is_remove" data-element="tombstones">
                                <input class="hide-input par--js tombstones-remove-input" type="checkbox" name="is_remove" value="false">
                                <p id="toggle-tombstones" class="remove-tombstones">
                                    <span class="tombstones-rem-toggle">Убрать </span>
                                    <span class="tombstones-add-toggle">Добавить </span>
                                    надгробную плиту
                                </p>
                            </div>
                        </label>
                    </div>
                </div>

            </div>
        </div>
    @endif

<!-- благоустройство -->
    @if($beautification != null)
        <div class="beautification__params">
            <div id="accordion-tombstone" class="accordion product--tab__header">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-beautification.svg')}}" alt="...">
                </div>

                <div class="accordion__title">
                    <p class="header--info__name" id="beautification__name">
                        Благоустройство:
                        <!-- TODO проверить после обновления получение цен-->
                        <span class="elem-price">{{$total_price['Beautification'] ?? '0'}}</span>
                        <span class="elem-currency">руб.</span>
                    </p>

                    <p class="header--info__params">

                    </p>
                    <!-- стоимость благоустройства -->
                    <input type="hidden" name="beautification_price" value="{{$total_price['Beautification']  ?? '0'}}">
                    <!-- есть благоустройство или нет -->
                    <input type="hidden" name="beautification_is_remove" value="true">
                </div>
            </div>
            <div class="panel panel--px-0">

                <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-10">

{{--                    <label class="product--row__label product--row__label--50 stele__size-link--link product--row__label--link stele__size-item d-flex ai-center justify-center p-relative px-0" for="">--}}
{{--                        <select class="stele__size-select aviable" name="beautification-select" id="beautification-select">--}}
{{--                            <option value="beautification-select-item">Все варианты благоустройства</option>--}}
{{--                            <option value="beautification-select-fences">Ограды</option>--}}
{{--                            <option value="beautification-select-tile">Плитка</option>--}}
{{--                            <option value="beautification-select-foundation">Фундамент</option>--}}
{{--                        </select>--}}
{{--                    </label>--}}
                </div>

                <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-5">
                    <div class="product--row__params product--row__params-100 modal--material d-flex ai-center stele__size">
                        @foreach($beautification as $item)
                            @if($loop->iteration <6)
                            <label class="product--row__label product--row__label--material product--row__50 product--row__label--h200 modal__size-item d-flex ai-center justify-center px-5 beautification-select-item beautification-select-foundation" for="">
                                <div class="stele__size-link stele__size-link--img stele__size-link--img-big stele__size-link--big-circle aviable" id="beautification-{{$item['id']}}" data-type="beautification" data-element="beautification">
                                    <input class="hide-input par--js" type="radio" name="beautification_id" value="{{$item['id']}}" data-price="{{$item['price']}}" data-description="{{$item['description']}}">
                                    <img class="stele__size-img stele__size-img--contain accordion__title-img" src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                </div>
                                <a href="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}" data-fancybox="images" class="img-popup"></a>
                            </label>
                            {{--ожидаю ключ "beautification_id" --}}
                            @endif
                        @endforeach
                    </div>
                    <div class="col-100 px-5">
                        <a class="product__link product__link--big" href="#" data-fancybox data-src="#more-beautification">Показать еще варианты благоустройства</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
