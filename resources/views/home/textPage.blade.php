@extends('layouts.home_layouts')

@section('content')

    @include('layouts.breadcrumb_layouts')

    <div class="box text--page col">
        @if($data)
            <h1 class="title--orange">{!!$data->title!!}</h1>
            {!! $data->content !!}
            @if($data->block)
                @foreach($data->block as $block)
                    @if($block->text_block)
                        {!! $block->text_block !!}
                    @endif
                    @if($block->caption_1)
                        {!! $block->caption_1 !!}
                    @endif
                    <img src="{{$block->image_1 ? Storage::url($block->image_1) : URL::asset('assets/img/catalog-banner.png') }}" alt="Catalog banner">
                        @if($block->caption_2)
                            {!! $block->caption_2 !!}
                        @endif
                        <img src="{{$block->image_2 ? Storage::url($block->image_2) : URL::asset('assets/img/catalog-banner.png') }}"
                            alt="Catalog banner">
                        @if($block->title)
                            {!! $block->title !!}
                        @endif
                        @if($block->caption_text)
                            {!! $block->caption_text !!}
                        @endif
                @endforeach

                <div class="article">
                    <div class="article__header">
                        <h1 class="article__title">
                            Добыча камня
                        </h1>
                        <div class="article__subtitle">
                            На качество гранитного материала очень влияет способ его добычи. На сегодняшний день известны три варианта добычи гранита: при помощи взрыва; откалывание с применением воздушной подушки; метод камнереза.
                        </div>
                    </div>
                    <div class="article__body">
                        <div class="article__main">
                            <div class="article__section article-section">
                                <h4 class="article-section__title">
                                    Добыча при помощи взрыва
                                </h4>
                                <div class="article-section__text">
                                    <p>
                                        Это самый распространенный и крайне нерациональный метод.
                                    </p>
                                    <p>
                                        Он заключается в том, что в горной породе бурением проделывается отверстие, в него закладывается заряд который впоследствии взрывается.
                                    </p>
                                    <p>
                                        Среди всего количества получившихся глыб отбирают самые большие. Данный метод очень популярен из-за своей дешевизны, но он существенно снижает качество добытого камня: на нем появляются микротрещины, уменьшающие прочность материала.
                                    </p>
                                </div>
                                <div class="article-section__wrap-img">
                                    <img class="article-section__img" src="{{ URL::asset('assets/img/catalog-banner.png') }}" alt="...">
                                </div>
                                <div class="article-section__wrap-img">
                                    <img class="article-section__img" src="{{ URL::asset('assets/img/catalog-banner.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="article__aside article-aside">
                            <div class="article-aside__wrap-img">
                                <img class="article-aside__img" src="{{ url('/images/demo/pamyatnik_dvoinoy.jpg') }}" alt="...">
                            </div>
                            <div class="article-aside__wrap-img">
                                <img class="article-aside__img" src="{{ url('/images/demo/pamyatnik_dvoinoy.jpg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="article__footer">
                        <div class="article__title article__title--footer">
                            Транспортировка
                        </div>
                        <div class="article__subtitle">
                            После того, как камень добыт из карьера он погружается на транспорт и перевозится в специальные цеха на обработку. Там из него получают разнообразную продукцию: стелы, постаменты, балки для цветников, вазы, фонари.
                        </div>
                    </div>
                </div>
            @endif
        @else
                <h1 class="title--orange"> Заголовок секции ( Н1)</h1>
                <p>Преимуществом нашей компании в этом процессе является то, что перед его началом специалисты исключают
                возможность попадания в производство некачественного камня.</p>
            <img src="{{URL::asset('assets/img/catalog-banner.png')}}" alt="Catalog banner">
            <p>Преимуществом нашей компании в этом процессе является то, что перед его началом специалисты исключают
                возможность попадания в производство некачественного камня. </p>
            <h2>Гранитные памятники: преимущества, сфера применения и основные характеристики. Заголовок второго
                уровня</h2>
            <p>Преимуществом нашей компании в этом процессе является то, что перед его началом специалисты исключают
                возможность попадания в производство некачественного камня.</p>
            <h3>Разнообразный и богатый ассортимент товара. Заголовок три</h3>
            <p>
                Преимуществом нашей компании в этом процессе является то, что перед его началом специалисты исключают
                возможность попадания в производство некачественного камня.Преимуществом нашей компании в этом процессе
                является то, что перед его началом специалисты исключают возможность попадания в производство
                некачественного камня.</p>
            <h4>Наша компания предлагает купить гранитные памятники, которые производится из таких таких марок.
                Акцидентный текст</h4>
            <ul>
                <li>ненумерованный раз;</li>
                <li>два;</li>
                <li>три;</li>
                <li>и четыре.</li>
            </ul>
            <h4>Продолжительный срок эксплуатации обеспечивается устойчивостью материала и прочностью. Гранит
                обрабатывается специальным способом . Это опять акцидентный текст.</h4>
            <ol>
                <li>нумерованный раз;</li>
                <li>список нумерованный два;</li>
                <li>третий;</li>
                <li>номер четыре;</li>
            </ol>
            <p>
                Преимуществом нашей компании в этом процессе является то, что перед его началом специалисты исключают
                возможность попадания в производство некачественного камня.Преимуществом нашей компании в этом процессе
                является то, что перед его началом специалисты исключают возможность попадания в производство
                некачественного камня.</p>
        @endif
    </div>
@endsection
