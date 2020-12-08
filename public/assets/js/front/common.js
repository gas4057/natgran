$(document).ready(function () {
    
    // document.addEventListener("DOMContentLoaded", () => {
    //     setTimeout(() => {
    //         $('.loader-outer').fadeOut()
    //     }, 2500);
    //     $('.loader-outer').delay(4000).fadeOut();
    // });
    $('.loader-outer').delay(4000).fadeOut();

    wow = new WOW({
        mobile: false
    })
    wow.init();

    $(function () {
        $(".main-slider-container").slick({
            infinite: true,
            speed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear',
            nextArrow: $("#main-slider__prev"),
            prevArrow: $("#main-slider__next"),
            dots: true,
            dotsClass: "custom-dots",
            autoplay: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                    }
                }
            ]
        });
        $(".prod--carousel__item .content").slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 9999,
                    settings: "unslick",
                },
                {
                    breakpoint: 510,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 2000,
                    }
                },
            ]
        });
        $('#product--prev').on('click', function() {
            $(".prod--carousel__item .content").slick('slickPrev');
        });
        $('#product--next').on('click', function() {
            $(".prod--carousel__item .content").slick('slickNext');
        });

        $("#main--work_gallery").slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: $("#work--gallery__next"),
            prevArrow: $("#work--gallery__prev"),
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 776,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        speed: 2000,
                        nextArrow: $('#work_gallery--next'),
                        prevArrow: $('#work_gallery--prev'),
                    }
                },
                {
                    breakpoint: 581,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#work_gallery--next'),
                        prevArrow: $('#work_gallery--prev'),
                    }
                }
            ]
        });
        $("#reviews-slider").slick({
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 9999,
                    settings: "unslick",
                },
                {
                    breakpoint: 776,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#reviews--next'),
                        prevArrow: $('#reviews--prev'),
                    }
                },
                {
                    breakpoint: 581,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#reviews--next'),
                        prevArrow: $('#reviews--prev'),
                    }
                }
            ]
        });
        $(".hidden-slider-sheme").slick({
            infinite: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            responsive: [
                // {
                //     breakpoint: 9999,
                //     settings: "unslick",
                // },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#sheme--next'),
                        prevArrow: $('#sheme--prev'),
                    }
                },
                {
                    breakpoint: 775,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#sheme--next'),
                        prevArrow: $('#sheme--prev'),
                    }
                },
                {
                    breakpoint: 581,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 2000,
                        arrows: true,
                        nextArrow: $('#sheme--next'),
                        prevArrow: $('#sheme--prev'),
                    }
                }
            ]
        });


        $(".slick-familiar").slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                arrows: false,
                            responsive: [
                 // {
                 //     breakpoint: 1200,
                 //     settings: "unslick"
                 // },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 1000,
                        arrows: true,
                        nextArrow: $(".familar-arrow-right"),
                        prevArrow: $(".familar-arrow-left"),
                    }
                }
            ]
        });

        $(".gallery--item").each(function (index, item) {
            var txt = $(item).find(".gallery--item__text");
            text(txt, 124);
            $(item).on("click", function () {
                var img = $(this)
                    .find("img")
                    .attr("src");
                var title = $(this)
                    .find(".gallery--item__name")
                    .text();
                var text = $(this)
                    .find(".gallery--fullText")
                    .text();
                $("#gallery-content")
                    .find("img")
                    .attr("src", img);
                $("#gallery-content")
                    .find(".gallery--item__name")
                    .text(title);
                $("#gallery-content")
                    .find(".gallery--item__text")
                    .text(text);
            });
        });
        $('.news--item').each(function (index, item) {
            let txt = $(item).find('.news--item__text');
            text(txt, 200);
        });

        // Открытые тела параметров у товара
        $(".product--tab__header").on("click", function () {
            $(this)
                .find(".header--toogler")
                .toggleClass("active");
            $(this)
                .siblings(".product--tab__body")
                .slideToggle();
        });

        // Табы
            $(".custom--carousel").each(function () {
                var obj = $(this);

                if (screen.width > 501) {
                    $(obj)
                        .find(".custom--carousel__link--desktop")
                        .first()
                        .addClass("active");

                    $(obj)
                        .find(".custom--carousel__box")
                        .first()
                        .fadeIn();
                    $(obj)
                        .find(".custom--carousel__box")
                        .each(function (index, item) {
                            $(this).addClass("slide" + index);
                        });
                    $(obj)
                        .find(".custom--carousel__link--desktop")
                        .each(function (index, item) {
                            $(this).attr("rel", index);
                        });
                } else if (screen.width < 500) {
                    $(obj)
                    .find(".custom--carousel__box")
                    .each(function (index, item) {
                        $(this).addClass("slide" + index);
                    });
                    $(obj)
                        .find(".custom--carousel__link--mobile")
                        .each(function (index, item) {
                            $(this).attr("rel", index);
                        });
                }

            });
            $(document).on("click", ".custom--carousel__link", function () {
                $(".custom--carousel__link").removeClass("active");
                $(this).addClass("active");
                var currSlide = $(".custom--carousel__link.active").attr("rel");
                sliderJS(currSlide);
                return false;
            });
            $("#next--slide").on("click", function () {
                var obj = $(".custom--carousel__link--desktop.active").attr("rel");
                var length = $(".custom--carousel__link--desktop").length;
                obj++;
                if (obj === length) {
                    $(".custom--carousel__link[rel='" + length + "']").click();
                    return false;
                }
                slide(obj);
                return false;
            });
            $("#prev--slide").on("click", function () {
                var obj = $(".custom--carousel__link--desktop.active").attr("rel");
                obj--;
                if (obj < 0) {
                    $(".custom--carousel__link[rel='0']").click();
                    return false;
                }
                slide(obj);
                return false;
            });

        // Карусель продуктов на главной
        $('.carousel--nav__item a').on('click', function () {
            $('.carousel--nav__item a').removeClass('active');
            $(this).addClass('active');
            let dataId = $(this).data('id');
            $('.prod--carousel__item').css({'opacity': 0, 'width': '0', 'height': '0', 'overflow': 'hidden'});
            $('#' + dataId).css({'opacity': 1, 'width': '100%', 'height': 'auto', 'overflow': 'hidden'});
        });
        $('.product--carousel--mobile').on('change', function () {
            let dataId = $(this).val();
            $('.prod--carousel__item').css({'opacity': 0, 'width': '0', 'height': '0', 'overflow': 'hidden'});
            $('#' + dataId).css({'opacity': 1, 'width': '100%', 'height': 'auto', 'overflow': 'hidden'});
            $('.prod--carousel__item').removeClass('active');
            $('#' + dataId).addClass('active');
            // mobileSlider($('.prod--carousel__item.active'));
            $('.prod--carousel__item .content').slick("reinit")
        });

        // Показать/скрыть названия элементов памятника
        $('.quality--btn').on('click', function () {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).text('Наши преимущества');
            } else {
                $(this).text('Посмотреть название элементов памятника');
            }
        });

        // if (screen.width < 768) {
        //     $(".sheme-bottom").prepend($('.sheme-top__central').children());
        // }
        $('.prod--carousel__item').each(function (index, item) {
            $(item).children('.content').children().eq(0).addClass('active');
        });
        mobileSlider($('.why_choose__reasons'));
        // mobileSlider($('.reviews--list'));
        mobileSlider($('.faq--list__content'));
        // mobileSlider($('.sheme-bottom'));
        // mobileSlider($('.prod--carousel__item.active'));
        $('#choose--next').on('click', function () {
            nextSlide($('.why_choose__reasons'));
        });
        $('#choose--prev').on('click', function () {
            prevSlide($('.why_choose__reasons'));
        });
        // $('#reviews--next').on('click', function () {
        //     nextSlide($('.reviews--list'));
        // });
        // $('#reviews--prev').on('click', function () {
        //     prevSlide($('.reviews--list'));
        // });
        $('#faq--next').on('click', function () {
            nextSlide($('.faq--list__content'));
        });
        $('#faq--prev').on('click', function () {
            prevSlide($('.faq--list__content'));
        });
        // $('#sheme--next').on('click', function () {
        //     nextSlide($('.sheme-bottom'));
        // });
        // $('#sheme--prev').on('click', function () {
        //     prevSlide($('.sheme-bottom'));
        // });
        // $('#prod--next').on('click', function () {
        //     nextSlide($('.prod--carousel__item.active'));
        // });
        // $('#prod--prev').on('click', function () {
        //     prevSlide($('.prod--carousel__item.active'));
        // });

        // Footer toogle
        if ($( window ).width() < 768) {
            $('.footer__title').on('click', function () {
                $(this).toggleClass('active');
                $(this).siblings('.footer__menu--propose').slideToggle();
            });
        }

        // Quality blocks toogle
        $('.quality--btn').on('click', function () {
            $('.quality--box').toggle();
            $('.monument--elems').toggle();
        });
        // Catalog sidebar
        $('.catalog--sidebar__name').on('click', function () {
            $('.catalog--sidebar__elems').slideUp();
            $('.catalog--sidebar__name img').removeClass('rotate');
            $(this).siblings('.catalog--sidebar__elems').slideDown();
            $(this).find('img').addClass('rotate');
        });

        // Remove cart item
        // Удалено для релизации удаления через сервер (можно вернуть при желании заказчика)
        // $('.remove--cart__item').on('click', function () {
        //     $(this).parent().parent().siblings('.cart--item__delete').css({'display': 'flex'});
        //     $(this).parent().parent().parent().css({'padding-bottom': '0px'});
        // });
        // $('.cancelDelete').on('click', function () {
        //     $(this).parent().css({'display': 'none'});
        //     $(this).parent().parent().css({'padding-bottom': '15px'});
        // });
    });

    $(document).ready('load', function() {
        $('.cart--products').mCustomScrollbar({
            axis: 'y',              // вертикальный скролл
            theme: 'rounded-dark',  // тема
            scrollInertia: '330',   // продолжительность прокрутки, значение в миллисекундах
            setHeight: 335,         // высота блока (переписывает CSS)
            mouseWheel: {
                deltaFactor: 300    // кол-во пикселей на одну прокрутку колёсика мыши
            }
        });
    });
    initModal('.js-modal', '.popup-qiuck-order');

