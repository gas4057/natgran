@if($moreMedallion)
<div style="display: none;" id="more-medallion" class="more-material--wrap mCustomScrollbar" data-mcs-theme="3d-dark">
    <div class="more-material--content d-flex col">
        <h3 class="more-material--title">{{$moreMedallion->key}}</h3>

        <ul class="more-material__lists">
            <li class="more-material__list">
                @foreach($moreMedallion->block as $block)
                <a class="more-material--accordion" href="#">
                    <h4 class="more-material--subtitle">{!! $block->title ?? 'Title' !!}</h4>
                    </a>

                <div class="panel" style="">
                    @if($block->text_block)
                    <div class="more-material--text-content">
                        {!! $block->text_block !!}
                    </div>
                    @else
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>
                    @endif
                    <div class="more-material--img-wrap">
                        <img class="more-material--img" src="{{$block->image_1 ?  Storage::url($block->image_1)  : URL::asset('assets/img/modal-engraving.jpg')}}" alt="...">
                    </div>

                        @if($block->caption_1)
                            <div class="more-material--text-content">
                                {!! $block->caption_1 !!}
                            </div>
                        @else
                            <div class="more-material--text-content">
                                Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                            </div>
                        @endif

                        @if($block->image_2)
                            <div class="more-material--img-wrap">
                                <img class="more-material--img" src="{{$block->image_2 ?  Storage::url($block->image_2)  : URL::asset('assets/img/modal-engraving.jpg')}}" alt="...">
                            </div>
                        @endif

                        @if($block->caption_2)
                            <div class="more-material--text-content">
                                {!! $block->caption_2 !!}
                            </div>
                        @else
                            <div class="more-material--text-content">
                                Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                            </div>
                        @endif

                </div>
                @endforeach
            </li>
        </ul>
    </div>
</div>
@endif
