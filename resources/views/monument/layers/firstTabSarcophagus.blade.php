<div class="tabs-content">
        <!-- стелла -->

        <div class="sarcophagus__params ajax__params">
            <div id="accordion-sarcophagus" class="accordion accordion--sarcophagus product--tab__header active-acc">

                <div class="accordion__title">
                    <p class="header--info__name" id="sarcophagus__name">
                        Характеристики:
                    </p>

                    <input type="hidden" name="sarcophagus_price" value="{{$product->actual_price}}">
                </div>

            </div>
            <div class="panel panel--sarcophagus panel--px-0 open">
                <ul class="sarcophagus__props">
                    <li class="sarcophagus__prop">
                        <div class="sarcophagus__prop-name">Тип</div>
                        <div class="sarcophagus__prop-value">{{$product->type->name ?? 'Одиночный комплекс'}}</div>
                    </li>
                    <li class="sarcophagus__prop">
                        <div class="sarcophagus__prop-name">Материал</div>
                        <div class="sarcophagus__prop-value">{{$product->material->name ?? 'Габбро-диабаз/дымовский гранит'}}</div>
                    </li>
                    <li class="sarcophagus__prop">
                        <div class="sarcophagus__prop-name">Размер</div>
                        <div class="sarcophagus__prop-value">{{$product->size ?? '250x250x250'}}</div>
                    </li>
                    <li class="sarcophagus__prop">
                        <div class="sarcophagus__prop-name">Вес</div>
                        <div class="sarcophagus__prop-value">{{$product->weight ?? '150 кг'}}.</div>
                    </li>
                </ul>
            </div>
        </div>

    <h3 class="tab__title">Выберите комплектацию:</h3>

<!-- благоустройство -->
    @if($beautification != null)
        <div class="beautification__params">
            <div id="accordion-tombstone" class="accordion product--tab__header">
                <div class="accordion__title-img-wrap">
                    <img class="accordion__title-img" src="{{URL::asset('assets/img/accordion-title-img.png')}}" alt="...">
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

{{--                <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-10">--}}

{{--                    <label class="product--row__label product--row__label--50 stele__size-link--link product--row__label--link stele__size-item d-flex ai-center justify-center p-relative px-0" for="">--}}
{{--                        <select class="stele__size-select aviable" name="beautification-select" id="beautification-select">--}}
{{--                            <option value="beautification-select-item">Все варианты благоустройства</option>--}}
{{--                            <option value="beautification-select-fences">Ограды</option>--}}
{{--                            <option value="beautification-select-tile">Плитка</option>--}}
{{--                            <option value="beautification-select-foundation">Фундамент</option>--}}
{{--                        </select>--}}
{{--                    </label>--}}
{{--                </div>--}}

                <div class="product--body__row flex-wrap d-flex ai-center mb-18 px-5">
                    <div class="product--row__params product--row__params-100 modal--material d-flex ai-center stele__size">
                        @foreach($beautification as $item)
                            <label class="product--row__label product--row__label--material product--row__50 product--row__label--h200 modal__size-item d-flex ai-center justify-center px-5 beautification-select-item beautification-select-foundation" for="">
                                <div class="stele__size-link stele__size-link--img-big stele__size-link--img stele__size-link--big-circle aviable" id="beautification-{{$item['id']}}" data-type="beautification" data-element="beautification">
                                    <input class="hide-input par--js" type="radio" name="beautification_id" value="{{$item['id']}}" data-price="{{$item['price']}}" data-description="{{$item['description']}}">
                                    <img class="stele__size-img stele__size-img--contain accordion__title-img" src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/modifierMaterials/Rectangle_334.png')}}">
                                </div>
                            </label>
                            {{--ожидаю ключ "beautification_id" --}}
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