// Mobile menu
    $('.hamburger').on('click', function () {
        $('.mobile--menu').slideToggle();
        $('body').toggleClass('no-scrolled');
    });
});
    function text(txt, size) {
        var txtContent = txt.text();
        if (txtContent.length > size) {
            txt.text(txtContent.slice(0, size) + "...");
        }
    }

    function slide(obj) {
        $(".custom--carousel__link").removeClass("active");
        var currlink = $(".custom--carousel__link[rel='" + obj + "']");
        currlink.click();
    }

    function sliderJS(currSlide) {
        var bl = $(".custom--carousel").find(
            ".custom--carousel__box.slide" + currSlide
        );
        $(".custom--carousel__box").slideUp();
        bl.slideDown();
    }

    function mobileSlider(parent) {
        let elems;
        if (parent.hasClass('prod--carousel__item')) {
            elems = parent.children('.content').children('.product--item');
        } else {
            elems = parent.children();
        }
        elems.each(function (index, item) {
            $(item).addClass('elem-' + (index + 1));
            $(item).attr('data-index', (index + 1));
        });
    }

    function nextSlide(parent) {
        let obj = parent.find('.active').data("index");
        let length;
        if (parent.hasClass('prod--carousel__item')) {
            length = parent.children('.content').children('.product--item').length;
        } else {
            length = parent.children().length;
        }
        obj++;
        if (obj === length || obj > length) {
            obj = 1;
        }
        if (parent.hasClass('prod--carousel__item')) {
            parent.children('.content').children('.product--item').removeClass('active');
            parent.children('.content').children('.product--item').css({
                'height': '0',
                'width': '0',
                'overflow': 'hidden',
                'opacity': '0',
                'transition': 'opacity .2s linear'
            });
            parent.children('.content').find('.elem-' + obj).addClass('active');
            parent.children('.content').find('.elem-' + obj).css({
                'height': 'auto',
                'width': '100%',
                'overflow': 'initial',
                'opacity': '1',
                'transition': 'opacity .2s linear'
            });
        } else {
            parent.children().removeClass('active');
            parent.children().css({
                'height': '0',
                'width': '0',
                'overflow': 'hidden',
                'opacity': '0',
                'transition': 'opacity .2s linear'
            });
            parent.find('.elem-' + obj).addClass('active');
            parent.find('.elem-' + obj).css({
                'height': 'auto',
                'width': '100%',
                'overflow': 'initial',
                'opacity': '1',
                'transition': 'opacity .2s linear'
            });
        }
    }

    function prevSlide(parent) {
        var obj = parent.find('.active').data("index");
        let length;
        if (parent.hasClass('prod--carousel__item')) {
            length = parent.children('.content').children('.product--item').length;
        } else {
            length = parent.children().length;
        }
        obj--;
        if (obj === 0) {
            obj = length;
        }
        if (parent.hasClass('prod--carousel__item')) {
            parent.children('.content').children('.product--item').removeClass('active');
            parent.children('.content').children('.product--item').css({
                'height': '0',
                'width': '0',
                'overflow': 'hidden',
                'opacity': '0',
                'transition': 'opacity .2s linear'
            });
            parent.children('.content').find('.elem-' + obj).addClass('active');
            parent.children('.content').find('.elem-' + obj).css({
                'height': 'auto',
                'width': '100%',
                'overflow': 'initial',
                'opacity': '1',
                'transition': 'opacity .2s linear'
            });
        } else {
            parent.children().removeClass('active');
            parent.children().css({
                'height': '0',
                'width': '0',
                'overflow': 'hidden',
                'opacity': '0',
                'transition': 'opacity .2s linear'
            });
            parent.find('.elem-' + obj).addClass('active');
            parent.find('.elem-' + obj).css({
                'height': 'auto',
                'width': '100%',
                'overflow': 'initial',
                'opacity': '1',
                'transition': 'opacity .2s linear'
            });
        }
    }



