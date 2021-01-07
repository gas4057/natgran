<div class="tabs-content">
    <h3 class="tab__title">Выберите оформление:</h3>
    <!-- Гравировка портрета / Медальон -->
    <div id="accordion-portrait" class="accordion accordion--no-img">
        <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
            <img class="accordion__title-img " src="{{URL::asset('assets/img/medallion.svg')}}" alt="...">
        </div>

        <div class="accordion__title">
            <p class="header--info__name header--info__name--no-img" id="portrait__name">
                Гравировка портрета / Медальон:
                <span class="elem-price">0</span>
                <span class="elem-currency">руб.</span>
            </p>
            <input type="hidden" name="portrait_price" value="">
        </div>
    </div>
    <div class="panel panel--white">
        <!-- Гравировка портрета -->
        <div class="engraving__params ajax__params mb-5">
            <div id="accordion-engraving"  class="sub-accordion accordion--no-img">
                <div id="engraving__name" class="accordion__title">
                    <p class="header--info__name header--info__name--no-img">
                        Гравировка портрета:
                        <span class="elem-price">0</span>
                        <span class="elem-currency">руб.</span>
                    </p>
                    <input type="hidden" name="engraving_price" value="0">
                    <input type="hidden" name="engraving_id" value="">
                </div>
            </div>
            <div class="panel">
                @if(!empty($engravingPortraitSize))
                    <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name product--row__name--full">
                            <span>Размеры:</span>
                        </div>

                        <div class="product--row__params product--row__params-100 engraving__size d-flex ai-center" data-dimension="engraving_size">
                            @foreach($engravingPortraitSize as $item)
                                {{--    {{$item->value}} id: {{$item->id}}--}}
                                {{--ожидаю ключ "portrait_size_id" --}}
                                <label class="product--row__label product--row__label--100 engraving__size-item d-flex ai-center justify-center" for="">
                                    <div class="engraving__size-link aviable" id="engraving_size-{{$item->id}}" data-type="engraving_size" data-element="engraving">
                                        <input id="engraving_size-input-{{$item->id}}" class="hide-input par--js" type="radio" name="engraving_size_id" value="{{$item->id}}">
                                        <p class="d-flex ai-center justify-center">{{$item->value}}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(!empty($engravingPortraitType))
                    <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name product--row__name--full">
                            <span>Вид гравировки:</span>
                            <a class="product__link" href="#" data-fancybox data-src="#more-engraving">Подробнее</a>
                        </div>

                        <div class="product--row__params product--row__params-100 engraving__size d-flex ai-center" data-dimension="engraving_form">
                            @foreach($engravingPortraitType as $item)
                                {{--    {{$item->value}} id: {{$item->id}}--}}
                                {{--ожидаю ключ "portrait_type_id" --}}
                                <label class="product--row__label product--row__label--50 engraving__size-item d-flex ai-center justify-center" for="">
                                    <div class="engraving__size-link aviable" id="engraving_form-{{$item->id}}" data-type="engraving_form" data-element="engraving">
                                        <input id="engraving_form-input-{{$item->id}}" class="hide-input par--js" type="radio" name="engraving_type_id" value="{{$item->id}}">
                                        <p class="d-flex ai-center justify-center">{{$item->value}}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>

        <!-- Медальон -->
        <div class="medallion__params ajax__params mb-0">
            <div id="accordion-medallion" class="sub-accordion accordion--no-img">
                <div id="medallion__name" class="accordion__title">
                    <p class="header--info__name header--info__name--no-img">
                        Медальон:
                        <span class="elem-price">0</span>
                        <span class="elem-currency">руб.</span>
                    </p>
                    <input type="hidden" name="medallion_price" value="0">
                    <input type="hidden" name="medallion_id" value="">
                </div>
            </div>
            <div class="panel">
                @if(!empty($medallionForm))
                    <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name product--row__name--full">
                            <span>Форма:</span>
                        </div>

                        <div class="product--row__params product--row__params-100 medallion__size d-flex ai-center" data-dimension="medallion_form">
                            @foreach($medallionForm as $item)
                                {{--    {{$item->value}} id: {{$item->id}}--}}
                                {{--ожидаю ключ "medallion_form_id" --}}
                                <label class="product--row__label product--row__label--33 medallion__size-item d-flex ai-center justify-center" for="">
                                    <div class="medallion__size-link aviable" id="medallion_form-{{$item->id}}" data-type="medallion_form" data-element="medallion">
                                        <input class="hide-input par--js" type="radio" name="medallion_form_id" value="{{$item->id}}">
                                        <p class="d-flex ai-center justify-center">{{$item->value}}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(!empty($medallionSize))
                    <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name product--row__name--full">
                            <span>Размеры:</span>
                        </div>

                        <div class="product--row__params product--row__params-100 medallion__size d-flex ai-center" data-dimension="medallion_size">
                            @foreach($medallionSize as $item)
                                {{--    {{$item->value}} id: {{$item->id}}--}}
                                {{--ожидаю ключ "medallion_form_id" --}}
                                <label class="product--row__label product--row__label--166 medallion__size-item d-flex ai-center justify-center" for="">
                                    <div class="medallion__size-link aviable" id="medallion_size-{{$item->id}}" data-type="medallion_size" data-element="medallion">
                                        <input class="hide-input par--js" type="radio" name="medallion_size_id" value="{{$item->id}}">
                                        <p class="d-flex ai-center justify-center">{{$item->value}}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(!empty($medallionMaterial))
                    <div class="product--body__row flex-wrap d-flex ai-center">
                        <div class="product--row__name product--row__name--full">
                            <span>Материал:</span>
                            <a class="product__link" href="#" data-fancybox data-src="#more-medallion">Подробнее</a>
                        </div>

                        <div class="product--row__params product--row__params-100 medallion__size d-flex ai-center" data-dimension="medallion_material">
                            @foreach($medallionMaterial as $item)
                                {{--    {{$item->value}} id: {{$item->id}}--}}
                                {{--ожидаю ключ "medallion_material_id" --}}
                                <label class="product--row__label product--row__label--33 medallion__size-item d-flex ai-center justify-center" for="">
                                    <div class="medallion__size-link aviable" id="medallion_material-{{$item->id}}" data-type="medallion_material" data-element="medallion">
                                        <input class="hide-input par--js" type="radio" name="medallion_material_id" value="{{$item->id}}">
                                        <p class="d-flex ai-center justify-center">{{$item->value}}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Фамилия Имя Отчество: -->
    <div class="initials__params ajax__params mt-10">
        <div id="accordion-initials" class="accordion accordion--no-img">
            <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
                <img class="accordion__title-img" src="{{URL::asset('/assets/img/surname.svg')}}" alt="...">
            </div>

            <div id="initials__name" class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Фамилия Имя Отчество:
                    <span class="elem-price">0</span>
                    <span class="elem-currency">руб.</span>
                </p>
                <input type="hidden" name="characters_price" value="{{$priceCharacters}}">
                <input type="hidden" name="initials_price" value="">

                <p class="header--info__params">
                    стоимость одного символа
                    <span class="price-char">{{$priceCharacters}}</span>
                    руб.
                </p>
            </div>
        </div>
        <div class="panel">
            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">Данные усопшего:</div>

                <div class="product--label__row product--label__row--name">

                    <label class="product--label-text-input" for="">
                        <span class="">Введите фамилию<sup class="red">*</sup></span>
                        <input class="initials-input product--text-input input-requared" type="text" data-element="initials" name="surname_left" id="surname_left" autocomplete="off">
                    </label>

                    <label class="product--label-text-input" for="">
                        <span class="">Введите имя<sup class="red">*</sup></span>
                        <input class="initials-input product--text-input input-requared" type="text" data-element="initials" name="name_left" id="name_left" autocomplete="off">
                    </label>

                    <label class="product--label-text-input" for="">
                        <span class="">Введите отчество<sup class="red">*</sup></span>
                        <input class="initials-input product--text-input input-requared" type="text" data-element="initials" name="patronymic_left" id="patronymic_left" autocomplete="off">
                    </label>
                </div>
            </div>

            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">
                    Цвет:
                    <a class="product__link" href="#" data-fancybox data-src="#more-text">Подробнее</a>
                </div>


                <div class="product--row__params product--row__params-100 color__size d-flex ai-center" data-dimension="initials_form">
                    @foreach($colorsForText as $item)
                        <label class="product--row__label product--row__label--50 color__size-item d-flex ai-center justify-center" for="">
                            <div class="color__size-link aviable" id="initials_form-{{$item->id}}" data-type="initials_form" data-price="{{$item->price}}" data-element="initials">
                                <input class="hide-input par--js" type="radio" name="name_color_id" value="{{$item->id}}">
                                <p class="d-flex ai-center justify-center">{{$item->color}}</p>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <!-- Памятные даты: -->
    <div class="date__params ajax__params mt-10">
        <div id="accordion-memorable-dates" class="accordion accordion--no-img">
            <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
                <img class="accordion__title-img" src="{{URL::asset('assets/img/date.svg')}}" alt="...">
            </div>

            <div id="date__name" class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Памятные даты:
                    <span class="elem-price">0</span>
                    <span class="elem-currency">руб.</span>
                </p>
                 <!-- TODO: по дефолту нужно устанавливать цену первой краски (сейчас это белая) -->
                <input type="hidden" name="characters_price" value="{{$priceCharacters}}">
                <input type="hidden" name="date_price" value="">

                <p class="header--info__params">
                    стоимость одного символа
                    <span class="price-char">{{$priceCharacters}}</span>
                    руб.
                </p>
            </div>
        </div>
        <div class="panel">
            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">
                    Памятные даты
                    <span class="product--stella-name product--stella-name--left">
                        (<span class="surname_left">Фамилия</span>
                        <span class="name_left">Имя</span>
                        <span class="patronymic_left">Отчество</span>)
                    </span>
                    <span class="colon">:</span>
                </div>

                <div class="product--label__row justify-start flex-wrap">
                    <label class="product--label-text-input product--label-text-input--flex flex-wrap flex-0-0-a" for="">
                        <span class="product--span-date mr-10">Дата рождения<sup class="red">*</sup>:</span>
                        <input id="left_date_of_birth"
                            type='datable'
                            data-datable-divider="."
                            data-datable="ddmmyyyy"
                            data-element="date"
                            class='product--text-input date-input datepicker-here input-requared input-date-requared'
                            name="left_date_of_birth"
                            placeholder="ДД.ММ.ГГГГ"
                            autocomplete="off"/>
                    </label>

                    <label class="product--label-text-input product--label-text-input--flex flex-wrap flex-0-0-a" for="">
                        <span class="product--span-date mr-10">Дата смерти<sup class="red">*</sup>:</span>
                        <input id="left_date_of_die"
                            type='datable'
                            data-datable-divider="."
                            data-datable="ddmmyyyy"
                            data-element="date"
                            class='product--text-input date-input datepicker-here input-requared input-date-requared'
                            name="left_date_of_die"
                            placeholder="ДД.ММ.ГГГГ"
                            autocomplete="off"/>
                    </label>
                </div>
            </div>

            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">
                    Цвет:
                    <a class="product__link" href="#" data-fancybox data-src="#more-text">Подробнее</a>
                </div>

                <div class="product--body__row flex-wrap d-flex ai-center">

                    <div class="product--row__params product--row__params-100 color__size d-flex ai-center" data-dimension="date_form">
                        @foreach($colorsForText as $item)
                            <label class="product--row__label product--row__label--50 color__size-item d-flex ai-center justify-center" for="">
                                <div class="color__size-link aviable" id="date_form-{{$item->id}}" data-type="date_form" data-price="{{$item->price}}" data-element="date">
                                    <input class="hide-input par--js" type="radio" name="dates_color_id" value="{{$item->id}}">
                                    <p class="d-flex ai-center justify-center">{{$item->color}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Текст эпитафия -->
    <div class="epitaph__params ajax__params mt-10">
        <div id="accordion-epitaph" class="accordion accordion--no-img">
            <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
                <img class="accordion__title-img" src="{{URL::asset('assets/img/epitaph.svg')}}" alt="...">
            </div>

            <div id="epitaph__name" class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Текст эпитафия:
                    <span class="elem-price">0</span>
                    <span class="elem-currency">руб.</span>
                </p>

                <input type="hidden" name="characters_price" value="0">
                <input type="hidden" name="epitaph_price" value="">

                <p class="header--info__params">
                    стоимость одного символа
                    <span class="price-char">0</span>
                    руб.
                </p>
            </div>
        </div>
        <div class="panel">
            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">Эпитафия на тумбу:</div>

                <label class="product--label-text-input" for="">
                    <span class="">Введите текст</span>
                    <textarea id="on_pedestal_epitaph" name="on_pedestal_epitaph" class="product--text-input product--text-input--textarea epitaph-input" data-element="epitaph" ></textarea>
                </label>
            </div>

            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">
                    Эпитафия на надгробье
                    <span class="product--stella-name product--stella-name--left">
                        (<span class="surname_left">Фамилия</span>
                        <span class="name_left">Имя</span>
                        <span class="patronymic_left">Отчество</span>)
                    </span>
                    <span class="colon">:</span>
                </div>

                <label class="product--label-text-input" for="">
                    <span class="">Введите текст</span>
                    <textarea id="left_epitaph" name="left_epitaph" class="product--text-input product--text-input--textarea epitaph-input" data-element="epitaph"></textarea>
                </label>
            </div>

            <div class="product--body__row flex-wrap d-flex ai-center">
                <div class="product--row__name  product--row__name--full">
                    Цвет:
                    <a class="product__link" href="#" data-fancybox data-src="#more-text">Подробнее</a>
                </div>

                <div class="product--body__row flex-wrap d-flex ai-center">

                    <div class="product--row__params product--row__params-100 color__size d-flex ai-center" data-dimension="epitaph_form">
                        @foreach($colorsForText as $item)
                            <label class="product--row__label product--row__label--50 color__size-item d-flex ai-center justify-center" for="">
                                <div class="color__size-link aviable" id="epitaph_form-{{$item->id}}" data-type="epitaph_form" data-price="{{$item->price}}" data-element="epitaph">
                                    <input class="hide-input par--js" type="radio" name="epitaph_color_id" value="{{$item->id}}">
                                    <p class="d-flex ai-center justify-center">{{$item->color}}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Рисунок на стелу -->
    <div class="stella_image__params ajax__params mt-10">
        <div id="accordion-stella-drawing" class="accordion accordion--no-img">
            <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
                <img class="accordion__title-img" src="{{URL::asset('assets/img/epitaph.svg')}}" alt="...">
            </div>

            <div id="stella_image__name" class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Рисунок на стелу:
                    <span class="elem-price">0</span>
                    <span class="elem-currency">руб.</span>
                </p>

                <input type="hidden" name="stella_image_price" value="0">
                <input type="hidden" name="stella_image-left_price" value="0">
                <input type="hidden" name="stella_image-right_price" value="0">

                <p class="header--info__params">
                    стоимость одного крестика
                    <span class="left-price">0</span>
                    руб.
                </p>
            </div>
        </div>
        <div class="panel panel--px-0">
            <!-- лево -->
            <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-10">
                <div class="product--row__name  product--row__name--full">
                    Рисунок на стелу
                    <span class="product--stella-name product--stella-name--left">
                        (<span class="surname_left">Фамилия</span>
                        <span class="name_left">Имя</span>
                        <span class="patronymic_left">Отчество</span>)
                    </span>
                    <span class="colon">:</span>
                </div>

                @if($imgTypesStella)
                <label class="product--row__label product--row__label--50 stele__size-link--link product--row__label--link stele__size-item d-flex ai-center justify-center p-relative px-0" for="">
                    <select class="stele__size-select aviable" name="stella_image-img-left-select" id="stella_image-img-left-select">
                        <option value="stella_image-img-left-select-item">Все кресты</option>
                    @foreach($imgTypesStella as $type)
                        <option value="stella_image-img-left-select-{{$type->slug}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </label>
                    @endif
            </div>

            @if($arStellaImages)
            <div class="modal--material product--body__row stella_image-img-left image__size flex-wrap d-flex ai-center mb-18 px-5">
                @foreach($arStellaImages as $key=>$stellaImages)
                    @foreach($stellaImages as $stellaImage)
                        @if($loop->iteration <7)
                        <label class="product--row__label product--row__50 product--row__label--material
                        product--row__label--h200 image__size-item stella_image__size-item d-flex ai-center justify-center
                        stella_image-img-left-select-item stella_image-img-left-select-{{$key}} px-5" for="">
                            <div class="stella_image__size-link stele__size-link image__size-link stele__size-link--img stele__size-link--img-big
                             stele__size-link--big-circle aviable" id="material-2"
                                 data-position="left" data-element="stella_image"
                                 data-description="Тестовое описание - 2" data-price="20">
                                <input class="hide-input par--js" type="radio" name="left_stella_image_id"
                                       value="{{$stellaImage->id}}">
                                <img class="stele__size-img stele__size-img--contain"
                                src="{{$stellaImage->image ?  Storage::url($stellaImage->image)  : URL::asset('assets/img/test-1.jpg')}}"
                                alt="...">
                            </div>
                            <a href="{{$stellaImage->image ?  Storage::url($stellaImage->image)  : URL::asset('assets/img/test-1.jpg')}}" data-fancybox="images" class="img-popup"></a>
                        </label>
                        @endif
                    @endforeach
                @endforeach

                <div class="col-100 px-5">
                    <a class="product__link product__link--big" href="#" data-fancybox data-src="#more-stella_image">Показать еще кресты</a>
                </div>
            </div>
            @endif
            <div class="product--body__row stella_image-color-left flex-wrap d-flex ai-center mb-18 px-10">
                <div class="product--row__name  product--row__name--full">
                    Цвет:
                    <a class="product__link" href="#" data-fancybox data-src="#more-text">Подробнее</a>
                </div>

                <div class="product--row__params product--row__params-100 color__size d-flex ai-center" data-dimension="stella_image_form">
                    @foreach($colorsForText as $item)
                        @if($loop->iteration <3)
                        <label class="product--row__label product--row__label--50 color__size-item d-flex ai-center justify-center" for="">
                            <div class="color__size-link aviable" id="stella_image_form-{{$item->id}}" data-position="left" data-price="{{$item->price}}" data-element="stella_image">
                                <input class="hide-input par--js" type="radio" name="left_stella_color_id" value="{{$item->id}}">
                                <p class="d-flex ai-center justify-center">{{$item->color}}</p>
                            </div>
                        </label>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- Рисунок на надгробную плиту -->
    <div class="tombstone_image__params ajax__params mt-10">
        <div id="accordion-tombstone-drawing" class="accordion accordion--no-img">

            <div class="accordion__title-img-wrap accordion__title-img-wrap--registration">
                <img class="accordion__title-img" src="{{URL::asset('assets/img/epitaph.svg')}}" alt="...">
            </div>

            <div id="tombstone_image__name" class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="tombstone__name">
                    Рисунок на надгробную плиту:
                    <span class="elem-price">0</span>
                    <span class="elem-currency">руб.</span>
                </p>

                <input type="hidden" name="tombstone_image_price" value="0">
                <input type="hidden" name="tombstone_image-left_price" value="0">
                <input type="hidden" name="tombstone_image-right_price" value="0">

                <p class="header--info__params">
                    стоимость одного рисунка
                    <span class="left-price">0</span>
                    руб.
                </p>
            </div>
        </div>
        <div class="panel panel--px-0">

            <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-10">
                <div class="product--row__name  product--row__name--full">
                    Выберите рисунок на надгробную плиту
                    <span class="product--stella-name product--stella-name--left">
                        (<span class="surname_left">Фамилия</span>
                        <span class="name_left">Имя</span>
                        <span class="patronymic_left">Отчество</span>)
                    </span>
                    <span class="colon">:</span>
                </div>

                @if($imgTypesTombstone)
                <label class="product--row__label product--row__label--50 stele__size-link--link product--row__label--link stele__size-item d-flex ai-center justify-center p-relative px-0" for="">
                    <select class="stele__size-select aviable" name="tombstones_image-img-left-select" id="tombstones_image-img-left-select">
                        <option value="tombstones_image-img-left-select-item">Все рисунки</option>
                        @foreach($imgTypesTombstone as $type)
                            <option value="tombstones_image-img-left-select-{{$type->slug}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </label>
                @endif
            </div>

            @if($arTombstoneImages)
            <div class="modal--material product--body__row tombstone_image-img-left image__size flex-wrap d-flex ai-center mb-18 px-5">
                @foreach($arTombstoneImages as $key=>$tombstoneImages)
                    @foreach($tombstoneImages as $tombstoneImage)
                        @if($loop->iteration <7)
                            <label class="product--row__label product--row__label--material
                             product--row__50 product--row__label--h200 image__size-item
                             tombstone_image__size-item d-flex ai-center justify-center px-5 tombstones_image-img-left-select-item
                             tombstones_image-img-left-select-{{$key}}" for="">
                        <div class="tombstone_image__size-link stele__size-link image__size-link stele__size-link--img-big
                         stele__size-link--img stele__size-link--big-circle aviable"
                             id="material-1" data-position="left" data-element="tombstone_image"
                             data-description="Тестовое описание - 1" data-price="10">
                            <input class="hide-input par--js" type="radio"
                                   name="left_tombstone_image_id" value="{{$tombstoneImage->id}}">
                            <img class="stele__size-img stele__size-img--contain" src="{{$tombstoneImage->image ?  Storage::url($tombstoneImage->image)  : URL::asset('assets/img/test-1.jpg')}}" alt="...">
                        </div>
                        <a href="{{$tombstoneImage->image ?  Storage::url($tombstoneImage->image)  : URL::asset('assets/img/test-1.jpg')}}" data-fancybox="images" class="img-popup"></a>
                    </label>
                        @endif
                    @endforeach
                @endforeach
                <div class="col-100 px-5">
                    <a class="product__link product__link--big" href="#" data-fancybox data-src="#more-tombstone_image">Показать еще рисунки</a>
                </div>
            </div>
            @endif
            <div class="product--body__row tombstone_image-color-left flex-wrap d-flex ai-center mb-18 px-10">
                <div class="product--row__name  product--row__name--full">
                    Цвет:
                    <a class="product__link" href="#" data-fancybox data-src="#more-text">Подробнее</a>
                </div>

                <div class="product--row__params product--row__params-100 color__size d-flex ai-center" data-dimension="tombstone_image_form">
                    @foreach($colorsForText as $item)
                        @if($loop->iteration <3)
                        <label class="product--row__label product--row__label--50 color__size-item d-flex ai-center justify-center" for="">
                            <div class="color__size-link aviable" id="tombstone_image_form-{{$item->id}}" data-position="left" data-price="{{$item->price}}" data-element="tombstone_image">
                                <input class="hide-input par--js" type="radio" name="left_tombstone_color_id" value="{{$item->id}}">
                                <p class="d-flex ai-center justify-center">{{$item->color}}</p>
                            </div>
                        </label>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
