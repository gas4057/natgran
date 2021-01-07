@extends('layouts.home_layouts')

@section('content')

    @include('layouts.breadcrumb_layouts')

    <div class="box text--page col">
        @if($data)
{{--            <h1 class="title--orange">{!!$data->title!!}</h1>--}}
{{--            {!! $data->content !!}--}}
{{--            @if($data->block)--}}
{{--                @foreach($data->block as $block)--}}
{{--                    @if($block->text_block)--}}
{{--                        {!! $block->text_block !!}--}}
{{--                    @endif--}}
{{--                    @if($block->caption_1)--}}
{{--                        {!! $block->caption_1 !!}--}}
{{--                    @endif--}}
{{--                    <img src="{{$block->image_1 ? Storage::url($block->image_1) : URL::asset('assets/img/catalog-banner.png') }}" alt="Catalog banner">--}}
{{--                        @if($block->caption_2)--}}
{{--                            {!! $block->caption_2 !!}--}}
{{--                        @endif--}}
{{--                        <img src="{{$block->image_2 ? Storage::url($block->image_2) : URL::asset('assets/img/catalog-banner.png') }}"--}}
{{--                            alt="Catalog banner">--}}
{{--                        @if($block->title)--}}
{{--                            {!! $block->title !!}--}}
{{--                        @endif--}}
{{--                        @if($block->caption_text)--}}
{{--                            {!! $block->caption_text !!}--}}
{{--                        @endif--}}
{{--                @endforeach--}}

                <div class="article">
                <div class="article__header">
                    @if($data->title)
                        <div class="article__title">
                            {!!$data->title!!}
                        </div>
                    @endif
                    @if($data->content)
                        <div class="article__subtitle">
                            {!! $data->content !!}
                        </div>
                    @endif
                </div>
                @if($data->block)
                    @foreach($data->block as $block)
                        <div class="article__body">
                            <div class="article__main">
                                <div class="article__section article-section">
                                    @if($block->title)
                                        <div class="article-section__title">
                                            {!! $block->title !!}
                                        </div>
                                    @endif
                                    @if($block->text_block)
                                        <div class="article-section__text">
                                            {!! $block->text_block !!}
                                        </div>
                                    @endif
                                    @if($block->caption_1)
                                        <div class="article-section__text">
                                            {!! $block->caption_1 !!}
                                        </div>
                                    @endif
                                    @if($block->image_1)
                                        <div class="article-section__wrap-img">
                                            <img class="article-section__img"
                                                 src="{{$block->image_1 ? Storage::url($block->image_1) : URL::asset('assets/img/catalog-banner.png') }}"
                                                 alt="...">
                                        </div>
                                    @endif
                                    @if($block->caption_2)
                                        <div class="article-section__text">
                                            {!! $block->caption_2 !!}
                                        </div>
                                    @endif
                                    @if($block->image_2)
                                        <div class="article-section__wrap-img">
                                            <img class="article-section__img"
                                                 src="{{$block->image_2 ? Storage::url($block->image_2) : URL::asset('assets/img/catalog-banner.png') }}"
                                                 alt="...">
                                        </div>
                                    @endif
                                    @if($block->caption_3)
                                        <div class="article-section__text">
                                            {!! $block->caption_3 !!}
                                        </div>
                                    @endif
                                    @if($block->image_3)
                                        <div class="article-section__wrap-img">
                                            <img class="article-section__img"
                                                 src="{{$block->image_3 ? Storage::url($block->image_3) : URL::asset('assets/img/catalog-banner.png') }}"
                                                 alt="...">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="article__aside article-aside">
                                @if($block->block_image_1)
                                    <div class="article-aside__wrap-img">
                                        <img class="article-aside__img"
                                             src="{{$block->block_image_1 ? Storage::url($block->block_image_1) : URL::asset('assets/img/catalog-banner.png') }}"
                                             alt="...">
                                    </div>
                                @endif
                                @if($block->block_image_2)
                                    <div class="article-aside__wrap-img">
                                        <img class="article-aside__img"
                                             src="{{$block->block_image_2 ? Storage::url($block->block_image_2) : URL::asset('assets/img/catalog-banner.png') }}"
                                             alt="...">
                                    </div>
                                @endif
                                @if($block->block_image_3)
                                    <div class="article-aside__wrap-img">
                                        <img class="article-aside__img"
                                             src="{{$block->block_image_3 ? Storage::url($block->block_image_3) : URL::asset('assets/img/catalog-banner.png') }}"
                                             alt="...">
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if($block->footer_title && $block->caption_text)
                            <div class="article__footer">
                                @if($block->footer_title)
                                    <div class="article__title article__title--footer">
                                        {!! $block->footer_title !!}
                                    </div>
                                @endif
                                @if($block->caption_text)
                                    <div class="article__subtitle">
                                        {!! $block->caption_text !!}
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
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