function initModal(button, modal){
    $(button).on('click', function(e){
        e.preventDefault();
        $.fancybox.open($(modal) );
    });
}


// табы в декоре
$(document).ready(function () {
    let screen = setSizeScreen();

    $( window ).on('resize', () => {
        screen = setSizeScreen();
    })

    $(`.decor--tab-${screen}`).hide().eq(0).show();

    $(".decor--item").click(function (event) {
      event.preventDefault();

      $(".decor--item").removeClass("active");

      let idTab = $(this).data("tab");
      $("ul.decor--items").find(`[data-tab="${idTab}"]`).addClass("active");

      $(`.decor--tab`).hide();
      $(`[data-id="${idTab}-${screen}"]`).show();
    });

    function setSizeScreen() {
        if ($( window ).width() < 769) {
            return "mobile";
        } else {
            return "desktop";
        }
    }
});

// аккордион в декоре
$(document).ready(function () {
    let acc = $('.decor--accordion');

    for (let key of acc) {

      $(key).on('click', function(event) {
        event.preventDefault();

        $(this).toggleClass("more-material--active");

        let panel = $(this).next('.panel');

        $(panel).toggleClass('open');

      })
    }
  });

// аккордион в карточке товара
$(document).ready(function () {

$('body').on('click touch', '.more-material--accordion', function(event) {
        event.preventDefault();

        $(this).toggleClass("more-material--active");

        let panel = $(this).next('.panel');

        $(panel).toggleClass('open');

      })
  });

