<!-- модальное окно для всех рисунков на стелу -->
<div style="display: none;" id="more-stella_image" class="more-material--wrap modal--material more-material--wrap--beautification mCustomScrollbar" data-mcs-theme="3d-dark">
    <div class="more-material--content d-flex col">
        <h3 class="more-material--title">Все кресты</h3>

        <div class="stella_image__params product--body__row stella_image-img-left image__size flex-wrap d-flex ai-center mb-18 px-5">

            @if($arStellaImages)
                @foreach($arStellaImages as $key=>$stellaImages)
                    @foreach($stellaImages as $stellaImage)
            <label class="product--row__label product--row__50 product--row__label--material product--row__label--h200 image__size-item d-flex ai-center justify-center px-5
                            stella_image-img-left-select-item stella_image-img-left-select-{{$key}}" for="">
                <div class="stella_image__size-link stele__size-link image__size-link stele__size-link--img stele__size-link--big-circle aviable" id="material-1" data-position="left"
                     data-element="stella_image" data-description="Тестовое описание из модального окна - 1" data-price="100">
                    <input class="hide-input par--js" type="radio" name="left_stella_image_id" value="{{$stellaImage->id}}">
                    <img class="stele__size-img" src="{{$stellaImage->image ?  Storage::url($stellaImage->image)  : URL::asset('assets/img/test-1.jpg')}}" alt="...">
                </div>
            </label>
                    @endforeach
                @endforeach
            @endif
        </div>
    </div>
</div>
