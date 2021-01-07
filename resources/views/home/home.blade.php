@extends('layouts.home_layouts')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
@endsection

@section('footer')
    <script src="{{URL::asset('assets/js/page.contact.js')}}"></script>
@endsection

@section('content')

    <div class="main-slider">
        <div class="main-slider-container">
            @foreach($articles[0]->getRelations() as $article)
                @foreach($article as $item)
                <div class="main-slider-elem">
                    <div class="box h-100 d-flex ai-center space-between">
                        <div class="main-slider-elem__text h-100 d-flex col">
                            <span class="main-slider-name">{!! $item->title !!}</span>
                            <p class="main-slider-desrc">{!! $item->desc !!}</p>
                            <ul class="mail-slider-list d-flex col">
                                {!! $item->text_block !!}
                            </ul>
                        </div>
                        <div class="main-slider-elem__image h-100">
                            <img class="main-slider__img"
                                 src="{{$item->image ?  Storage::url($item->image)  : URL::asset('assets/img/slide-item.png')}}"
                                 alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
        <button class="d-flex ai-center justify-center" id="main-slider__next">
            <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.555664 0.747803L11.4448 11.9997L0.55566 23.2516" stroke="#71779D" stroke-width="1.5"></path>
            </svg>
        </button>
        <button class="d-flex ai-center justify-center" id="main-slider__prev">
            <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.4438 23.252L1.55474 12.0001L12.4438 0.74822" stroke="#71779D" stroke-width="1.5"></path>
            </svg>
        </button>
    </div>
    <div class="main--prod__box ">
        <div class="box flex-row">
            <div class="section--title d-flex ai-center">
                <span class="section--title__num">1</span>
                <span
                    class="section--title__line"></span>
                    <span class="section--title__name">Продукция</span>
            </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="product--next">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="product--prev">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="box">
            <div class="product--carousel d-flex w-100">
                <ul class="product--carousel__nav d-flex col">
                    @foreach($products as $value)
                            <li class="carousel--nav__item">
                                <a class="d-flex ai-center w-100 {{$loop->first ? 'active' : ''}}"
                                   data-id="{{$loop->iteration}}"
                                   href="javascript:void(0);">{{$value->tab_title}}</a>
                            </li>
                    @endforeach
                </ul>
                <select class="product--carousel--mobile custom--select">
                    @foreach($products as $value)
                        <option class="carousel--nav__item--mob"
                                value="{{$loop->iteration}}">{{$value->tab_title}}</option>
                    @endforeach
                </select>
                <div class="product--carousel__items d-flex w-100">
                    @foreach($products as $product)
                        <div class="prod--carousel__item w-100 d-flex col {{$loop->first ? 'active' : ''}}"
                             id="{{$loop->iteration}}">
                             <div class="content w-100 d-flex ">
                                @foreach($product->getrelations() as $value)
                                    <a href="{{route('products.id',$value->id)}}" class="product--item d-flex col ai-center">
                                        <div class="product--item__img-wrap  wow animate__fadeInUp {{$value->type_id == 1 || $value->type_id == 2 ? 'monument-3d' : ''}}">
                                            <img class="product--item__img"
                                                src="{{$value->image ? Storage::url($value->image) : url('/images/demo/pamyatnik_dvoinoy.jpg')}}"
                                                alt="...">
                                        </div>

                                        <div class="product--item__description wow animate__fadeInUp">
                                            <div class="product--item__info">
                                                <div class="product--item__type">
                                                    <span class="fw-600">{{$value->subtype->subtype_name ?? $value->type->name}}</span>
                                                </div>

                                                <div class="item-price old">
                                                    <span>{{$value->old_price}}</span>
                                                    <span> руб.</span>
                                                </div>
                                            </div>

                                            <div class="product--item__price">
                                                <div class="product--item__art">
                                                    <span class="fw-400">арт.:</span>
                                                    <span class="fw-600">{{$value->product_code}}</span>
                                                </div>

                                                <div class="item-price--actual">
                                                    <span>{{$value->actual_price}}</span>
                                                    <span> руб.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product--item__link-wrap">
                                            <div class="product--item__link btn orange d-flex ai-center justify-center mb-0" tabindex="0">
                                                Подробнее
                                            </div>
                                        </div>

                                        <div class="product--item__sell">
                                            <div class="product--item__economy">Экономия</div>
                                            <div class=""><span class="fw-700">{{$value->saving}}</span> руб.</div>
                                        </div>

                                    </a>
                                @endforeach
                            </div>
                            <a class="all--reviews" href="{{route('products.type',[$value->type_id,$value->subtype_id])}}">
                                {{$product->text_more}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                                    <path d="M0.621094 1.51562L5.09913 5.75492L0.621094 10.104" stroke="#F09939" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="main--why_choose">
        <div class="box flex-row">
            <div class="section--title d-flex ai-center"><span class="section--title__num">2</span><span
                    class="section--title__line"></span><span class="section--title__name">Почему мы</span>
        </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="choose--next">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="choose--prev">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="box d-flex">
            <div class="why_choose__quote">
                <p class="choose-quote__text">{!! $articles[1]->title !!}</p>
                <img  class="quote--img wow animate__fadeIn" data-wow-duration="2s"
                         src="{{$articles[1]->image ? Storage::url($articles[1]->image) : URL::asset('assets/img/quote-image.png')}}" alt="">
            </div>
            <div class="why_choose__reasons d-flex flex-wrap">
                    @foreach($articles[1]->getRelations() as $article)
                        @foreach($article as $item)
                            <div class="why_choose__reason {{$loop->first ? 'active' : ''}}">
                            <div class="reason--icon d-flex ai-center justify-center wow animate__fadeInUp" data-wow-duration=".66s"><img
                                    src="{{$item->image ? Storage::url($item->image) : URL::asset('assets/img/money.svg')}}" alt=""></div>
                            <div class="reason--name wow animate__fadeInUp" data-wow-duration=".66s">{!!$item->title!!}</div>
                            <div class="reason--text wow animate__fadeInUp" data-wow-duration=".66s">{!!$item->text_block!!}</div>
                        </div>
                        @endforeach
                </div>
            </div>
            @endforeach
    </div>
    <div class="main--schemes">
        <div class="main--schemes-header box flex-row">
            <div class="section--title d-flex ai-center">
                <span class="section--title__num">3</span><span
                    class="section--title__line"></span><span class="section--title__name">Схемы работы</span>
            </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="sheme--prev">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="sheme--next">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="desktop-block-sheme box d-flex col">
            <div class="sheme-top d-flex">
                <div class="sheme-top__left ai-center d-flex">
                </div>

                @foreach($articles[2]->getRelations() as $article)
                <div class="sheme-top__central">
                    <div class="sheme--row d-flex ai-center active">
                        <div class="sheme--elem bottom-dotted wow animate__fadeInUp" data-wow-duration=".66s">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[0]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[0]->text_block !!}</div>
                        </div>
                        <div class="sheme--link d-flex ai-center justify-center"></div>
                    </div>
                    <div class="sheme--row d-flex ai-center">
                        <div class="sheme--elem bottom-dotted wow animate__fadeInUp" data-wow-duration=".66s">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[1]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[1]->text_block !!}</div>
                        </div>
                        <div class="sheme--link d-flex ai-center justify-center"></div>
                    </div>
                    <div class="sheme--elem bottom-dotted wow animate__fadeInUp" data-wow-duration=".66s">
                        <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[2]->title}}</div>
                        <div class="sheme--elem__text">{!! $article[2]->text_block !!}</div>
                    </div>
                </div>
            </div>
            <div class="sheme-bottom d-flex flex-wrap">
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[3]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[3]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted bottom-dotted wow animate__fadeInUp" data-wow-duration=".66s"">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[4]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[4]->text_block !!}</div>
                </div>
                <div class="sheme--elem wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[5]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[5]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[6]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[6]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted bottom-dotted wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[7]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[7]->text_block !!}</div>
                </div>
                <div class="sheme--elem wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[8]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[8]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[9]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[9]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[10]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[10]->text_block !!}</div>
                </div>
                <div class="sheme--elem  wow animate__fadeInUp" data-wow-duration=".66s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[11]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[11]->text_block !!}</div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mobile-block-sheme box d-flex col">
            <div class="hidden-slider-sheme">
                @foreach($articles[2]->getRelations() as $article)
                    <div class="sheme-top__central">
                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[0]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[0]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[1]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[1]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[2]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[2]->text_block !!}</div>
                        </div>
                    </div>

                    <div class="sheme-top__central">
                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[3]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[3]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[4]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[4]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[5]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[5]->text_block !!}</div>
                        </div>
                    </div>

                    <div class="sheme-top__central">
                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[6]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[6]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[7]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[7]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[8]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[8]->text_block !!}</div>
                        </div>
                    </div>

                    <div class="sheme-top__central">
                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[9]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[9]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem bottom-dotted">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[10]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[10]->text_block !!}</div>
                        </div>

                        <div class="sheme--elem">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[11]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[11]->text_block !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="main--quality">
        <div class="box">
            <div class="section--title d-flex ai-center granit"><span class="section--title__num">4</span><span
                    class="section--title__line"></span><span class="section--title__name ">Качественный гранит</span></div>
        </div>
        <div class="box col">
            @foreach($articles[3]->getRelations() as $article)
            <div class="quality--subtitle">{!! $articles[3]->title !!}</div>
            <div class="quality--content d-flex">
                <div class="quality--content__left">
                    <div class="quality--box">
                        <div class="quality--item" >
                            <div class="quality--item__outer left-1">
                                <div class="quality--item__img d-flex ai-center justify-center  wow animate__fadeInLeft left-1"><img
                                        src="{{$article[0]->image ? Storage::url($article[0]->image) : URL::asset('assets/img/quality-like.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[0]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-1"><div class="quality--item__line left-1"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                        <div class="quality--item">
                            <div class="quality--item__outer left-2">
                                <div class="quality--item__img d-flex ai-center justify-center  wow animate__fadeInLeft" data-wow-duration=".66s"><img
                                    src="{{$article[1]->image ? Storage::url($article[1]->image) : URL::asset('assets/img/quality-safe.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[1]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-2"><div class="quality--item__line left-2"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                        <div class="quality--item">
                            <div class="quality--item__outer left-3">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInLeft" data-wow-duration=".66s"><img
                                        src="{{$article[2]->image ? Storage::url($article[2]->image) : URL::asset('assets/img/quality-def.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[2]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-3"><div class="quality--item__line left-3"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer left-4">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInLeft" data-wow-duration=".66s"><img
                                        src="{{$article[3]->image ? Storage::url($article[3]->image) : URL::asset('assets/img/quality-time.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[3]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-4"><div class="quality--item__line left-4"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                    </div>
                    <div class="monument--elems">
                        <div class="monument--elem d-flex ai-center justify-center stella">Стелла</div>
                        <div class="monument--elem d-flex ai-center justify-center monument">Надгробник</div>
                    </div>
                </div>
                <div class="quality--content__central d-flex ai-center justify-center"><img
                        src="{{$articles[3]->image ? Storage::url($articles[3]->image) : URL::asset('assets/img/quality--img.png')}}"
                        alt=""></div>
                <div class="quality--content__right">
                    <div class="quality--box">
                        <div class="quality--item" >
                            <div class="quality--item__outer right-1">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight"><img
                                        src="{{$article[4]->image ? Storage::url($article[4]->image) : URL::asset('assets/img/quality-sun.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[4]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-1"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-1"></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer right-2">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-duration=".66s"><img
                                        src="{{$article[5]->image ? Storage::url($article[5]->image) : URL::asset('assets/img/quality-rain.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[5]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-2"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-2"></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer right-3">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-duration=".66s"><img
                                        src="{{$article[6]->image ? Storage::url($article[6]->image) : URL::asset('assets/img/quality-water.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[6]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-3"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-3"></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer right-4">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-duration=".66s"><img
                                        src="{{$article[7]->image ? Storage::url($article[7]->image) : URL::asset('assets/img/quality-colors.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[7]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-4"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-4"></div></div>
                        </div>
                    </div>
                    <div class="monument--elems">
                        <div class="monument--elem d-flex ai-center justify-center toumbstone">Тумба</div>
                        <div class="monument--elem d-flex ai-center justify-center flower">Цветник</div>
                    </div>
                </div>
            </div>
            <button class="quality--btn" type="button">Посмотреть название элементов памятника</button>
            @endforeach
        </div>
    </div>
    <div class="main--work_gallery ">
        <div class="box flex-row">
            <div class="section--title d-flex ai-center"><span class="section--title__num">5</span><span
                    class="section--title__line"></span><span class="section--title__name">Галерея наших работ</span>
        </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="work_gallery--next">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="work_gallery--prev">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="box col w-100"><span class="gallery--subtitle d-flex">Наша лучшая реклама - это качество выполненных работ.</span>
            <div id="main--work_gallery">
                @if(!$galleries->isEmpty())
                    @foreach($galleries as $gallery)
                        <div class="gallery--item">
                            <a  href="{{$gallery->image ? Storage::url($gallery->image) : URL::asset('assets/img/gallery.png')}}" data-fancybox="images">
                                    <img
                                        src="{{$gallery->image ? Storage::url($gallery->image) : URL::asset('assets/img/gallery.png')}}"
                                        alt="">
                            </a>
                        </div>
                    @endforeach
                @else
                    @for($i = 0; $i<6;$i++)
                        <div class="gallery--item">
                            <div class="gallery--item__outer">
                                <a href="{{URL::asset('assets/img/gallery.png')}}" data-fancybox="images">
                                    <img src="{{URL::asset('assets/img/gallery.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
            <button class="d-flex ai-center justify-center" id="work--gallery__prev">
                <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4438 23.252L1.55474 12.0001L12.4438 0.74822" stroke="#71779D"
                          stroke-width="1.5"></path>
                </svg>
            </button>
            <button class="d-flex ai-center justify-center" id="work--gallery__next">
                <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.555664 0.747803L11.4448 11.9997L0.55566 23.2516" stroke="#71779D"
                          stroke-width="1.5"></path>
                </svg>
            </button>
            <a class="all-monuments d-flex ai-center justify-center" href="{{route('gallery')}}">
                Перейти в галерею наших работ
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M0.621094 1.51562L5.09913 5.75492L0.621094 10.104" stroke="#F09939" stroke-width="1.5"/>
                </svg>
            </a>
            <a class="our-instagram d-flex ai-center justify-center" href="{{$site_contacts['instagram']->first()->url}}">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.3085 0H7.16657C3.21486 0 0 3.21486 0 7.16657V19.3087C0 23.2602 3.21486 26.4751 7.16657 26.4751H19.3087C23.2602 26.4751 26.4751 23.2602 26.4751 19.3087V7.16657C26.4751 3.21486 23.2602 0 19.3085 0V0ZM13.2375 20.4766C9.24584 20.4766 5.99847 17.2293 5.99847 13.2375C5.99847 9.24584 9.24584 5.99847 13.2375 5.99847C17.2293 5.99847 20.4766 9.24584 20.4766 13.2375C20.4766 17.2293 17.2293 20.4766 13.2375 20.4766ZM20.6497 7.70568C19.4701 7.70568 18.5107 6.74623 18.5107 5.56661C18.5107 4.387 19.4701 3.42735 20.6497 3.42735C21.8294 3.42735 22.789 4.387 22.789 5.56661C22.789 6.74623 21.8294 7.70568 20.6497 7.70568Z"
                        fill="#3C5B3F"></path>
                    <path
                        d="M13.2379 7.55106C10.1022 7.55106 7.55089 10.1022 7.55089 13.2381C7.55089 16.3737 10.1022 18.9251 13.2379 18.9251C16.3738 18.9251 18.9249 16.3737 18.9249 13.2381C18.9249 10.1022 16.3738 7.55106 13.2379 7.55106Z"
                        fill="#3C5B3F"></path>
                    <path
                        d="M20.6502 4.97975C20.3266 4.97975 20.0632 5.24315 20.0632 5.56673C20.0632 5.89032 20.3266 6.15371 20.6502 6.15371C20.974 6.15371 21.2374 5.89052 21.2374 5.56673C21.2374 5.24294 20.974 4.97975 20.6502 4.97975Z"
                        fill="#3C5B3F"></path>
                </svg>
                Наш Instagram: <span>{{$site_contacts['instagram']->first()->contact ?? 'greenstoneby'}}</span></a>
        </div>
    </div>
    <div class="main--reviews">
        <div class="box flex-row">
            <div class="section--title d-flex ai-center"><span class="section--title__num">6</span><span 
                    class="section--title__line"></span><span class="section--title__name">Отзывы РЕАЛЬНЫХ КЛИЕНТОВ</span>
        </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="reviews--next">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="reviews--prev">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="box col w-100">
            <div class="reviews--container"><span class="reviews--subtitle d-flex">Отзывы из Google</span>
                <div id="reviews-slider" class="reviews--list d-flex flex-wrap">
                    @if(!$reviews->isEmpty())
                        @foreach($reviews as $review)
                            <div class="reviews--item d-flex ai-center justify-center">
                                <!-- <div> -->
                                    <a class="reviews--item__outer" {{$loop->first ? 'active' : ''}}"
                                       href="{{$review->image ? Storage::url($review->image) : URL::asset('assets/img/review.png')}}"
                                       data-fancybox="images">
                                       <img
                                            src="{{$review->image ? Storage::url($review->image) : URL::asset('assets/img/review.png')}}"
                                            alt="">
                                    </a>
                                <!-- </div> -->
                            </div>
                        @endforeach
                    @else
                        @for($i = 0; $i<8;$i++)
                        <div class="reviews--item d-flex ai-center justify-center">
                            <!-- <div> -->
                                <a class="reviews--item__outer" {{$i == 0 ? 'active' : ''}}"
                                    href="{{URL::asset('assets/img/review2.png')}}"
                                    data-fancybox="images">
                                    <img src="{{URL::asset('assets/img/review2.png')}}" alt="">
                                </a>
                            <!-- </div> -->
                        </div>
                        @endfor
                    @endif
                </div>
            </div>
            <a class="all--reviews" href="{{route('reviews')}}">
                Больше отзывов
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M0.621094 1.51562L5.09913 5.75492L0.621094 10.104" stroke="#F09939" stroke-width="1.5"/>
                </svg>
            </a>
            <!-- TODO зарезервировано для вставки ссылки из админки -->
            <!-- <a class="our-instagram d-flex ai-center justify-center" href="{{$site_contacts['instagram']->first()->url}}"> -->
            <a class="our-instagram d-flex ai-center justify-center" href="https://www.google.com.ua/maps/place/%D0%9C%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD+%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2+Natgran/@53.8844128,25.2844959,15z/data=!4m10!1m2!2m1!1z0JzQsNCz0LDQt9C40L0g0L_QsNC80Y_RgtC90LjQutC-0LIgTmF0Z3Jhbiwg0KDRi9C90L7QuiAi0J_RgNC40LLQvtC60LfQsNC70YzQvdGL0LksINGD0LsuINCi0YDRg9GF0LDQvdC-0LJhLCDQm9C40LTQsCAyMzEzMDAsINCR0LXQu9Cw0YDRg9GB0Yw!3m6!1s0x46de8bfa727cf615:0xb89a9264e22fe6e!8m2!3d53.8844128!4d25.2932506!9m1!1b1" target="_blanck">
                <svg width="27" height="27" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.00035C0 2.68643 2.74119 0.00070579 6.12355 0.00070579C6.14444 -5.11313e-08 6.16894 0 6.19343 0C7.75602 0 9.17596 0.597142 10.2285 1.5712L10.2256 1.56838L8.55929 3.13676C7.94405 2.56432 7.1098 2.2114 6.19127 2.2114C6.1675 2.2114 6.143 2.21211 6.11923 2.21211H6.12283C4.01705 2.25022 2.32479 3.93153 2.32479 6.00035C2.32479 8.06917 4.01705 9.75049 6.11995 9.7886H6.12355C6.19199 9.79354 6.27196 9.79637 6.35264 9.79637C7.94693 9.79637 9.27682 8.69102 9.5902 7.22075L9.5938 7.19958H6.12355V5.14346H11.9027C11.9633 5.44133 11.9986 5.78507 12 6.13658V6.13799C12 9.56626 9.65504 12 6.12139 12C6.11923 12 6.11707 12 6.11491 12C2.73759 12 0 9.31781 0 6.00882C0 6.006 0 6.00318 0 6.00035Z" fill="#757575"/>
                </svg>

                Отзывы из Google
            </a>

        </div>
    </div>
    <div class="main--faq">
        <div class="box flex-row">
            <div class="section--title d-flex ai-center"><span class="section--title__num">7</span><span
                    class="section--title__line"></span><span class="section--title__name">Часто завдаваемые вопросы</span>
        </div>
            <div class="mobile--nav d-flex">
                <button class="mobile--next  d-flex ai-center justify-center" id="faq--next">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26636 14.751L1.73289 7.99984L8.26636 1.2487" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
                <button class="mobile--prev d-flex ai-center justify-center" id="faq--prev">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.733398 0.848633L7.26686 7.59977L0.733396 14.3509" stroke="#71779D"
                              stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="box col w-100">
            <div class="faq--list d-flex col w-100">
                <div class="faq--list__content d-flex col w-100">
                    @foreach($news as $item)
                    <div class="main--faq__item d-flex w-100 col {{$loop->first ? 'active' : ''}} wow animate__fadeInUp">
                        <a class="faq--item__name" href="{{route('news.id',$item->id)}}">{{$item->title}}</a>
                        <a href="{{route('news.id',$item->id)}}" class="faq--item__text">
                            {{$item->short_desc}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <a class="all--faq" href="{{route('news')}}">Все статьи
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M0.621094 1.51562L5.09913 5.75492L0.621094 10.104" stroke="#F09939" stroke-width="1.5"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