//fancybox
$(document).ready(function () {

$('body').on('click touch', '.fancybox-button.fancybox-close-small', function(event) {
        event.preventDefault();
        $.fancybox.close();
      })
  });

// Маска для телефонного номера формы обратной связи
$(document).ready(function () {

    if ($("#contactsForm-tel").length) {
        $("#contactsForm-tel").mask("+375 (00) 000-00-00");
    }
});
$(document).ready(function () {

    if ($("#phone").length) {
        $("#phone").mask("+375 (00) 000-00-00");
    }
    if ($("#phone-basket").length) {
        $("#phone-basket").mask("+375 (00) 000-00-00");
    }
});

// форма обратной связи в модальном окне
$(document).ready(function () {
    $('form#callback--form').on('submit', function (e) {
        e.preventDefault()

        let data_ajax = {};
        let $form = $(this);
        data_ajax['url'] = $form.attr('action');
        data_ajax['token'] = $('meta[name="csrf-token"]').attr('content');
        data_ajax['first_name'] = $form.find('[name="name"]').val();
        data_ajax['contact_phone'] = $form.find('[name="phone"]').val();
        data_ajax['contact_email'] = $form.find('[name="email"]').val();
        data_ajax['contact_message'] = $form.find('[name="message"]').val();

        $.ajax({
            url: "/home.send.question",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                first_name: data_ajax['first_name'],
                contact_phone: data_ajax['contact_phone'],
                contact_email: data_ajax['contact_email'],
                contact_message: data_ajax['contact_message'],
                _token: data_ajax['token'],
            },
            success: function (response) {

                $.fancybox.close();

                $.fancybox.open({
                    src  : '#questionModal',
                    type : 'inline',
                    opts : {
                        afterShow : function( instance, current ) {
                            console.info( 'done!' );
                        }
                    }
                });
                $form[0].reset();
                setTimeout(function () {
                    $.fancybox.close();
                }, 500000);
            },
            error:
                function () {
                    console.log(response);
                }
        });

    });
});

