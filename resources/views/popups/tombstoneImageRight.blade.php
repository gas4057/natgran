<!-- модальное окно для всех рисунков на плиту -->
<div style="display: none;" id="more-tombstone_image-right" class="more-material--wrap modal--material more-material--wrap--beautification mCustomScrollbar" data-mcs-theme="3d-dark">
    <div class="more-material--content d-flex col">
        <h3 class="more-material--title">Все рисунки</h3>

        <div class="tombstone_image__params product--body__row tombstone_image-img-right image__size flex-wrap d-flex ai-center mb-18 px-5">
            @if($arTombstoneImages)
                @foreach($arTombstoneImages as $key=>$tombstoneImages)
                    @foreach($tombstoneImages as $tombstoneImage)
                        <label class="product--row__label product--row__label--material product--row__50 product--row__label--h200 image__size-item tombstone_image__size-item d-flex ai-center justify-center px-5
                            tombstones_image-img-right-select-item tombstones_image-img-right-select-{{$key}}" for="">
                            <div class="tombstone_image__size-link stele__size-link image__size-link stele__size-link--img-big stele__size-link--img stele__size-link--big-circle aviable"
                                 id="material-1" data-position="right" data-element="tombstone_image"
                                 data-description="Тестовое описание из модального окна - 1" data-price="1000">
                                <input class="hide-input par--js" type="radio" name="right_tombstone_image_id"
                                       value="{{$tombstoneImage->id}}">
                                <img class="stele__size-img"
                                     src="{{$tombstoneImage->image ?  Storage::url($tombstoneImage->image)  : URL::asset('assets/img/test-1.jpg')}}"
                                     alt="...">
                            </div>
                            <a href="{{$tombstoneImage->image ?  Storage::url($tombstoneImage->image)  : URL::asset('assets/img/test-1.jpg')}}" data-fancybox="images" class="img-popup"></a>
                        </label>
                    @endforeach
                @endforeach
            @endif
        </div>
    </div>
</div>
