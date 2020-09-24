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
        <div class="main--header box">
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
                    @foreach($products as $values)
                        <div class="prod--carousel__item w-100 d-flex col {{$loop->first ? 'active' : ''}}"
                             id="{{$loop->iteration}}">
                             <div class="content w-100 d-flex ">
                                @foreach($values->getrelations() as $value)
                                    <div  class="product--item d-flex col {{$loop->first ? 'active' : ''}}" >
                                        <div class="product--item__discount d-flex col ai-center justify-center">
                                            <p class="item__discount d-flex"><img
                                                    src="{{URL::asset('assets/img/discount.svg')}}"
                                                    alt=""><span>Экономия</span>
                                            </p><span class="item--discount__val">{{$value->saving}}</span>
                                        </div>
                                        <div class="product--item__img d-flex ai-center justify-center wow animate__fadeInUp">
                                            <img
                                                src="{{$value->image ? Storage::url($value->image) : url('/images/demo/pamyatnik_dvoinoy.jpg')}}" alt="">
                                            </div>


                                         <div class="prod-param wow animate__fadeInUp d-flex w-100">
                                            <div class="product--item__params param-left col-60 d-flex col">
                                                <div class="product--item__name">{{$value->subtype->subtype_name ?? ''}}</div>
                                                   <div class="product--item__art d-flex">
                                                        <span>арт.:</span>
                                                        <span class="art-value">{{$value->product_code}}</span>
                                                    </div>
                                                </div>
                                                <div class="product--item__params param-left col-40 d-flex col">
                                                    <div class="product--item__price d-flex">
                                                        <span class="item-price old">{{$value->old_price}} руб.</span>
                                                    </div>
                                                    <div class="product--item__price d-flex">
                                                        <span class="item-price current">{{$value->actual_price}} руб.</span>
                                                    </div>
                                                </div>
                                            </div>
                                                <a class="btn orange d-flex ai-center justify-center m0-auto"
                                                href="{{route('products.id',$value->id)}}">Подробнее</a>
                                            </div>
                                @endforeach
                            </div>
                            <a class="more--products-slider" href="{{route('products.type',[$value->type_id,$value->subtype_id])}}">
                                <span> {{$values->text_more}}</span>
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
                <img  class="quote--img wow animate__fadeIn" data-wow-delay="1.5s" data-wow-duration="2s"
                         src="{{$articles[1]->image ? Storage::url($articles[1]->image) : URL::asset('assets/img/quote-image.png')}}" alt="">
            </div>
            <div class="why_choose__reasons d-flex flex-wrap">
                    @foreach($articles[1]->getRelations() as $article)
                        @foreach($article as $item)
                            <div class="why_choose__reason {{$loop->first ? 'active' : ''}}">
                            <div class="reason--icon d-flex ai-center justify-center wow animate__fadeInUp" ><img
                                    src="{{$item->image ? Storage::url($item->image) : URL::asset('assets/img/money.svg')}}" alt=""></div>
                            <div class="reason--name wow animate__fadeInUp" data-wow-delay=".5s">{!!$item->title!!}</div>
                            <div class="reason--text wow animate__fadeInUp" data-wow-delay="1s">{!!$item->text_block!!}</div>
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
                        <div class="sheme--elem bottom-dotted wow animate__fadeInUp">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[0]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[0]->text_block !!}</div>
                        </div>
                        <div class="sheme--link d-flex ai-center justify-center"></div>
                    </div>
                    <div class="sheme--row d-flex ai-center">
                        <div class="sheme--elem bottom-dotted wow animate__fadeInUp" data-wow-delay=".5s">
                            <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[1]->title}}</div>
                            <div class="sheme--elem__text">{!! $article[1]->text_block !!}</div>
                        </div>
                        <div class="sheme--link d-flex ai-center justify-center"></div>
                    </div>
                    <div class="sheme--elem bottom-dotted wow animate__fadeInUp" data-wow-delay="1s">
                        <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[2]->title}}</div>
                        <div class="sheme--elem__text">{!! $article[2]->text_block !!}</div>
                    </div>
                </div>
            </div>
            <div class="sheme-bottom d-flex flex-wrap">
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-delay="1.3s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[3]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[3]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted bottom-dotted wow animate__fadeInUp" data-wow-delay="1.6s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[4]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[4]->text_block !!}</div>
                </div>
                <div class="sheme--elem wow animate__fadeInUp" data-wow-delay="1.9s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[5]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[5]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-delay="2.1s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[6]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[6]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted bottom-dotted wow animate__fadeInUp" data-wow-delay="2.4s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[7]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[7]->text_block !!}</div>
                </div>
                <div class="sheme--elem wow animate__fadeInUp" data-wow-delay="2.7s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[8]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[8]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-delay="3s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[9]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[9]->text_block !!}</div>
                </div>
                <div class="sheme--elem right--dotted wow animate__fadeInUp" data-wow-delay="3.3s">
                    <div class="sheme--elem__number d-flex ai-center justify-center">{{$article[10]->title}}</div>
                    <div class="sheme--elem__text">{!! $article[10]->text_block !!}</div>
                </div>
                <div class="sheme--elem  wow animate__fadeInUp" data-wow-delay="3.6s">
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
                                <div class="quality--item__img d-flex ai-center justify-center  wow animate__fadeInLeft" data-wow-delay=".3s"><img
                                    src="{{$article[1]->image ? Storage::url($article[1]->image) : URL::asset('assets/img/quality-safe.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[1]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-2"><div class="quality--item__line left-2"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                        <div class="quality--item">
                            <div class="quality--item__outer left-3">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInLeft" data-wow-delay=".6s"><img
                                        src="{{$article[2]->image ? Storage::url($article[2]->image) : URL::asset('assets/img/quality-def.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[2]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap left-3"><div class="quality--item__line left-3"></div><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer left-4">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInLeft" data-wow-delay=".9s"><img
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
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-delay=".3s"><img
                                        src="{{$article[5]->image ? Storage::url($article[5]->image) : URL::asset('assets/img/quality-rain.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[5]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-2"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-2"></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer right-3">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-delay=".6s"><img
                                        src="{{$article[6]->image ? Storage::url($article[6]->image) : URL::asset('assets/img/quality-water.svg')}}" alt=""></div>
                                <div class="quality--item__text">{!! $article[6]->text_block !!}</div>
                            </div>
                            <div class="quality--item__wrap right-3"><div class="quality--item__point"><img src="assets/img/point.png" alt=""></div><div class="quality--item__line right-3"></div></div>
                        </div>
                        <div class="quality--item ">
                            <div class="quality--item__outer right-4">
                                <div class="quality--item__img d-flex ai-center justify-center wow animate__fadeInRight" data-wow-delay=".9s"><img
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
            <a
                class="our-instagram d-flex ai-center justify-center" href="/">
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
                @foreach($contacts as $contact)
                Наш Instagram: <span>{{$contact->contact}}</span></a>
                @endforeach
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
            <div class="reviews--container"><span class="reviews--subtitle d-flex">Почему в Белорусии предпочитают заказать памятник именно у нас ?</span>
                <div id="reviews-slider" class="reviews--list d-flex flex-wrap">
                    @if(!$reviews->isEmpty())
                        @foreach($reviews as $review)
                            <div class="reviews--item d-flex ai-center justify-center">
                                <div class="reviews--item__outer">
                                    <a {{$loop->first ? 'active' : ''}}"
                                       href="{{$review->image ? Storage::url($review->image) : URL::asset('assets/img/review.png')}}"
                                       data-fancybox="images"><img
                                            src="{{$review->image ? Storage::url($review->image) : URL::asset('assets/img/review.png')}}"
                                            alt=""></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @for($i = 0; $i<8;$i++)
                        <div class="reviews--item d-flex ai-center justify-center">
                            <div class="reviews--item__outer">
                                <a {{$i == 0 ? 'active' : ''}}"
                                    href="{{URL::asset('assets/img/review.png')}}"
                                    data-fancybox="images"><img src="{{URL::asset('assets/img/review.png')}}" alt=""></a>
                            </div>
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
                        <span class="faq--item__text">
                            {{$item->short_desc}}</span>
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
