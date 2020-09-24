@if(!empty($banner->desktop_img)  || !empty($banner->mobile_img))
    <!-- Банер с рекламой -->
    <div class="advert w-100">
        @if(!empty($banner->desktop_img))
            <img class="advert__img advert__img--desctop"
                 src="{{$banner->desktop_img ? Storage::url($banner->desktop_img) : URL::asset('assets/img/adv-img.jpg')}}">
        @endif
        @if(!empty($banner->mobile_img))
            <img class="advert__img advert__img--mobile"
                 src="{{$banner->mobile_img ? Storage::url($banner->mobile_img) : URL::asset('assets/img/adv-img-320.jpg')}}">
        @endif
    </div>
@endif
