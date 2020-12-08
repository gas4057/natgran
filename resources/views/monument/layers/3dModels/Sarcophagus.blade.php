<div class="sarcophagus-view product--details__model productItem-image productItem-3D load-overlay" id="update-part-3d-reel-new">

    <div class="play product--details__play" id="play">
        <input type="checkbox" value="None" id="playpause" name="check" checked/>
        <label for="playpause" tabindex=-1></label>
    </div>

    @if(!empty($arImgModel) and $arImgModel->first())
        <div id="demonstration-3d" class="sarcophagus-view-demonstration-3d">
            @foreach($arImgModel as $image)
                <img src="{{($image->getFullUrl())}}" alt="..." class="demonstration-3d__img" onload="slideLoaded(this)">
            @endforeach
        </div>
    @else
        <div id="demonstration-3d" class="sarcophagus-view-demonstration-3d">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0001.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0002.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0003.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0004.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0005.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0006.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0007.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0008.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0009.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0010.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0011.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0012.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0013.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0014.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0015.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0016.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0017.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0018.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0019.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0020.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0021.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0022.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0023.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0024.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0025.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0026.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0027.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0028.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0029.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0030.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0031.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0032.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0033.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0034.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0035.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0036.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0037.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0038.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0039.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0040.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0041.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0042.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0043.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0044.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0045.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0046.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0047.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0048.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0049.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0050.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0051.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0052.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0053.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0054.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0055.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0056.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0057.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0058.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0059.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0060.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0061.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0062.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0063.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0064.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0065.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0066.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0067.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0068.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0069.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0070.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0071.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0072.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0073.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0074.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0075.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0076.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0077.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0078.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0079.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0080.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0081.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0082.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0083.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0084.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0085.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0086.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0087.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0088.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0089.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0090.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0091.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0092.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0093.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0094.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0095.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0096.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0097.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0098.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0099.jpg')}}" alt="..." class="demonstration-3d__img">
            <img src="{{URL::asset('assets/img/3d-demonstration/frame_0100.jpg')}}" alt="..." class="demonstration-3d__img">
        </div>
    @endif

    <div class="sarcophagus-view__overlay"></div>
    <div class="sarcophagus-view__load-overlay">
        <p>Подождите загружаем 3D демострацию</p>
        <div id="preloader">
            <div class="dws-progress-bar"></div>
        </div>
    </div>
    <div class="model-prompt">Прокрутите изображение, для детализации</div>

</div>
