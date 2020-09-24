<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{URL::asset('assets/img/favicon.ico')}}" rel="shortcut icon">
    <link type="text/css" href="{{URL::asset('assets/css/libs.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Slab:200,400,500,700&amp;display=swap&amp;subset=cyrillic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/hamburgers.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/mCSB_buttons.png">
    <link type="text/css" href="{{URL::asset('assets/css/datepicker.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/mega-dropdown-master.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/toastr.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/jQuery.Brazzers-Carousel.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/preloader.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('assets/css/additionalStyle.css')}}" rel="stylesheet">
    <title>NATGRAN</title>
    @yield('head')
</head>

<body>
    <div class="loader-outer">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
    <div class="content-wrapper" id="contentWrapper">
        <div class="page-wrapper" id="pageWrapper">

            <header class="header">
                <div class="box h-100">
                    <div class="header__body d-flex space-between col-100 h-100">
                        <div class="header--info d-flex ai-center w-100 space-between">
                            <div class="header--info__elem wow animate__fadeInDown">
                                <a class="d-flex ai-center header--location" href="#" data-fancybox data-src="#map">
                                    <img src="{{URL::asset('assets/img/location.svg')}}" alt="...">
                                    <span class="">Мы на карте</span>
                                </a>
                            </div>
                            <div class="header--info__elem time wow animate__fadeInDown">{!! $work_hours->content ??
                                'График
                                работы: <span>8:00 — 21:00 без выходных</span>'!!}</div>
                            <div class="header--info__elem wow animate__fadeInDown">
                                <a class="d-flex ai-center header--email"
                                    href="mailto:{{$site_contacts['email']->first()->contact ?? 'natgran@mail.ru'}}">
                                    <img src="{{URL::asset('assets/img/email.svg')}}" alt="">
                                    <span>{{$site_contacts['email']->first()->contact ?? 'natgran@mail.ru'}}</span>
                                </a>
                                <a class="ai-center header--phone__mob"
                                    href="tel:{{$site_contacts['phone']->first()->contact ?? '+375 (11) 398-56-88'}}">
                                    <span>{{$site_contacts['phone']->first()->contact ?? '+375 (11) 398-56-88'}}</span>
                                    <img src="{{URL::asset('assets/img/phone-rounded.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="main">
                <div class="box col">
                    <div class="main--header d-flex space-between col-100 wow animate__fadeInUp"><a
                            class="main--header__logo d-flex ai-center h-100 " href="/">
                            @if(!empty($header_logo[0]))
                            <img src="{{$header_logo[0]->image ?  Storage::url($header_logo[0]->image)  : URL::asset('assets/img/logo.svg')}}"
                                alt="Logo">
                            <img class="logo--mobile"
                                src="{{$header_logo[1]->image ?  Storage::url($header_logo[1]->image)  : URL::asset('assets/img/logo-mobile.svg')}}"
                                alt="Logo">
                            @else
                            <img src="{{URL::asset('assets/img/logo.svg')}}" alt="Logo">
                            <img class="logo--mobile" src="{{URL::asset('assets/img/logo-mobile.svg')}}" alt="Logo">
                            @endif
                            <span class="logo-text"> Памятники из гранита<br> от производителя</span>
                        </a>
                        <div class="main--header__contacts d-flex ai-center">
                            <div class="main--header__phones d-flex flex-wrap">
                                @if(!$site_contacts['phone']->isEmpty())
                                @foreach($site_contacts['phone'] as $site_contact)
                                <div class="main--header__phone d-flex ai-center">
                                    <a class="main--header__phonenum" href="tel: {{$site_contact->contact}}">
                                        {{$site_contact->contact}}
                                    </a><a class="main--header__viber" href="/">
                                        <img src="{{URL::asset('assets/img/viber.svg')}}" alt="Viber"></a></div>
                                @endforeach
                                @else
                                @for($i = 0;$i <4; $i++ ) <div class="main--header__phone d-flex ai-center">
                                    <a class="main--header__phonenum" href="tel:375113985688">+375 (11)
                                        398-56-88</a><a class="main--header__viber" href="/">
                                        <img src="{{URL::asset('assets/img/viber.svg')}}" alt="Viber"></a></div>
                            @endfor
                            @endif
                        </div>
                        <button class="btn orange d-flex ai-center justify-center" data-fancybox
                            data-src="#callback--modal">Заказать звонок</button>
                    </div>
                </div>
                <h3 id="mobile--slogan">Памятники из гранита от производителя</h3>
        </div>
        <div class="main--nav-block d-flex ai-center">
            <nav class="main--nav box d-flex space-between">
                <ul class="main--nav__list d-flex ai-center">
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('products')}}">Продукция</a>
                    </li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('products.decor')}}">Декор</a></li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('formalization')}}">Оформление</a>
                    </li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('service')}}">Услуги</a></li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('remuneration')}}">Оплата</a></li>
                    <li class="main--nav__list-item action"><a class="d-flex"
                            href="{{route('special.offers')}}">Акции</a>
                    </li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('contact_page')}}">Контакты</a>
                    </li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('news')}}">Статьи</a></li>
                    <li class="main--nav__list-item"><a class="d-flex" href="{{route('gallery')}}">Галерея</a></li>
                    <li class="main--nav__list-item catalog cd-dropdown-wrapper open-to-left">

                        <a class="d-flex cd-dropdown-trigger" href="#">
                            <img src="{{URL::asset('assets/img/mini-hamburger.svg')}}" alt="">
                            Каталог
                        </a>
                        <nav class="cd-dropdown">
                            <h2>Title</h2>
                            <a href="#0" class="cd-close">Close</a>

                            <ul class="cd-dropdown-content">

                                @if($catalogProducts)
                                @foreach($catalogProducts as $item)
                                @if($item->subtype()->exists())
                                <li class="{{$item->subtype()->exists() ? 'has-children' : ''}}">
                                    <a href="#">{{$item->name}}</a>
                                    @if($item->subtype()->exists())
                                    <ul class="cd-dropdown-icons {{$item->subtype()->exists() ? 'is-hidden' : ''}} ">
                                        <li class="go-back"><a href="#0">Menu</a></li>
                                        @foreach($item->subtype as $subtype)
                                        <li>
                                            <a class="cd-dropdown-item"
                                                href="{{route('products.type',[$item->id,$subtype->id])}}">
                                                <h3>{{$subtype->subtype_name}}</h3>
                                                <p>{{$subtype->short_desc ?? 'short_desc'}}</p>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul> <!-- .cd-dropdown-icons -->
                                    @endif
                                </li>
                                @endif
                                @endforeach
                                @foreach($catalogProducts as $item)
                                @if(!$item->subtype()->exists())
                                <li class="{{$item->subtype()->exists() ? 'has-children' : ''}}">
                                    <a href="{{route('products.type',$item->id)}}">{{$item->name}}</a>
                                    @if($item->subtype()->exists())
                                    <ul class="cd-dropdown-icons {{$item->subtype()->exists() ? 'is-hidden' : ''}} ">
                                        <li class="go-back"><a href="#0">Menu</a></li>
                                        @foreach($item->subtype as $subtype)
                                        <li>
                                            <a class="cd-dropdown-item"
                                                href="{{route('products.type',[$item->id,$subtype->id])}}">
                                                <h3>{{$subtype->subtype_name}}</h3>
                                                <p>{{$subtype->short_desc ?? 'short_desc'}}</p>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul> <!-- .cd-dropdown-icons -->
                                    @endif
                                </li>
                                @endif
                                @endforeach
                                @endif

                                <li><a href="{{route('special.offers')}}">Акции</a></li>
                                <li><a href="{{route('news')}}">Статьи</a></li>
                                <li><a href="{{route('gallery')}}">Галерея</a></li>
                                <li><a href="{{route('contact_page')}}">Контакты</a></li>
                            </ul> <!-- .cd-dropdown-content -->
                        </nav> <!-- .cd-dropdown -->

                    </li>
                    <li class="main--nav__list-item cart"><a class=" d-flex ai-center justify-center"
                            href="{{route('cart.show')}}">
                            <img src="{{URL::asset('assets/img/cart-ico.svg')}}" alt="Cart">
                            <span class="counter d-flex ai-center justify-center">
                                {{$cart ? $cart->totalQty : '0'}}
                            </span>
                        </a></li>
                </ul>
            </nav>
            <div class="main--nav__mobile w-100">
                <div class="box ai-center space-between">
                    <button class="hamburger hamburger--slider" type="button"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span><span class="hamburger-label">Меню</span>
                    </button>
                    <ul class="mobile--menu">
                        <li class="mobile--menu__link"><a href="{{route('products')}}">Продукция</a></li>
                        <li class="mobile--menu__link"><a href="{{route('products.decor')}}">Декор</a></li>
                        <li class="mobile--menu__link"><a href="{{route('formalization')}}">Оформление</a></li>
                        <li class="mobile--menu__link"><a href="{{route('service')}}">Услуги</a></li>
                        <li class="mobile--menu__link"><a href="{{route('remuneration')}}">Оплата</a></li>
                        <li class="mobile--menu__link"><a href="{{route('special.offers')}}">Акции</a></li>
                        <li class="mobile--menu__link"><a href="{{route('contact_page')}}">Контакты</a></li>
                        <li class="mobile--menu__link"><a href="{{route('news')}}">Статьи</a></li>
                        <li class="mobile--menu__link"><a href="{{route('gallery')}}">Галерея</a></li>
                        <li class="mobile--menu__link"><a href="/">Каталог</a></li>
                    </ul>
                    <img class="scrolled-logo" src="{{URL::asset('assets/img/scrolled-logo.svg')}}" alt="">
                    <a class="scrolled-phone" href="tel:375113985688">
                        <img src="{{URL::asset('assets/img/phone.svg')}}" alt="">
                    </a>
                    <a class="mobile--link d-flex ai-center justify-center" href="{{route('cart.show')}}">
                        <img src="{{URL::asset('assets/img/cart-ico.svg')}}" alt="Cart">
                        <span class="counter d-flex ai-center justify-center">
                            {{$cart ? $cart->totalQty : ''}}
                        </span>
                    </a>
                </div>
            </div>
        </div>
        @yield('content')
        </main>
    </div>
    </div>
    <div class="footer-wrapper" id="footerWrapper">
        <footer class="footer">
            <div class="footer__menu">
                <div class="box flex-wrap">
                    <div class="footer__menu--section col-50 p-RL20"><span class="footer__title">Гранитные
                            изделия</span>
                        <ul class="footer__menu--propose d-flex flex-wrap wow animate__fadeInUp">
                            <li class="footer--propose__item"><a href="/">Памятники в виде креста</a></li>
                            <li class="footer--propose__item"><a href="/">Памятники в виде креста</a></li>
                            <li class="footer--propose__item"><a href="/">Ограды</a></li>
                            <li class="footer--propose__item"><a href="/">Ограды</a></li>
                            <li class="footer--propose__item"><a href="/">Памятники в виде креста</a></li>
                            <li class="footer--propose__item"><a href="/">Ограды</a></li>
                            <li class="footer--propose__item"><a href="/">Памятники в виде креста</a></li>
                            <li class="footer--propose__item"><a href="/">Ограды</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu--section col-50 p-RL20"><span class="footer__title">Элементы декора</span>
                        <ul class="footer__menu--propose d-flex flex-wrap wow animate__fadeInUp">
                            <li class="footer--propose__item"><a href="/">Медальоны</a></li>
                            <li class="footer--propose__item"><a href="/">Веточки и розочки</a></li>
                            <li class="footer--propose__item"><a href="/">Рамки</a></li>
                            <li class="footer--propose__item"><a href="/">Статуи</a></li>
                            <li class="footer--propose__item"><a href="/">Буквы гаджати</a></li>
                            <li class="footer--propose__item"><a href="/">Вазы</a></li>
                            <li class="footer--propose__item"><a href="/">Крестики</a></li>
                            <li class="footer--propose__item"><a href="/">Лампады</a></li>
                        </ul>
                    </div>
                    <div class="footer__row d-flex w-100">
                        <div class="footer__menu--section d-flex col p-RL20 wow animate__fadeInUp"><span
                                class="footer__title">{!! $requisites->title ?? 'Наши реквизиты' !!}</span>
                            <div class="footer__menu--propose requisites d-flex col">
                                @if($requisites->block)
                                @foreach($requisites->block as $block)
                                <span class="footer__text">{!! $block->text_block!!}</span>
                                @endforeach
                                @else
                                <span class="footer__text">
                                    <b>Общество с ограниченной ответственностью «ГРИН-СТОУН»</b>
                                </span>
                                <span class="footer__text">
                                    <b>Юридический адрес:</b> 223037, РБ, Минская обл., Минский р-н, а/г Петришки, ул.
                                    Привокзальная, здание бани-магазина, комн. 9
                                </span>
                                <span class="footer__text">
                                    <b>Расчетный счет:</b> 3012010610014 в ОАО «Банк Москва-Минск», 220002, г. Минск,
                                    ул. Коммунистическая, 49 пом 1 МФО 153001272
                                </span>
                                <span class="footer__text">УНН 190431129, ОКПО 37590172</span>
                                <span class="footer__text">
                                    <b>Регистрационный номер в Торговом реестре РБ:</b> 208103, дата внесения в торговый
                                    реестр РБ 18 февраля 2015 ddddddddddг.
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="footer__row d-flex w-100">
                        <div class="footer__menu--section d-flex flex-wrap w-100 p-RL20 wow animate__fadeInUp">
                            <span class="footer__title contacts">Связаться с нами</span>
                            <div class="footer__menu--field d-flex ai-center">
                                <img class="footer__menu--img" src="{{URL::asset('assets/img/location.svg')}}" alt="">
                                <p class="footer--field__text d-flex ai-center"><span class="footer--field-title">Адрес:
                                    </span>
                                    <span
                                        class="footer__text">{{$site_contacts['address']->first()->contact ?? '220000, г. Минск ул. Уручская 23А'}}</span>
                                </p>
                            </div>
                            <div class="footer__menu--field d-flex ai-center"><img
                                    src="{{URL::asset('assets/img/email.svg')}}" alt="">
                                <p class="footer--field__text d-flex ai-center"><span
                                        class="footer--field-title">E-mail:</span>
                                    <a class="footer__text"
                                        href="mailto:{{$site_contacts['email']->first()->contact ?? 'info@green-stone.by'}}">
                                        {{$site_contacts['email']->first()->contact ?? 'info@green-stone.by'}}</a>
                                </p>
                            </div>
                            <div class="footer__menu--field d-flex ai-center"><img
                                    src="{{URL::asset('assets/img/skype.svg')}}" alt="">
                                <p class="footer--field__text d-flex ai-center"><span
                                        class="footer--field-title">Skype:</span><span
                                        class="footer__text">{{$site_contacts['skype']->first()->contact ?? 'greenstoneby'}}</span>
                                </p>
                            </div>
                            <div class="footer__menu--field d-flex ai-center"><img
                                    src="{{URL::asset('assets/img/instagram-orange.svg')}}" alt="">
                                <p class="footer--field__text d-flex ai-center"><span
                                        class="footer--field-title">Instagram:</span><span
                                        class="footer__text">{{$site_contacts['instagram']->first()->contact ?? 'greenstoneby'}}</span>
                                </p>
                            </div>
                            <div class="footer__menu--field d-flex ai-center w-100"><img class="footer__menu--img"
                                    src="{{URL::asset('assets/img/phone.svg')}}" alt="">
                                <p class="footer--field__text phones d-flex  ai-center"><span
                                        class="footer--field-title">Телефон:</span>
                                    @if(!$site_contacts['phone']->isEmpty())
                                    @foreach($site_contacts['phone'] as $site_contact)
                                    <a class="footer__text phone--number d-flex ai-center"
                                        href="tel:{{$site_contact->contact}}">{{$site_contact->contact}}<img
                                            src="{{URL::asset('assets/img/phone-rounded.svg')}}" alt="..."></a>
                                    @endforeach
                                    @else
                                    @for($i = 0;$i <4; $i++ ) <a class="footer__text phone--number d-flex ai-center"
                                        href="tel:375293992266">+375 (29) 399-22-66<img
                                            src="{{URL::asset('assets/img/phone-rounded.svg')}}" alt="..."></a>
                                        @endfor
                                        @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__info w-100 wow animate__fadeInUp">
                <div class="footer__white-line">
                    <span class="footer__info-link">© 2020 Все права защищены, natgran.by</span>
                    <a class="footer__info-link" href="">Карта сайта</a>
                    <a class="footer__info-link" href="{{route('offer.agreement')}}">ДОГОВОР ОФЕРТА</a>
                    <a class="footer__info-link" href="{{route('about.company')}}">О компании</a>
                    <a class="footer__info-link" href="{{route('privacy.policy')}}">Политика конфенденциальности</a>
                </div>
            </div>
            <div class="footer__atention w-100">
                <div class="box w-100 h-100 ai-center"><span>Данный интернет-сайт носит информационный характер и ни при
                        каких условиях не является публичной офертой, которая определяется положением Статьи 407
                        Гражданского кодекса РБ.</span></div>
            </div>
        </footer>
    </div>
    <div class="gallery--modal" id="gallery-content" style="display: none;"><img src="" alt="">
        <div class="gallery--item__info d-flex col"><span class="gallery--item__name"></span>
            <p class="gallery--item__text"></p>
        </div>
    </div>
    <div style="display: none;" id="callback--modal">
        <div class="callback--content d-flex col">
            <h3 class="callback--content__title">Задать вопрос</h3>
            <form class="d-flex col" id="callback--form" method="POST" action="{{route('home.send.question')}}">

                <div class="callback--field">
                    <input type="text" name="name" placeholder="Ваша имя" required />
                </div>
                <div class="callback--field">
                    <input type="email" name="email" placeholder="E-mail" required />
                </div>
                <div class="callback--field">
                    <input type="text" name="phone" placeholder="Телефон для связи" id="phone" required />
                </div>
                <div class="callback--field">
                    <textarea placeholder="Сообщение" name="message" required></textarea>
                </div>
                <button type="submit" class="btn orange d-flex ai-center justify-center">Задать вопрос</button>
                <p class="callback--warning">Нажатие кнопки «Задать вопрос» означает согласие с настоящей <a
                        href="{{route('offer.agreement')}}">Политикой конфеденциальности</a></p>
            </form>
        </div>
    </div>

    <div class="modal-message" id="questionModal" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Успешно</h5>
            <p>Мы получили обращение. Наш менеджер свяжется с вами в ближайшее время.</p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>
    <div class="modal-message" id="decorSuccess" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Успешно!</h5>
            <p>Товар успешно добавлен в корзину</p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>
    <div class="modal-message" id="decorError" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Ошибка!</h5>
            <p>При оформлении заказа возникли проблемы, обратитесь к менеджеру для решения данного вопроса</p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>
    <div class="modal-message modal-message--large" id="siteOut" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Уходите со страницы?</h5>
            <p>Возможно Вас заинтересует наш раздел с <a class="modal-link" href="{{route('special.offers')}}">акциями</a></p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>

    @include('popups/thanks')
    @include('popups/map')
    @include('popups/success')
    <script src="{{asset('assets/js/front/libs.min.js')}}"></script>
    <script src="{{asset('assets/js/front/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/front/hamburger.js')}}"></script>
    <script src="{{asset('assets/js/front/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/front/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/front/common.js')}}"></script>
    <script src="{{asset('assets/js/front/fixedHeader.js')}}"></script>
    <script src="{{asset('assets/js/front/titleCoords.js')}}"></script>
    <script src="{{asset('assets/js/front/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/front/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/js/front/jquery.menu-aim.js')}}"></script>
    <script src="{{asset('assets/js/front/mega-dropdown-master.js')}}"></script>


    @yield('footer')
    @stack('scripts')
</body>
