// табы в карточке товара
$(document).ready(function () {
  let offsetScroll = 50;
  let message = `Для перехода на следующий шаг заполните обязательные поля:
  - Фамилия, Имя, Отчество;
  - Дата рожденияи дата смерти!`

  // у 3 таб по дефолту отключен (у него class="tab-disabled")
    $(".tab").hide().eq(0).show();

    $(".tab-header").click(function (event) {
      event.preventDefault();

      if($(this).hasClass('tab-disabled')) {

        toastr.error(message,'Следующий шаг не доступен!');

        return false;
      }

      if (checkRequiredInputs) {
        $(".item").removeClass("active");

        let idTab = $(this).data("tab");
        $("ul.items").find(`[data-tab="${idTab}"]`).addClass("active");

        $(".tab").hide();
        $(`#${idTab}`).show();

        $('html,body').stop().animate({ scrollTop: $(`#${idTab}`).offset().top - offsetScroll }, 1000);
      }
    });

    // проверка на заполнение обязательных полей в разделе date
  $('.input-date-requared').datepicker({
    onHide: function(dp, animationCompleted){
        if (animationCompleted) {
          checkRequiredInputs();
        }
    }
  });

  $('.input-requared').on("keyup", function () {
    checkRequiredInputs();
  })


  function checkRequiredInputs() {
    const inputRequared = $('.input-requared');
    const disabledTab = $('.tabs [data-tab="result"]')

    for (let item of inputRequared) {

      if ($(item).val().length == 0 || $(item).hasClass('error')) {

        $(disabledTab).each((index, item) => {
          $(item).addClass('tab-disabled');
        });

        return false;
      }
    }

    $(disabledTab).each((index, item) => {
      $(item).removeClass('tab-disabled');
    });

    return true;
  }
});

// аккордион в карточке товара
$(document).ready(function () {
  let acc = $('.accordion');

  for (let key of acc) {

    $(key).on('click touch', function() {

      $(this).toggleClass("active-acc");

      let panel = $(this).next();

      $(panel).toggleClass('open');

    })
  }
});

// суб аккордион в карточке товара
$(document).ready(function () {
  let acc = $('.sub-accordion');

  for (let key of acc) {

    $(key).on('click touch', function() {

      $(this).toggleClass("active-acc");

      let panel = $(this).next();

      $(panel).toggleClass('open');
    })
  }
});

// аккордион в каталоге
$(document).ready(function () {
  let acc = $('.accordion--catalog-toggle');

  let optionsCatalog = $('.catalog--sidebar__option');

  for (let key of optionsCatalog) {

    if ($(key).hasClass('active')) {
      $(key).closest('.catalog--sidebar__list').find(".accordion--catalog-box").removeClass('selected')
    }
  }
  
  for (let key of acc) {
    
    $(key).on('click touch', function(event) {

      event.preventDefault();
      let idPanel = $(this).data("panel");
      let parent = $(this).closest('.accordion--catalog-box');

      $(parent).toggleClass("active-acc-catalog");
      $(`#${idPanel}`).toggleClass('open');

    })
  }
});
// аккордион в модальном окне на карточке товара с развернутым объяснением
$(document).ready(function () {
  let acc = $('body .more-accordion');

  for (let key of acc) {

    $(key).on('click touch', function(event) {
      event.preventDefault();

      $(this).toggleClass("more-material--active");

      let panel = $(this).next('.panel');

      $(panel).toggleClass('open');

    })
  }
});

// Инициализация плагина автовысоты textarea
$(document).ready(function () {
  if ($(".product--text-input--textarea").length) {
    autosize($(".product--text-input--textarea"));
  }
});

// Изменение параметров стеллы из шага 3
$(document).ready(function () {

  $("#change-stella").on('click touch', transitionToAppropriateSection);
  $("#change-pedestal").on('click touch', transitionToAppropriateSection);
  $("#change-parterre").on('click touch', transitionToAppropriateSection);
  $("#change-tombstone").on('click touch', transitionToAppropriateSection);
  $("#change-portrait").on('click touch', transitionToAppropriateSection);
  $("#change-initials").on('click touch', transitionToAppropriateSection);
  $("#change-memorable-dates").on('click touch', transitionToAppropriateSection);
  $("#change-epitaph").on('click touch', transitionToAppropriateSection);
  $("#change-stella-drawing").on('click touch', transitionToAppropriateSection);
  $("#change-tombstone-drawing").on('click touch', transitionToAppropriateSection);

  function transitionToAppropriateSection(event) {
    event.preventDefault();

    $(".item").removeClass("active");

    let idTab = $(this).data("tab");
    let idAccordion = $(this).data("accordion");

    $("ul.items").find(`[data-tab="${idTab}"]`).addClass("active");
    $(".tab").hide();
    $(`#${idTab}`).show();

    $(`#${idTab} .panel`).removeClass('open');
    $(`#${idTab} .accordion`).removeClass('active-acc');

    $(`#${idAccordion}`).click();
    $('html,body').stop().animate({ scrollTop: $(`#${idAccordion}`).offset().top - 50 }, 1000);
  }
});

// Использование первичной картинки для превью при загрузке страницы
$(document).ready(function () {

  let prevImgSrc = $('.stella__params .stele__size-link.active .stele__size-img').attr('src');
  $('.preview--material').each((index, item) => {
    $(item).attr('src', prevImgSrc);
  });
});

