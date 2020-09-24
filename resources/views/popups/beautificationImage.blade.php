<!-- модальное окно для всех видов благоустройств -->
<div style="display: none;" id="more-beautification"
     class="more-material--wrap modal--material more-material--wrap--beautification mCustomScrollbar"
     data-mcs-theme="3d-dark">
    <div class="more-material--content d-flex col">
        <h3 class="more-material--title">Все варианты благоустройства</h3>

        <div class="beautification__params product--row__params product--row__params-100 d-flex ai-center stele__size">
            @if($beautification)
                @foreach($beautification as $item)
                    <label
                        class="product--row__label product--row__label--material product--row__50 product--row__label--h200 modal__size-item d-flex ai-center justify-center px-5"
                        for="">
                        <div class="stele__size-link stele__size-link--img stele__size-link--big-circle aviable"
                             id="beautification-10" data-type="beautification" data-element="beautification">
                            <input class="hide-input par--js" type="radio" name="beautification_id" value="{{$item->id}}"
                                   data-price="{{$item->price}}" data-description="{{$item['description']}}">
                            <img class="stele__size-img accordion__title-img"
                                 src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/test-1.jpg')}}">
                        </div>
                    </label>
                @endforeach
            @endif
        </div>
    </div>
</div>