// изменение количества товаров в корзине
$(document).ready(function () {


    let selectInput = $("#order--form .cart--products__item_inner .cart--item__select");

    selectInput.each((index, item) => {
        let firstCount = $(item).val();
        let parent = $(item).closest('.cart--products__item_inner');
        let pirceView = $(parent).find('.price-product');
        let firstPirceHidden = $(parent).find('.hidden-price');
        let pirceViewOld = $(parent).find('.price-product--old');
        let firstPirceHiddenOld = $(parent).find('.hidden-price--old');

        firstPirceHidden.val($(pirceView).text() / firstCount);
        firstPirceHiddenOld.val($(pirceViewOld).text() / firstCount);

        $(item).on('change', function (e) {

            let counter = $(this).val();

            let pirceHidden = $(parent).find('.hidden-price').val();
            let pirceHiddenOld = $(parent).find('.hidden-price--old').val();

            $(pirceView).text((counter * pirceHidden));
            $(pirceViewOld).text((counter * pirceHiddenOld));

            let addProductData = {
                product_id: $(parent).find($('.hidden-product_id')) ? $(parent).find($('.hidden-product_id')).val() : null,
                monument_id: $(parent).find($('.itemsToRm')) ? $(parent).find($('.itemsToRm')).val() : null,
                products_count: counter ? counter : 0,
                _token: $('meta[name="csrf-token"]').attr('content')
            }

            $.ajax({
                url: "/cart/changeCountItem",
                type: "POST",
                data: addProductData,
                success: function (response) {
                    // изменяем количество товаров на странице
                    let counterProduct = 0;
                    $('.cart--item__select').each((index, item) => {
                        counterProduct += +$(item).val();
                    });
                    $('.counter').each((index, item) => {
                        $(item).text(counterProduct);
                    });

                    changePriceInPage();
                    setTotalPrice();
                },
                error: function (response) {
                    console.log("error", response);
                },
            });


        });
    });
    changePriceInPage();
    setTotalPrice();

});

// удаление товаров в корзине
$(document).ready(function () {
    let removeInput = $("#order--form .cart--products__item_inner .remove--cart__item");
    checkSaleProduct();

    removeInput.each((index, item) => {
        let parent = $(item).closest('.cart--products__item_inner');

        $(item).on('click', function (e) {

            let removeProductData = {
                product_id: $(parent).find($('.hidden-product_id')) ? $(parent).find($('.hidden-product_id')).val() : null,
                monument_id: $(parent).find($('.itemsToRm')) ? $(parent).find($('.itemsToRm')).val() : null,
                _token: $('meta[name="csrf-token"]').attr('content')
            }

            $.ajax({
                url: "/cart/removeItem",
                type: "POST",
                data: removeProductData,
                success: function (response) {
                    $(parent).remove();
                    checkSaleProduct();
                    changePriceInPage();
                    setTotalPrice();

                    if ($(".hidden-product_id").length == 0) {
                        location.reload();
                    }
                },
                error: function (response) {
                    console.log("error", response);
                },
            });

        });
    });

    //проверка наличия акционных товаров
    function checkSaleProduct() {
        let isPromotional = $('.hidden-is_promotional');
        let parent = $('.order--summary__content');

        for (let key of isPromotional) {

            if ($(key).val() == 1) {
                $(parent).removeClass('no-sale');
            } else {
                $(parent).addClass('no-sale');
            }
        }
    }

});

