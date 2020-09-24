@extends('layouts.home_layouts')

@section('content')

  @if($service)

      @include('layouts.breadcrumb_layouts')
  <div class="dirtyWhite--bg">
    <div class="box flex-wrap main--content">
      <h2 class="title--orange">{{$type}}</h2>
      <div class="news--section d-flex flex-wrap">

          @include('layouts.banner')

        <div class="decor">

          <div class="decor--tabs-nav">
            <ul class="decor--items">
                @foreach($service as $val)
                    <li class="decor--item tab-header {{$loop->iteration == 1 ? 'active' : ''}}" data-tab="decor-{{$val->id}}">
                        <a class="decor--item__title" href="#">
                            {{$val->title}}
                        </a>
                    </li>
                    <div data-id="decor-{{$val->id}}-mobile" class="decor--tab decor--tab-mobile">
                        <ul class="more-material__lists">
                            @foreach($val->block as $block)
                            <li class="more-material__list">
                                <a class="decor--accordion  more-material{{$loop->iteration == 1 ? '--active' : ''}}" href="#">
                                    <h4 class="more-material--subtitle">{{$block->title ?? 'Title'}}</h4>
                                </a>
                                <div class="panel {{$loop->iteration == 1 ? 'open' : ''}}" style="">
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
                            </li>
                                @endforeach
                        </ul>
                    </div>
                @endforeach
            </ul>
          </div>

          <div class="decor--content">
              @foreach($service as $val)
            <div data-id="decor-{{$val->id}}-desktop" class="decor--tab decor--tab-desktop">
                <ul class="more-material__lists">
                    @foreach($val->block as $block)
                <li class="more-material__list">
                    <a class="decor--accordion  more-material{{$loop->iteration == 1 ? '--active' : ''}}" href="#">
                        <h4 class="more-material--subtitle">{{$block->title ?? 'Title'}}</h4>
                    </a>
                    <div class="panel {{$loop->iteration == 1 ? 'open' : ''}}" style="">
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
                </li>
                    @endforeach
              </ul>
            </div>
              @endforeach
            <!-- <div id="decor-medallion" class="decor--tab">
              <ul class="more-material__lists">
                <li class="more-material__list">
                    <a class="decor--accordion  more-material--active" href="#">
                        <h4 class="more-material--subtitle">Медальоны</h4>
                    </a>

                    <div class="panel open" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>

                        <div class="more-material--img-wrap">
                            <img class="more-material--img" src="http://natgran/assets/img/modal-engraving.jpg" alt="...">
                        </div>

                    </div>
                </li>

                <li class="more-material__list">
                    <a class="decor--accordion" href="#">
                        <h4 class="more-material--subtitle">Ручная гравировка</h4>
                    </a>

                    <div class="panel" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>
                    </div>
                </li>
              </ul>
            </div>

            <div id="decor-text" class="decor--tab">
              <ul class="more-material__lists">
                <li class="more-material__list">
                    <a class="decor--accordion more-material--active" href="#">
                        <h4 class="more-material--subtitle">Текст</h4>
                    </a>

                    <div class="panel open" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>

                        <div class="more-material--img-wrap">
                            <img class="more-material--img" src="http://natgran/assets/img/modal-engraving.jpg" alt="...">
                        </div>
                    </div>
                </li>

                <li class="more-material__list">
                    <a class="decor--accordion" href="#">
                        <h4 class="more-material--subtitle">Ручная гравировка</h4>
                    </a>

                    <div class="panel" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>
                    </div>
                </li>
              </ul>
            </div>

            <div id="decor-granite" class="decor--tab">
              <ul class="more-material__lists">
                <li class="more-material__list">
                    <a class="decor--accordion  more-material--active" href="#">
                        <h4 class="more-material--subtitle">Виды Гранита</h4>
                    </a>

                    <div class="panel open" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>

                        <div class="more-material--img-wrap">
                            <img class="more-material--img" src="http://natgran/assets/img/modal-engraving.jpg" alt="...">
                        </div>

                        <div class="more-material--text-content">
                          Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>

                        <div class="more-material--text-content">
                          Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>

                        <div class="more-material--text-content">
                          Специфика гравировки ударно-механическим методом
                        </div>

                        <div class="more-material--text-content">
                          В гранитной мастерской «Благовест» используется ударно-механический метод нанесения изображений и надписей на памятники. Гравировка производится с помощью станка, который оснащен алмазной иглой. Изображение формируется посредством сколов камня различной глубины и формы.
                        </div>

                        <div class="more-material--text-content">
                          Станок работает по принципу принтера, осуществляя множество проходов по тому месту, где необходимо создать рисунок. Рабочий ход инструмента исключает погрешности. Получаемое изображение в мельчайших деталях соответствует цифровому исходнику. Вне зависимости от сложности работы достигается желаемый результат. Гравировальные работы ударно-механическим методом дают возможность обеспечить долговечность изображений на камне.
                        </div>

                    </div>
                </li>

                <li class="more-material__list">
                    <a class="decor--accordion" href="#">
                        <h4 class="more-material--subtitle">Виды Гранита</h4>
                    </a>

                    <div class="panel" style="">
                        <div class="more-material--text-content">
                            Сегодня в сферу изготовления гранитных памятников активно внедряются новые технологии. При их использовании удается повысить оперативность выполнения заказов, минимизировать влияние «человеческого фактора», сделать более доступными цены.
                        </div>
                        <div class="more-material--text-content">
                            Для гравировки портретов, других изображений и надписей на граните помимо ручного сегодня применяется пескоструйный, лазерный и ударно-механический методы. Все эти методы предусматривают перенос изображения на поверхность гранита с помощью специальных компьютерных программ.
                        </div>
                    </div>
                </li>
              </ul>
            </div> -->

          </div>

        </div>


      </div>
    </div>
  @endif

@endsection