// Инициализация плагина для дат
$(document).ready(function () {

  if ($('.datepicker-here').length) {
    $('.datepicker-here').datepicker({
      position: "bottom right",
      dateFormat: 'dd.mm.yyyy',
    });

    $.datable('init');
  }
});

// Маска для телефонного номера модального окна быстрого заказа
$(document).ready(function () {

  if ($("#popup-qiuck-order-phone").length) {
      $("#popup-qiuck-order-phone").mask("+375 (00) 000-00-00");
  }
});

// Фильтр рисунков на стелу  с лева
$(document).ready(function () {
  let filterSelectEl = $('#stella_image-img-left-select');
  let items = $('.stella_image-img-left-select-item');

  filterSelectEl.on('change', function(event) {

    let showItem = ($(this).val());

    for (let item of items) {

        if ($(item).hasClass(showItem)) {
          $(item).removeClass("hidden");
        } else {
          $(item).addClass("hidden");
        }
    }
  });
});
// Фильтр рисунков на стелу  с права
$(document).ready(function () {
  let filterSelectEl = $('#stella_image-img-right-select');
  let items = $('.stella_image-img-right-select-item');

  filterSelectEl.on('change', function(event) {

    let showItem = ($(this).val());

    for (let item of items) {

        if ($(item).hasClass(showItem)) {
          $(item).removeClass("hidden");
        } else {
          $(item).addClass("hidden");
        }
    }
  });
});
// Фильтр рисунков на надгробную плиту с лева
$(document).ready(function () {
  let filterSelectEl = $('#tombstones_image-img-left-select');
  let items = $('.tombstones_image-img-left-select-item');

  filterSelectEl.on('change', function(event) {

    let showItem = ($(this).val());

    for (let item of items) {

        if ($(item).hasClass(showItem)) {
          $(item).removeClass("hidden");
        } else {
          $(item).addClass("hidden");
        }
    }
  });
});
// Фильтр рисунков на надгробную плиту с права
$(document).ready(function () {
  let filterSelectEl = $('#tombstones_image-img-right-select');
  let items = $('.tombstones_image-img-right-select-item');

  filterSelectEl.on('change', function(event) {

    let showItem = ($(this).val());

    for (let item of items) {

        if ($(item).hasClass(showItem)) {
          $(item).removeClass("hidden");
        } else {
          $(item).addClass("hidden");
        }
    }
  });
});

// Фильтр благоустройств
$(document).ready(function () {
  let filterSelectEl = $('#beautification-select');
  let items = $('.beautification-select-item');

  filterSelectEl.on('change', function(event) {

    let showItem = ($(this).val());

    for (let item of items) {

        if ($(item).hasClass(showItem)) {
          $(item).removeClass("hidden");
        } else {
          $(item).addClass("hidden");
        }
    }
  });
});

// контроль введенных значений в поле имени усопшего
$(document).ready(function () {
  let inputs = $('.initials-input');

  $(inputs).each(function(index, item) {
    $(item).on('keypress', function(event) {
      event = event || window.event;

      if (event.charCode && event.charCode!=0 && (event.charCode > 39 && event.charCode < 58)){ // цифры и математические знаки
        return false;
      } else if (event.charCode && event.charCode!=0 && (event.charCode == 32)){  // пробел
        return false;
      } else if (event.charCode && event.charCode!=0 && (event.charCode == 92)){  //обратный слэш
        return false;
      } else if (event.charCode && event.charCode!=0 && (event.charCode == 61)){  //равно
        return false;
      };
    })
  })
});

// контроль количества товаров в моданке быстрого заказа
$(document).ready(function () {
  let itemProduct = $('#popup-qiuck-order .product-from-basket .cart--item__select');

  itemProduct.each(function(index, item) {

    if ($(item).val() != 1) {
      let actualPrice =  $(item).closest('.product-from-basket').find('.hidden-actual-price').val();
      let oldPrice =  $(item).closest('.product-from-basket').find('.hidden-old-price').val();
      let actualPriceWithCount =  $(item).closest('.product-from-basket').find('.quick-order-actual-price');
      let oldPriceWithCount =  $(item).closest('.product-from-basket').find('.quick-order-old-price');

      $(actualPriceWithCount).text( ($(item).val() * actualPrice) )
      $(oldPriceWithCount).text( ($(item).val() * oldPrice) )
    }
  })
});

// 3д демострация товара
$(document).ready(function () {

  if ($("#demonstration-3d").length) {
    $("#demonstration-3d").brazzersCarousel();
    $("#update-part-3d-reel-new").on("mousedown", () => {
      $(parent).addClass('hide-overlay');
    })
    $(window).on("mouseup", () => {
      $(parent).removeClass('hide-overlay');
    })


    let parent = $(".sarcophagus-view");
    let divWrapImg = $('.tmb-wrap-table div');
    let wrapImg = $('.image-wrap img');
    let toggle = $('#playpause');
    let count = divWrapImg.length;
    let rotate = false;

    
    toggle.on("change", function(e) {
      e.preventDefault();

      rotate = !rotate;
      
      var x = 0;

      function go() {

        for (let i = 0; i < count; i++) {
          $(divWrapImg[i]).removeClass('active')
          $(wrapImg[i]).css('display', 'none')
          if (!rotate) {
            return;
          }
        }

        $(divWrapImg[x]).addClass('active')
        $(wrapImg[x]).css('display', 'block')


        if (x++ < count) {
            setTimeout(go, 50);
        } else if (x = count) {
          x=0
          go();
        }
      }
      go();
  })
  }
});