// изменение цены с учетом доставки
$(document).ready(function () {
    let select = $('[name="delivery_id"]');
    let deliveryPrice = $('.summary--content__field__delivery');
    let deliveryPriceHidden = $('.current-delivery-price-hidden');

    $('.cart--order__delivery .order--form__label').on('change', function(event) {

        let label = $(this);
        let input = $(label).find('input');
        let price = $(input).attr("data-price");
        let coast = $(input).data("coast");

        if (coast == "free") {
            $(select).prop('disabled', true);
            $(deliveryPrice).text(price);
            $(deliveryPriceHidden).val(0);
        } else {
            $(select).prop('disabled', false);
            $(deliveryPrice).text(`${price} руб.`);
            $(deliveryPriceHidden).val(price);
        }

        changePriceInPage();
        setTotalPrice();
    });

    $(select).on("change", function(event) {

        let thisOptionPrice = $(this).find("option:selected").data('price');

        $('.order--form__price').text(thisOptionPrice);
        $('.standart__delivery').attr('data-price', thisOptionPrice);
        $(deliveryPrice).text(`${thisOptionPrice} руб.`);
        $(deliveryPriceHidden).val(thisOptionPrice);

        changePriceInPage();
        setTotalPrice();
    });

});

// подсчет общей цены
function setTotalPrice() {
    let deliveryPrice = +$('.current-delivery-price-hidden').val();
    let productPrice = +$('.current-actual-price-hidden').val();
    let totalPrice = $('.summary--content__field .current-total-js');

    $(totalPrice).text(`${productPrice + deliveryPrice}`);
}
// изменим цены на странице корзины
function changePriceInPage() {
    let amountPriceActual = 0;
    let amountPriceOld = 0;

    for (let key of $('.cart--products__item_inner')) {

        let aPrice = +$(key).find(".hidden-price").val();
        let oPrice = +$(key).find(".hidden-price--old").val();
        let select = +$(key).find(".cart--item__select").val();

        if (oPrice != 0) {
            amountPriceActual += aPrice * select;
            amountPriceOld += oPrice * select;
        } else {
            amountPriceActual += aPrice * select;
            amountPriceOld += aPrice * select;
        }
    }

    $('.current-actual-js').each((index, item) => {
        $(item).text(amountPriceActual);
    });

    $('.current-old-js').each((index, item) => {
        $(item).text(amountPriceOld);
    });

    $('.current-economy-js').each((index, item) => {
        $(item).text((amountPriceOld - amountPriceActual));
    });

    $('.current-actual-price-hidden').val(amountPriceActual);
}
// меню для каталога на мобильном экране
$(document).ready(function () {
    let body = $('body');
    let toggle = $('.catalog--side-bar-toggle');
    let overlay = $('.catalog--sidebar-overlay');

    $(toggle).on('click', function(event) {
        $(body).toggleClass('open-m-menu');
    })
    $(overlay).on('click', function(event) {
        $(body).removeClass('open-m-menu');
    })
});

// проверка формы на наличие ключа для отправки
$(document).ready(function() {
    $('#order--form').on('submit', function(event) {
        event.preventDefault()
        let formData = $(this).serializeArray();
        let requestFormData = {};

        for (let item of formData) {
            requestFormData[item.name] = item.value;
        }

        let hiddenId = $('#delivery-hidden-id').val();

        requestFormData.delivery_id = requestFormData.delivery_id ? requestFormData.delivery_id : hiddenId;
        // todo: если что то значние delivery_id можно поменять здесь                             ^^^^^

        // проверка на согласие с правилами
        if (requestFormData.terms === undefined) {
            toastr.error(`Для оформления заказа необходимо принять условия "Публичной оферты" и Пользовательского соглашения`,`Следующий шаг не доступен`);
            return false;
        }

        $.ajax({
            url: "/cart/checkout",
            type: "POST",
            data: requestFormData,
            success: function (response) {
                window.location = response;

            },
            error: function (response) {
                console.log("error", response);
                window.location = response;
            },
        });
    })
});

// Отправка формы в разделе Декор с сообщением о результате отправки
$(document).ready(function() {

    $('#decor-form').on('submit', function(event) {
        event.preventDefault();

        let formData = $(this).serializeArray();
        let requestFormData = {};

        for (let item of formData) {
            requestFormData[item.name] = item.value;
        }

        $.ajax({
            url: "/cart/changeCountItem",
            type: "POST",
            data: requestFormData,
            success: function (response) {
                $.fancybox.close();

                $.fancybox.open({
                    src  : '#decorSuccess',
                    type : 'inline',
                    opts : {
                        afterShow : function( instance, current ) {
                            console.info( 'done!' );
                        }
                    }
                });

                setTimeout(function () {
                    $.fancybox.close();
                    location.reload();
                }, 3000);

            },
            error: function (response) {
                console.log("error", response);

                $.fancybox.close();

                $.fancybox.open({
                    src  : '#decorError',
                    type : 'inline',
                    opts : {
                        afterShow : function( instance, current ) {
                            console.info( 'done!' );
                        }
                    }
                });

                setTimeout(function () {
                    $.fancybox.close();
                    location.reload();
                }, 3000);
            },
        });
    })
});

// Попап при уходе со страницы
$(document).ready(function() {
    $(document).mouseleave(showPopup);

    function showPopup(e) {

        if (e.clientY < 10) {
            $.fancybox.open({
                src  : '#siteOut',
                type : 'inline',
                opts : {
                    afterShow : function( instance, current ) {
                        console.info( 'done!' );
                    }
                }
            });

            $(document).off("mouseleave", showPopup);
        }
    }
});
// Попап для детального просмотра картинок в карточке товара
$(document).ready(function() {
    
    $(".stele__size-img").on("click", function (event) {
        event.stopPropagation()
        let src = $(event.target).attr('src')

        $.fancybox.open({
            src  : src,
            type : 'image',
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );
                }
            }
        });
    })
});

// Загрузка всех картинок для 3д саркофага
// $(window).on("load", function() {
//     console.log( 'All images loaded!' );
//     $(".sarcophagus-view").removeClass('load-overlay')
// });

$(document).ready(function () {
    var preloader    = $('#preloader'), // селектор прелоадера
        imagesCount  = $('.demonstration-3d__img').length, // количество изображений
        dBody        = $('body'), //обращаемся к body
        percent      = 100 / imagesCount, // количество % на одну картинку
        progress     = 0, // точка отсчета
        imgSum       = imagesCount, // количество картинок
        loadedImg    = 0; // счетчик загрузки картинок
        console.log(imagesCount, percent);

    if (imagesCount >= imgSum && imagesCount > 0) {
        preloader.css('background', '#000');
        dBody.css('overflow', 'hidden');
        console.log(percent);

        $(".dws-progress-bar").circularProgress({
            color: "#000000",
            line_width: 10,
            height: "150px",
            width: "150px",
            percent: 0,
            // counter_clockwise: true,
            starting_position: 25
        }).circularProgress('animate', percent, 1000);

        for (var i = 0; i < imagesCount; i++) { // создаем клоны изображений
            var img_copy        = new Image();
            img_copy.src        = document.images[i].src;
            img_copy.onload     = img_load;
            img_copy.onerror    = img_load;
        }

        function img_load () {
            console.log("images loaded " + progress + " percent");
            progress += percent;
            loadedImg++;
            if (progress >= 100 || loadedImg == imagesCount) {
                preloader.delay(400).fadeOut('slow');
                dBody.css('overflow', '');
                console.log("complite");
                $(".sarcophagus-view__load-overlay").delay(400).fadeOut('slow');
                $(".sarcophagus-view").removeClass('load-overlay')
            }
            $(".dws-progress-bar").circularProgress('animate', progress, 500);
        }
    } else {
        preloader.remove();
        console.log("complite");
        $(".sarcophagus-view").removeClass('load-overlay')
    }


});