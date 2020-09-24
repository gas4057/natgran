// * TODO: Записывать в обьект 3 параметра: ширина, высота, толщина
// ! TODO: Устанавливать активность боксов из ответа бекенда
// ! TODO: Перезаписывать значения размеров в шапке элемента
// ? TODO: Подсчет площади памятника

"use strict";
$(function () {

    let tagSection = $("#order-view-select_details");
    let tagMaterial = $(".modal--material");
    let toggleTombstones = true;
    let toggleParterres = true;

    // Переменные для изменения размеров 3д моделей
    let positionTombstoneAndParteFromPedestal_Z = 0;
    let positionStellaFromPedestal_Y = 0;

    let positionTombstoneFormScale_Y = 0;
    let positionTombstoneFormScale_Z = 0;
    let positionTombstoneFormParterres_Y = 0;

    let positionParterresFormScale_Z = 0;
    let positionParterresFormScale_Y = 0;
    let positionStellaFormScale_Y = 0;

    // первые установленные размеры объектов памятника (они используюся в виде составных преременных (eval()))
    let stellaFirstParmsHeight = $('.stella__params [name="height"]').val();
    let stellaFirstParmsWidth = $('.stella__params [name="width"]').val();
    let stellaFirstParmsThickness = $('.stella__params [name="thickness"]').val();


    let pedestalsFirstParmsHeight = $('.pedestals__params [name="height"]').val();
    let pedestalsFirstParmsWidth = $('.pedestals__params [name="width"]').val();
    let pedestalsFirstParmsThickness = $('.pedestals__params [name="thickness"]').val();

    let parterresFirstParmsHeight = $('.parterres__params [name="height"]').val();
    let parterresFirstParmsWidth = $('.parterres__params [name="width"]').val();
    let parterresFirstParmsThickness = $('.parterres__params [name="thickness"]').val();

    let tombstonesFirstParmsHeight = $('.tombstones__params [name="height"]').val();
    let tombstonesFirstParmsWidth = $('.tombstones__params [name="width"]').val();
    let tombstonesFirstParmsThickness = $('.tombstones__params [name="thickness"]').val();

    // получаем id продукта при условии что составные url всегда одинаковые, кроме id товара
    let idProductInThisPage = $(location).prop("href").split("/")[4];

    let actualIdBeautification;

    // окончательная цена за продукт
    let totalSum;

    //Объект с дефолтными размерами модели
    let firstSizesModel = {
        Parterres: {
            height: $(".parterres--height").eq(0).text().split(',')[0],
            material: 1,
            thickness: $(".parterres--thickness").eq(0).text().split(',')[0],
            width: $(".parterres--width").eq(0).text().split(',')[0],
            thickness_size: $(".parterres--thickness").eq(0).text().split(',')[0]
        },
        Pedestals: {
            height: $(".pedestals--height").eq(0).text().split(',')[0],
            material: 1,
            thickness: $(".pedestals--thickness").eq(0).text().split(',')[0],
            width: $(".pedestals--width").eq(0).text().split(',')[0],
            thickness_size: null
        },
        Stella: {
            height: $(".stella--height").eq(0).text().split(',')[0],
            material: 1,
            thickness: $(".stella--thickness").eq(0).text().split(',')[0],
            width: $(".stella--width").eq(0).text().split(',')[0],
            thickness_size: null
        },
        Tombstones: {
            height: $(".tombstones--height").eq(0).text().split(',')[0],
            material: 1,
            thickness: $(".tombstones--thickness").eq(0).text().split(',')[0],
            width: $(".tombstones--width").eq(0).text().split(',')[0],
            thickness_size: null
        }
    };

    $(document).ready(function () {
        setFirstSizesForAllObjects(firstSizesModel);
    });
    

    // устанавливаем класс active и выбор radio input по дефолту
    setDefaultActiveValue("initials", "color");
    setDefaultActiveValue("date", "color");
    setDefaultActiveValue("parterres", "position");
    setDefaultActiveValue("tombstones", "position");

    // Первоначальный подсчет суммы
    sumTotalPriceEquipment();
    sumTotalPriceRegistration();

    // Для отправки даных о параметрах памятника
    tagSection.on("click", ".stele__size-item .stele__size-link", function () {
        let obj = $(this).data("element");
        let actualParam = $(this).data("type");
        let link = $(this);
        let divLi = link.parent(".stele__size-item");
        let allLiRow = divLi.parent(".stele__size");
        let input = link.find("input");
        let inputVal = $(input).val();
        let data_ajax = {};

        // записываем в data продукт id, токен товара, и id url
        data_ajax = {
            product_id: idProductInThisPage,
            token: $("#order-constructor-form").find('[name="_token"]').val(),
            idProductInThisPage,
        };

        // console.log("OBJ", obj);

        clearLink(allLiRow); /** очистка */
        setActiveLink(input, link); /** назначение */

        // Изменение положения элементов для двойного памятника
        // TODO разкомментировать после дозаказа
        // if (actualParam == "position") {
        //     if (inputVal == "horizontally") {
        //         scene.remove(eval(`${obj}ModelRight`));
        //         scene.remove(eval(`${obj}ModelLeft`));
        //         scene.add(eval(`${obj}`));
        //     } else {
        //         scene.add(eval(`${obj}ModelRight`));
        //         scene.add(eval(`${obj}ModelLeft`));
        //         scene.remove(eval(`${obj}`));
        //     }
        // }

        // Добавление / удаление НАДГРОБНОЙ ПЛИТЫ
        if (obj == "tombstones" && actualParam == "is_remove") {

            $('#toggle-tombstones').toggleClass("remove");

            if (toggleTombstones) {
                scene.remove(tombstones);
                // scene.remove(tombstonesModelRight);
                // scene.remove(tombstonesModelLeft);

                toggleTombstones = false;
                $('.tombstones-remove-input').val(true);
                $('[name="tombstones_is_remove"]').val(true);
                clearActiveValue("tombstones");
                setParamsForObjInHead(obj);
                $('.tombstones__params .preview--material').attr('src', "http://natgran/assets/img/transparent-img.png");
                setPrice(obj, 0);
                sumTotalPriceEquipment();
                return;
            } else {
                scene.add(tombstones);
                toggleTombstones = true;
                $('.tombstones-remove-input').val(false);
                $('[name="tombstones_is_remove"]').val(false);

                setDefaultActiveValue(obj);
            }
        }
        // Добавление / удаление ЦВЕТНИКА
        if (obj == "parterres" && actualParam == "is_remove") {

            $('#toggle-parterres').toggleClass("remove");

            if (toggleParterres) {
                scene.remove(parterres);
                // scene.remove(parterresModelRight);
                // scene.remove(parterresModelLeft);

                positionTombstoneFormParterres_Y = -firstSize3DModel.parterres.size.y;
                tombstones.position.y = positionTombstoneFormScale_Y + positionTombstoneFormParterres_Y;

                toggleParterres = false;
                $('.parterres-remove-input').val(true);
                $('[name="parterres_is_remove"]').val(true);
                clearActiveValue("parterres");
                setParamsForObjInHead(obj);
                $('.parterres__params .preview--material').attr('src', "http://natgran/assets/img/transparent-img.png");
                setPrice(obj, 0);
                sumTotalPriceEquipment();
                return;
            } else {
                positionTombstoneFormParterres_Y = 0 ;

                scene.add(parterres);
                tombstones.position.y = positionTombstoneFormScale_Y + positionTombstoneFormParterres_Y;
                toggleParterres = true;
                $('.parterres-remove-input').val(false);
                $('[name="parterres_is_remove"]').val(false);

                setDefaultActiveValue(obj);
            }
        }

        // Добавление НАДГРОБНОЙ ПЛИТЫ при клике на параметр
        if (obj == "tombstones" && toggleTombstones == false) {

            $('#toggle-tombstones').toggleClass("remove");

                scene.add(tombstones);
                toggleTombstones = true;
                $('.tombstones-remove-input').val(false);
                $('[name="tombstones_is_remove"]').val(false);

                setDefaultActiveValue(obj);
        }
        // Добавление ЦВЕТНИКА при клике на параметр
        if (obj == "parterres" && toggleParterres == false) {
            let localThickness = $('.tombstones__params [data-type="thickness"].active input').val();

            $('#toggle-parterres').toggleClass("remove");

            scene.add(parterres);
            tombstones.position.y = -firstSize3DModel.parterres.size.y * (localThickness / tombstonesFirstParmsThickness) + firstSize3DModel.parterres.size.y;

            toggleParterres = true;
            $('.parterres-remove-input').val(false);
            $('[name="parterres_is_remove"]').val(false);

            setDefaultActiveValue(obj);
        }

        let paramsObj = {},
        paramsBody = $("." + obj + "__params"),
        activeParam = paramsBody.find(".active .par--js");

        // console.log("paramsBody, activeParam", paramsBody, activeParam);
        activeParam.each(function (index, item) {
            let activeParamVal = activeParam.eq(index).val(),
                activeParamKey = activeParam.eq(index).attr("name");

            paramsObj[activeParamKey] = activeParamVal;
        });

            // console.log("ajax-data",{
            //     product_id: idProductInThisPage,
            //     [obj]: paramsObj,
            //     obj,
            //     _token: data_ajax.token,
            //     actualParam,
            // });

        $.ajax({
            url: "/set_attributes",
            type: "POST",
            data: {
                product_id: idProductInThisPage,
                [obj]: paramsObj,
                obj,
                _token: data_ajax.token,
                actualParam,
            },
            success: function (response) {
                let responseParse = $.parseJSON(response),
                    getFirstKey = Object.keys(responseParse.modifier_size)[0],
                    getFirstParams = responseParse.modifier_size[getFirstKey];

                    // console.log("responseParse", responseParse, getFirstParams);

                // Проверка стелла это или другие элементы
                if (obj == "stella") {
                    setSizesForAllObjects(responseParse);

                    if (responseParse.old_price) {
                        let sumOldPrice = 0;

                        for (let elem of Object.values(responseParse.old_price)) {
                            sumOldPrice += elem;
                        }

                        $('.price--val--old').each((index, item) => {
                            $(item).text(sumOldPrice);
                        });
                    }


                } else {
                    // Очистка активности значений
                    clearActiveValue(obj);

                    // Установка значений для окна параметра
                    setParamsForObjInBody(obj, getFirstParams);

                    // Установка значений для окна шапки акардиона
                    setParamsForObjInHead(obj, getFirstParams);

                    // Установка цен
                    setPrice(obj, responseParse.price_for_1st_size);

                    // Изменение размеров 3д модели
                    setModelSize(obj, getFirstParams);

                    $(`.${obj}__old-price`).val(responseParse.old_price);

                    if (responseParse.old_price) {
                        let sumOldPrice = 0;
                        $('.elem-old-price').each((index, item) => {
                            sumOldPrice += +$(item).val();
                        });

                        $('.price--val--old').each((index, item) => {
                            $(item).text(sumOldPrice);
                        });
                    }

                }

                // Подсчет суммы
                sumTotalPriceEquipment();
            },
            error: function (response) {
                console.log("error", response);
            },
        });
    });

    // Для установки значений благоустройства в том числе и для модального окна
    tagMaterial.on("click", ".modal__size-item .stele__size-link", function () {

        let obj = $(this).data("element");
        let link = $(this);
        let input = link.find("input");

        // console.log("OBJ", obj);

        clearActiveValue(obj);/** очистка */
        setActiveLink(input, link); /** назначение */

        let actualPriceBeautification = $('.active [name="beautification_id"]').data("price");
        let actualDescriptionBeautification = $('.active [name="beautification_id"]').data("description");

        if (!actualIdBeautification) {
            actualIdBeautification = $('.active [name="beautification_id"]').val();
            setPrice(obj, actualPriceBeautification);
            $(".beautification__params").find(".header--info__params").text(actualDescriptionBeautification)
            sumTotalPriceEquipment();

        } else if (actualIdBeautification == $('.active [name="beautification_id"]').val()) {
            clearActiveValue(obj);

            setPrice(obj, 0);
            $(".beautification__params").find(".header--info__params").text("")
            actualIdBeautification = null;
            sumTotalPriceEquipment();

        } else {
            actualIdBeautification = $('.active [name="beautification_id"]').val();
            setPrice(obj, actualPriceBeautification);
            $(".beautification__params").find(".header--info__params").text(actualDescriptionBeautification)
            sumTotalPriceEquipment();

        }
        // установка значения is_remove в зависимости от цены
        if ($('[name="beautification_price"]').val() == 0) {
            $('[name="beautification_is_remove"]').val(true);
        } else {
            $('[name="beautification_is_remove"]').val(false);
        }

        return;

    });

    // Для отправки даных о параметрах медальона
    tagSection.on("click", ".medallion__size-item .medallion__size-link", function () {
        let obj = $(this).data("element"),
            actualParam = $(this).data("type"),
            link = $(this),
            divLi = link.parent(".medallion__size-item"),
            allLiRow = divLi.parent(".medallion__size"),
            input = link.find("input"),
            data_ajax_medallion = {};

        let inputParagraphValue = $(this).find("p").text();
        console.log(inputParagraphValue);

        $(`.engraving__result`).text(inputParagraphValue);

        // записываем в data продукт id, токен товара, и id url
        data_ajax_medallion = {
            product_id: idProductInThisPage,
            token: $("#order-constructor-form").find('[name="_token"]').val(),
            idProductInThisPage,
        };
        // console.log("OBJ", obj);

        if (link.hasClass('active')) {

            clearLink($('.medallion__params .medallion__size'), "medallion"); /** очистка */
            clearLink($('.engraving__params .engraving__size'), "engraving"); /* очистка гравировки тк он взаимозаменяемая с медальоном*/

            // Установка значений для окна параметра
            setParamsForMedalEngr(obj);

            $('[name="medallion_id"]').val(0);

            // Установка цен
            setPrice(obj, "0.00");
            setPrice("engraving", "0.00");

            // Подсчет суммы
            sumTotalPriceRegistration();

            return false;
        }

        clearLink(allLiRow, "medallion"); /** очистка */
        clearLink($('.engraving__params .engraving__size'), "engraving"); /* очистка гравировки тк он взаимозаменяемая с медальоном*/
        setActiveLink(input, link); /** назначение */

        let paramsObj = {},
        paramsBody = $("." + obj + "__params"),
        activeParam = paramsBody.find(".active .par--js");

        // console.log("paramsBody, activeParam", paramsBody, activeParam);
        activeParam.each(function (index, item) {
            let activeParamVal = activeParam.eq(index).val(),
                activeParamKey = activeParam.eq(index).attr("name");

            paramsObj[activeParamKey] = activeParamVal;
        });

            // console.log("ajax-data",{
            //     product_id: idProductInThisPage,
            //     [obj]: paramsObj,
            //     obj,
            //     _token: data_ajax_medallion.token,
            //     actualParam,
            //     ...paramsObj,
            // });

        $.ajax({
            url: "/get_price_medallion",
            type: "GET",
            data: {
                product_id: idProductInThisPage,
                [obj]: paramsObj,
                obj,
                _token: data_ajax_medallion.token,
                actualParam,
                ...paramsObj,
            },
            success: function (response) {
                // let responseParse = $.parseJSON(response);

                // console.log("response", response);
                // console.log("responseParse", responseParse);

                // Установка значений для окна параметра
                setParamsForMedalEngr(obj, response);

                // установка id для медальона
                $('[name="medallion_id"]').val(response.id);

                // Установка цен
                setPrice(obj, response.price);
                setPrice("engraving", "0.00");

                // Подсчет суммы
                sumTotalPriceRegistration();
            },
            error: function (response) {
                console.log("error", response);
            },
        });
    });

    // Для отправки даных о параметрах гравировки
    tagSection.on("click", ".engraving__size-item .engraving__size-link", function () {
        let obj = $(this).data("element");
        let actualParam = $(this).data("type");
        let link = $(this);
        let divLi = link.parent(".engraving__size-item");
        let allLiRow = divLi.parent(".engraving__size");
        let input = link.find("input");
        let data_ajax_engraving = {};
        let inputParagraphValue = $(this).find("p").text();

        $(`.${obj}__result`).text(inputParagraphValue);


        // записываем в data продукт id, токен товара, и id url
        data_ajax_engraving = {
            product_id: idProductInThisPage,
            token: $("#order-constructor-form").find('[name="_token"]').val(),
            idProductInThisPage,
        };
        // console.log(data_ajax_engraving, obj);
        // console.log("OBJ", obj);

        if (link.hasClass('active')) {

            clearLink($('.engraving__params .engraving__size'), "engraving"); /* очистка */
            clearLink($('.medallion__params .medallion__size'), "medallion");  /* очистка медальона тк он взаимозаменяемый с гравировкой */

            // Установка значений для окна параметра
            setParamsForMedalEngr(obj);

            $('[name="engraving_id"]').val(0);

            // Установка цен
            setPrice(obj, "0.00");
            setPrice("medallion", "0.00");

            // Подсчет суммы
            sumTotalPriceRegistration();

            return false;
        }

        clearLink(allLiRow, "engraving"); /* очистка */
        clearLink($('.medallion__params .medallion__size'), "medallion"); /* очистка медальона тк он взаимозаменяемый с гравировкой */
        setActiveLink(input, link); /* назначение */

        let paramsObj = {},
        paramsBody = $("." + obj + "__params"),
        activeParam = paramsBody.find(".active .par--js");

        // console.log("paramsBody, activeParam", paramsBody, activeParam);
        activeParam.each(function (index, item) {
            let activeParamVal = activeParam.eq(index).val(),
                activeParamKey = activeParam.eq(index).attr("name");

            paramsObj[activeParamKey] = activeParamVal;
        });


            // console.log("ajax-data",{
            //     product_id: idProductInThisPage,
            //     [obj]: paramsObj,
            //     obj,
            //     _token: data_ajax_engraving.token,
            //     actualParam,
            //     ...paramsObj,
            // });

        $.ajax({
            url: "/get_price_engraving",
            type: "GET",
            data: {
                product_id: idProductInThisPage,
                [obj]: paramsObj,
                obj,
                _token: data_ajax_engraving.token,
                actualParam,
                ...paramsObj,
            },
            success: function (response) {
                // let responseParse = $.parseJSON(response);

                // console.log("response_engraving", response);
                // console.log("responseParse", responseParse);

                // Установка значений для окна параметра
                setParamsForMedalEngr(obj, response);

                // установка id для гравировки
                $('[name="engraving_id"]').val(response.id);

                // Установка цен
                setPrice(obj, response.price);
                setPrice("medallion", "0.00");

                // Подсчет суммы
                sumTotalPriceRegistration();
            },
            error: function (response) {
                console.log("error", response);
            },
        });
    });

    // Для отправки даных при БЫСТРОМ ЗАКАЗЕ
    tagSection.on("click", "#submit_fast_order", function (event) {

        event.preventDefault();

        // установка актуальной цены в модальное окно
        $(".actual-product-this-page .hidden-actual-price-this-product").val(totalSum);
        $(".actual-product-this-page .quick-order-actual-price-this-product").text(totalSum);

        let paramsObj = {
            is_fast_order : true,
            name_color_id: 0,
            epitaph_color_id: 0,
            left_stella_image_id: 0,
            left_stella_color_id: 0,
            left_tombstone_image_id: 0,
            left_tombstone_color_id: 0,
            right_epitaph: "empty",
            right_stella_image_id: 0,
            right_stella_color_id: 0,
            right_tombstone_image_id: 0,
            right_tombstone_color_id: 0,
            dates_color_id: 0,
            beautification_id: 0,
            stella_id: $('[name="stella_id"]').val() ? +$('[name="stella_id"]').val() : 0,
            medallion_id: $('[name="medallion_id"]').val() ? +$('[name="medallion_id"]').val() : 0,
            engraving_id: $('[name="engraving_id"]').val() ? +$('[name="engraving_id"]').val() : 0,
            on_pedestal_epitaph: "empty",
            left_epitaph: "empty",
            _token: $('[name="_token"]').val(),
            product_id: +idProductInThisPage,
        };

        let reqaredInputs = $('.input-requared');

        let stella = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let pedestals = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let tombstones = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let parterres = {height: 0, width: 0, thickness: 0, material: 0, id: 0};

        stella.id = +$('[name="stella_id"]').val();
        pedestals.id = +$('[name="pedestals_id"]').val();
        tombstones.id = +$('[name="tombstones_id"]').val();
        parterres.id = +$('[name="parterres_id"]').val();

        let name_left = "empty";
        let name_right = "empty";

        let messageForEmptyInput = `Для перехода на следующий шаг заполните обязательные поля:
        - Фамилия, Имя, Отчество;
        - Дата рожденияи дата смерти!`

        reqaredInputs.each((index, item) => {

            if ($(item).val() == "") {
                // console.log("input is empty");
                toastr.error(messageForEmptyInput,'Следующий шаг не доступен!');
            }
        })

        addValueToFastOrderForm('.stella__params .active input', stella);
        addValueToFastOrderForm('.pedestals__params .active input', pedestals);
        addValueToFastOrderForm('.pedestals__params [name="id"]', pedestals);
        addValueToFastOrderForm('.tombstones__params .active input', tombstones);
        addValueToFastOrderForm('.parterres__params .active input', parterres);
        addValueToFastOrderForm('.beautification__params .active input', paramsObj);
        addValueToFastOrderForm('.initials__params .active input', paramsObj);
        addValueToFastOrderForm('.date__params .active input', paramsObj);
        addValueToFastOrderForm('.date-input', paramsObj);
        addValueToFastOrderForm('.epitaph__params .active input', paramsObj);
        addValueToFastOrderForm('.epitaph-input', paramsObj);
        addValueToFastOrderForm('.stella_image__params .active input', paramsObj);
        addValueToFastOrderForm('.tombstone_image__params .active input', paramsObj);

        // имена усопших
        if ($('#surname_left').val().length && $('#name_left').val().length && $('#patronymic_left').val().length) {
            name_left = `${$('#surname_left').val()} ${$('#name_left').val()} ${$('#patronymic_left').val()}`;
        }
        // дополнительная проверка для правого имени, т.к. на одиночке их нет
        if ($('#surname_right').length && $('#name_right').length && $('#patronymic_right').length) {
            if ($('#surname_right').val().length && $('#name_right').val().length && $('#patronymic_right').val().length) {
                name_right = `${$('#surname_right').val()} ${$('#name_right').val()} ${$('#patronymic_right').val()}`;
            }
        }

        // проверка выбора цвета для ФИО усопшего
        if (name_left !== "empty" && paramsObj.name_color_id === 0) {
            toastr.error("Выберите цвет шрифта для имени усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для памятных дат усопшего
        if (paramsObj.left_date_of_birth !== "" && paramsObj.left_date_of_die !== "" && paramsObj.dates_color_id === 0) {
            toastr.error("Выберите цвет шрифта для памятных дат усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для эпитафии
        if ((paramsObj.left_epitaph !== "empty" || paramsObj.on_pedestal_epitaph !== "empty") && paramsObj.epitaph_color_id === 0) {
            toastr.error("Выберите цвет шрифта для эпитафии усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для рисунка на стелу
        if (paramsObj.left_stella_image_id !== 0 && paramsObj.left_stella_color_id === 0) {
            toastr.error("Выберите цвет для рисунка на стелу",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для рисунка на надгробную плиту
        if (paramsObj.left_tombstone_image_id !== 0 && paramsObj.left_tombstone_color_id === 0) {
            toastr.error("Выберите цвет для рисунка на надгробную плиту",'Следующий шаг не доступен!');
            return false;
        }

        let formData = {
            ...paramsObj,
            stella,
            pedestals,
            tombstones,
            parterres,
            name_left,
            name_right,
        };

        $.fancybox.open({
            src  : '#popup-qiuck-order',
            type : 'inline',
        });

        // удаление товара из быстрого заказа
        $('#popup-qiuck-order .cart--products__close').on('click', function(event) {
            let itemCard = $(this).closest(".cart--products__container");
            let product_id = $(itemCard).find("[type='hidden']").val();
            let monument_id = $(itemCard).find(".hidden-monument_id").val() ? $(itemCard).find(".hidden-monument_id").val() : idProductInThisPage;

            let removeProductData = {
                product_id,
                monument_id,
                _token: $('meta[name="csrf-token"]').attr('content')
            }

            // console.log(removeProductData);

            $.ajax({
                url: "/cart/removeItem",
                type: "POST",
                data: removeProductData,
                success: function (response) {
                    // console.log(response);
                    $(itemCard).remove();
                },
                error: function (response) {
                    console.log("error", response);
                },
            });
        });

        //изменение количества товара в окне быстрого заказа
        $('#popup-qiuck-order .cart--item__select').on('change', function(event) {
            let products_count = $(this).val();
            let itemCard = $(this).closest(".cart--products__container");
            let product_id = $(itemCard).find(".hidden-product_id").val() ? $(itemCard).find(".hidden-product_id").val() : idProductInThisPage;
            let monument_id = $(itemCard).find(".hidden-monument_id").val() ? $(itemCard).find(".hidden-monument_id").val() : idProductInThisPage;

            let actualPrice = $(itemCard).find(".hidden-actual-price").val();
            let oldPrice = $(itemCard).find(".hidden-old-price").val();

            let actualPriceView = $(itemCard).find(".quick-order-actual-price");
            let oldPriceView = $(itemCard).find(".quick-order-old-price");

            let actualMultiplier = products_count * actualPrice;
            let oldMultiplier = products_count * oldPrice;

            $(actualPriceView).text(actualMultiplier);
            $(oldPriceView).text(oldMultiplier);

            let addProductData = {
                product_id,
                monument_id,
                products_count,
                _token: $('meta[name="csrf-token"]').attr('content')
            }
            // console.log(addProductData);

            $.ajax({
                url: "/cart/changeCountItem",
                type: "POST",
                data: addProductData,
                success: function (response) {
                    // console.log("success");
                },
                error: function (response) {
                    console.log("error", response);
                },
            });
        });

        $('#popup-qiuck-order-submit').on('click', function(event) {

            event.preventDefault();

            let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            formData.name = $('#popup-qiuck-order-name').val();
            formData.email = $('#popup-qiuck-order-email').val();
            formData.phone = $('#popup-qiuck-order-phone').val();

            if (formData.name === "") {
                toastr.error("Заполните Ваше имя",'Следующий шаг не доступен!');
                return false;
            }
            if (formData.email === "") {
                toastr.error("Заполните Ваш E-mail, для обратной связи",'Следующий шаг не доступен!');
                return false;
            }
            if (reg.test(formData.email) == false) {
                toastr.error("Введите корректный E-mail формата user@example.com",'Следующий шаг не доступен!');
                return false
            }
            if (formData.phone === "") {
                toastr.error("Заполните Ваш телефон, для обратной связи",'Следующий шаг не доступен!');
                return false;
            }
            if (!$('#terms').prop('checked')) {
                toastr.error("Согласитесь с условиями Публичной оферты и Пользовательским соглашением",'Следующий шаг не доступен!');
                return false;
            }

            console.log(formData);

            // $.ajax({
            //     url: "/fast_order",
            //     type: "POST",
            //     data: formData,
            //     success: function (response) {
            //         // console.log(response);
            //         window.location = response;

            //     },
            //     error: function (response) {
            //         console.log("error", response);
            //         window.location = response;
            //     },
            // });
        })

    });

    // Для отправки даных при ОБЫчНОМ ЗАКАЗЕ
    tagSection.on("click", "#submit_order", function (event) {

        event.preventDefault();

        console.log(7987);

        let paramsObj = {
            is_fast_order : false,
            name_color_id: 0,
            epitaph_color_id: 0,
            left_stella_image_id: 0,
            left_stella_color_id: 0,
            left_tombstone_image_id: 0,
            left_tombstone_color_id: 0,
            right_epitaph: "empty",
            right_stella_image_id: 0,
            right_stella_color_id: 0,
            right_tombstone_image_id: 0,
            right_tombstone_color_id: 0,
            dates_color_id: 0,
            beautification_id: 0,
            stella_id: $('[name="stella_id"]').val() ? +$('[name="stella_id"]').val() : 0,
            medallion_id: $('[name="medallion_id"]').val() ? +$('[name="medallion_id"]').val() : 0,
            engraving_id: $('[name="engraving_id"]').val() ? +$('[name="engraving_id"]').val() : 0,
            on_pedestal_epitaph: "empty",
            left_epitaph: "empty",
            _token: $('[name="_token"]').val(),
            product_id: +idProductInThisPage,
        };

        let reqaredInputs = $('.input-requared');

        let stella = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let pedestals = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let tombstones = {height: 0, width: 0, thickness: 0, material: 0, id: 0};
        let parterres = {height: 0, width: 0, thickness: 0, material: 0, id: 0};

        stella.id = +$('[name="stella_id"]').val();
        pedestals.id = +$('[name="pedestals_id"]').val();
        tombstones.id = +$('[name="tombstones_id"]').val();
        parterres.id = +$('[name="parterres_id"]').val();

        let name_left = "empty";
        let name_right = "empty";

        let messageForEmptyInput = `Для перехода на следующий шаг заполните обязательные поля:
        - Фамилия, Имя, Отчество;
        - Дата рожденияи дата смерти!`

        reqaredInputs.each((index, item) => {

            if ($(item).val() == "") {
                // console.log("input is empty");
                toastr.error(messageForEmptyInput,'Следующий шаг не доступен!');
            }
        })

        addValueToFastOrderForm('.stella__params .active input', stella);
        addValueToFastOrderForm('.pedestals__params .active input', pedestals);
        addValueToFastOrderForm('.pedestals__params [name="id"]', pedestals);
        addValueToFastOrderForm('.tombstones__params .active input', tombstones);
        addValueToFastOrderForm('.parterres__params .active input', parterres);
        addValueToFastOrderForm('.beautification__params .active input', paramsObj);
        addValueToFastOrderForm('.initials__params .active input', paramsObj);
        addValueToFastOrderForm('.date__params .active input', paramsObj);
        addValueToFastOrderForm('.date-input', paramsObj);
        addValueToFastOrderForm('.epitaph__params .active input', paramsObj);
        addValueToFastOrderForm('.epitaph-input', paramsObj);
        addValueToFastOrderForm('.stella_image__params .active input', paramsObj);
        addValueToFastOrderForm('.tombstone_image__params .active input', paramsObj);

        // имена усопших
        if ($('#surname_left').val().length && $('#name_left').val().length && $('#patronymic_left').val().length) {
            name_left = `${$('#surname_left').val()} ${$('#name_left').val()} ${$('#patronymic_left').val()}`;
        }
        // дополнительная проверка для правого имени, т.к. на одиночке их нет
        if ($('#surname_right').length && $('#name_right').length && $('#patronymic_right').length) {
            if ($('#surname_right').val().length && $('#name_right').val().length && $('#patronymic_right').val().length) {
                name_right = `${$('#surname_right').val()} ${$('#name_right').val()} ${$('#patronymic_right').val()}`;
            }
        }


        // проверка выбора цвета для ФИО усопшего
        if (name_left !== "empty" && paramsObj.name_color_id === 0) {
            toastr.error("Выберите цвет шрифта для имени усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для памятных дат усопшего
        if (paramsObj.left_date_of_birth !== "" && paramsObj.left_date_of_die !== "" && paramsObj.dates_color_id === 0) {
            toastr.error("Выберите цвет шрифта для памятных дат усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для эпитафии
        if ((paramsObj.left_epitaph !== "empty" || paramsObj.on_pedestal_epitaph !== "empty") && paramsObj.epitaph_color_id === 0) {
            toastr.error("Выберите цвет шрифта для эпитафии усопшего",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для рисунка на стелу
        if (paramsObj.left_stella_image_id !== 0 && paramsObj.left_stella_color_id === 0) {
            toastr.error("Выберите цвет для рисунка на стелу",'Следующий шаг не доступен!');
            return false;
        }

        // проверка выбора цвета для рисунка на надгробную плиту
        if (paramsObj.left_tombstone_image_id !== 0 && paramsObj.left_tombstone_color_id === 0) {
            toastr.error("Выберите цвет для рисунка на надгробную плиту",'Следующий шаг не доступен!');
            return false;
        }

        let formData = {
            ...paramsObj,
            stella,
            pedestals,
            tombstones,
            parterres,
            name_left,
            name_right,
        };

        // console.log("formData", formData);

        $.ajax({
            url: "/save_product",
            type: "POST",
            data: formData,
            success: function (response) {
                // console.log(response);
                window.location = response;
            },
            error: function (response) {
                console.log("error", response);
            },
        });
    });

    // Изменение текстовых полей
    tagSection.on("blur", ".product--text-input", function(event) {
        let obj = $(this).data("element");
        let price = $(`.${obj}__params [name="characters_price"]`).val();
        let color = $(`.${obj}__params .color__size-link.active`);

        setPriceTextInput(obj, price);
        setValueFormTextInput(obj);

        if (!$(color).length) {
            $(`.${obj}__params .color__size-link`)[0].click();
        }
    });

    // Изменение стоимости цвета
    tagSection.on("click", ".color__size-item .color__size-link", function () {

        let obj = $(this).data("element");
        let positionObj = $(this).data("position");
        let elemPrice = $(`.${obj}__size-link.active`).data("price")
        let colorPrice = $(this).data("price");

        let link = $(this);
        let divLi = link.parent(".color__size-item");
        let allLiRow = divLi.parent(".color__size");
        let input = link.find("input");

        // console.log("OBJ", obj);

        if ($(link).hasClass('active')) {
            clearLink(allLiRow, "color"); /** очистка */
            colorPrice = 0;

        } else {
            clearLink(allLiRow, "color"); /** очистка */
            setActiveLink(input, link); /** назначение */
        }

        // console.log(colorPrice, obj, positionObj);

        if (!positionObj) {
            setPriceTextInput(obj, colorPrice);
            setValueFormTextInput(obj);
            $(`.${obj}__params [name="characters_price"]`).val(colorPrice);
            $(`.${obj}__params .price-char`).text(colorPrice);
        } else {
            $(`.${obj}__params [name="${positionObj}_characters_price"]`).val(colorPrice);
            $(`.${obj}__params .${positionObj}-price-char`).text(colorPrice);
            setPriceImageInput(obj, positionObj, elemPrice, colorPrice);
        }

    });

    // Изменение изображений для стелы и плиты в том числе и в модальном окне
    tagMaterial.on("click", ".image__size-item .image__size-link", function () {

        let obj = $(this).data("element");
        let positionObj = $(this).data("position");
        let priceObj = $(this).data("price");
        let colorObj = $(`.color__size-link.active[data-position="${positionObj}"][data-element="${obj}"]`).data("price") ?
                        $(`.color__size-link.active[data-position="${positionObj}"][data-element="${obj}"]`).data("price") :
                        0;

        let descriptionObj = $(this).data("description") ? $(this).data("description") : "";

        let link = $(this);
        let input = link.find("input");

        if (link.hasClass('active')) {

            setValueFormImageInput(obj);
            clearActiveValueFormImageInput(obj, positionObj, obj);/* очистка */
            setPriceImageInput(obj, positionObj, 0, 0);

            $(`.color__size-link[data-position="${positionObj}"][data-element="${obj}"].active`).removeClass("active");
            $(`.color__size-link[data-position="${positionObj}"][data-element="${obj}"].active`).find("input").attr("checked", false);
        } else {

            // Если не выбран цвет, выбираем его
            if (!colorObj) {
                $(`.color__size-link[data-position="${positionObj}"][data-element="${obj}"]`).eq(0).addClass("active");
                $(`.color__size-link[data-position="${positionObj}"][data-element="${obj}"]`).eq(0).find("input").attr("checked", true);

                colorObj = $(`.color__size-link.active[data-position="${positionObj}"][data-element="${obj}"]`).data("price")
            }

            clearActiveValueFormImageInput(obj, positionObj, obj);/* очистка */
            setActiveLink(input, link); /** назначение */
            setPriceImageInput(obj, positionObj, priceObj, colorObj);
            setValueFormImageInput(obj, descriptionObj);
        }

    });


function setDefaultActiveValue (selector, obj = "stele") {
    for(let key of $(`.${selector}__params .product--row__params`)) {

        let keyActive = $(key).find(".product--row__label").find("." + obj + "__size-link").hasClass("active");
        let isRemoveInput = $(key).find('[name="is_remove"]').length;

        if (keyActive) {
            continue;

        } else if (isRemoveInput) {
            continue;

        } else {
            $(key)
                .find(".product--row__label")
                .eq(0)
                .find("." + obj + "__size-link")
                .addClass("active");

            $(key)
                .find(".product--row__label")
                .eq(0)
                .find("." + obj + "__size-link input")
                .attr("checked", true);
        }
    }
}

function clearLink(ul, obj = "stele") {
    ul.children("." + obj + "__size-item").each(function () {
        let link = $(this).children("." + obj + "__size-link");
        if (link.hasClass("active")) {
            link.removeClass("active");
        }
    });
}

function setActiveLink(input, link) {
    if (input.prop("checked") === false) {
        input.prop("checked", true);
    }
    if (!link.hasClass("active")) {
        link.addClass("active");
    }
}

function sumTotalPriceEquipment() {
    let stellaPrice = $('[name="stella_price"]').val() ? Number($('[name="stella_price"]').val()) : 0;
    let pedestalPrice = $('[name="pedestals_price"]').val() ? Number($('[name="pedestals_price"]').val()) : 0;
    let parterrePrice = $('[name="parterres_price"]').val() ? Number($('[name="parterres_price"]').val()) : 0;
    let tombstonePrice = $('[name="tombstones_price"]').val() ? Number($('[name="tombstones_price"]').val()) : 0;
    let beautificationPrice = $('[name="beautification_price"]').val() ? Number($('[name="beautification_price"]').val()) : 0;
    let sarcophagusPrice = $('[name="sarcophagus_price"]').val() ? Number($('[name="sarcophagus_price"]').val()) : 0;

    totalValueEquipment(
        stellaPrice,
        pedestalPrice,
        parterrePrice,
        tombstonePrice,
        beautificationPrice,
        sarcophagusPrice
    );

    sumTotalValue();
}

function sumTotalPriceRegistration() {

    let medallionPrice = Number($('[name="medallion_price"]').val());
    let engravingPrice = Number($('[name="engraving_price"]').val());
    let initialsPrice = Number($('[name="initials_price"]').val());
    let datePrice = Number($('[name="date_price"]').val());
    let epitaphPrice = Number($('[name="epitaph_price"]').val());
    let stellaImagePrice = Number($('[name="stella_image_price"]').val());
    let tombstoneImagePrice = Number($('[name="tombstone_image_price"]').val());

    totalValuePortrait(medallionPrice, engravingPrice);

    totalValueRegistration(
        medallionPrice,
        engravingPrice,
        initialsPrice,
        datePrice,
        epitaphPrice,
        stellaImagePrice,
        tombstoneImagePrice
    );

    sumTotalValue();
}

function totalValueEquipment(stella, pedestal, parterre, tombstone, beautification, sarcophagus) {
    let total = Number(stella + pedestal + parterre + tombstone + beautification + sarcophagus);

    $('[name="final--price--equipment"]').val(total);
    $(".product--details__price .price--val").each((index, elem) => {
        $(elem).text(total);
    })
}

function totalValueRegistration(medallion, engraving, initialsPrice, datePrice, epitaphPrice, stellaImagePrice, tombstoneImagePrice) {
    let total = Number(medallion + engraving + initialsPrice + datePrice + epitaphPrice + stellaImagePrice + tombstoneImagePrice);
    $('[name="final--price--registration"]').val(total);
    $(".tab__price-amount--decor").each((index, elem) => {
        $(elem).text(total);
    })
}

function totalValuePortrait(medallion, engraving) {
    let total = Number(medallion + engraving);
    $('[name="portrait_price"]').val(total);
    $("#portrait__name .elem-price").text(total);
}

function sumTotalValue() {
    let equipment = +$('[name="final--price--equipment"]').val();
    let registration = +$('[name="final--price--registration"]').val();
    totalSum = equipment + registration;

    $('[name="final--price"]').val(totalSum);
    $('.final--price').text(totalSum);
}

function clearActiveValue(obj, param = "stele") {
    $("." + obj + "__params").find("." + param + "__size-link").each(function (index, item) {
        $(item).removeClass("active");
        $(item).find("input").attr("checked", false);
    });
}
function clearActiveValueFormImageInput(obj, position, param = "stele") {
    $("." + obj + "__params").find("." + obj + "-img-" + position).find("." + param + "__size-link").each(function (index, item) {
        $(item).removeClass("active");
        $(item).find("input").attr("checked", false);
    });
}

function setPrice(obj, price = 0) {

    price = +price

    if (obj != "beautification") {
        $('[name="' + obj + '_price"]').val(price);
    }
    $("#" + obj + "__name .elem-price").text(price);

}

// здесь устанавливаются параметры для тела аккордиона и для 3д модели
async function setParamsForObjInBody(obj, getFirstParams) {

    let linkTexture = null;

    $(`#height-${getFirstParams.height}[data-element=${obj}]`).addClass("active");
    $(`#height-${getFirstParams.height}[data-element=${obj}]`).find("input").attr("checked", true);
    $(`#width-${getFirstParams.width}[data-element=${obj}]`).addClass("active");
    $(`#width-${getFirstParams.width}[data-element=${obj}]`).find("input").attr("checked", true);
    $(`#thickness-${getFirstParams.thickness}[data-element=${obj}]`).addClass("active");
    $(`#thickness-${getFirstParams.thickness}[data-element=${obj}]`).find("input").attr("checked", true);

    $(`[name="${obj}_id"]`).val(getFirstParams.id);

    if (obj == 'parterres') {
        $(`#thickness-${getFirstParams.thickness_size}[data-element=${obj}]`).addClass("active");
        $(`#thickness-${getFirstParams.thickness_size}[data-element=${obj}]`).find("input").attr("checked", true);
    }

    if (getFirstParams.material) {
        $(`#material-${getFirstParams.material}[data-element=${obj}]`).addClass("active");
        $(`#material-${getFirstParams.material}[data-element=${obj}]`).find("input").attr("checked", true);

        linkTexture = $(`#material-${getFirstParams.material}.active .stele__size-img`).attr('src');
    } else {
        $(`#material-${getFirstParams.material_id}[data-element=${obj}]`).addClass("active");
        $(`#material-${getFirstParams.material_id}[data-element=${obj}]`).find("input").attr("checked", true);

        linkTexture = $(`#material-${getFirstParams.material_id}.active .stele__size-img`).attr('src');
    }

    let texture = `./../..${linkTexture}`;
    let new_mtl;

    if (linkTexture) {
        let txt = await new THREE.TextureLoader().load(texture);

        txt.repeat.set(1, 1, 1);
        txt.wrapS = THREE.RepeatWrapping;
        txt.wrapT = THREE.RepeatWrapping;

        new_mtl = new THREE.MeshPhongMaterial({
            map: txt,
            shininess: 10,
        });
    } else {
        new_mtl = new THREE.MeshPhongMaterial({
            color: "0xfa688a",
            shininess: 10,
        });
    }

    selectOption(obj);
    setMaterial(theModel, obj, new_mtl);

    // Сразу поменяем превью в head секции, это сделано для того чтоб не искать

}
function setParamsForMedalEngr(obj, data = {type_id: 0, size_id:0, form_id: 0, material_id:0}) {

    // console.log(obj, data);
    $(`#${obj}_form-${data.type_id}`).addClass("active");
    $(`#${obj}_form-${data.type_id}`).find("input").attr("checked", true);
    $(`#${obj}_size-${data.size_id}`).addClass("active");
    $(`#${obj}_size-${data.size_id}`).find("input").attr("checked", true);

    $(`#${obj}_form-${data.form_id}`).addClass("active");
    $(`#${obj}_form-${data.form_id}`).find("input").attr("checked", true);
    $(`#${obj}_size-${data.size_id}`).addClass("active");
    $(`#${obj}_size-${data.size_id}`).find("input").attr("checked", true);
    $(`#${obj}_material-${data.material_id}`).addClass("active");
    $(`#${obj}_material-${data.material_id}`).find("input").attr("checked", true);
}

function setParamsForObjInHead(obj, params = {height: 0, width: 0, thickness:0, thickness_size:0}) {

    let linkImage = null;

    $("." + obj + "__params").each((index, elem) => {
        $(elem).children(".product--tab__header").find(".header--info__params").each((subIndex, subElem) => {

            $(subElem).find("." + obj + "--height").text(" " + params.height + ", ");
            $(subElem).find("." + obj + "--width").text(" " + params.width + ", ");
            $(subElem).find("." + obj + "--thickness").text(" " + params.thickness);

            if (obj == 'parterres') {
                $(subElem).find("." + obj + "--thickness").text(" " + params.thickness_size);
            }
        });

        if (params.material) {
            linkImage = $(`#material-${params.material}.active .stele__size-img`).attr('src');
        } else {
            linkImage = $(`#material-${params.material_id}.active .stele__size-img`).attr('src');
        }

        $(elem).find("." + obj + "--material").each((subIndex, subElem) => {
            $(subElem).attr('src', linkImage);
        })
    });
}

function setSizesForAllObjects(response) {
    // console.log("function-stella", response);

    const namesPartsAnObject = ["stella", "pedestals", "parterres", "tombstones",];

    // эти переменные используются при формировании с помощью eval()
    let stellaResp = response.modifier_size.Stella,
        tombstonesResp = response.modifier_size.Tombstones,
        parterresResp = response.modifier_size.Parterres,
        pedestalsResp = response.modifier_size.Pedestals;

    $(namesPartsAnObject).each((index, elem) => {

        // console.log(elem);

        // Очистка всех активных значений
        clearActiveValue(elem);

        // console.log(eval(`${elem}Resp`));
        // console.log(eval(`response.modifier_size.${elem}`));
        // console.log(eval(`response.modifier_size`));

        // Установка цен
        setPrice(elem, eval(`${elem}Resp`).price);

        // Установка значений для окна параметра
        setParamsForObjInBody(elem, eval(`${elem}Resp`));

        // Установка значений для шапки акардиона
        setParamsForObjInHead(elem, eval(`${elem}Resp`));

        // установка id для элементов
        $(`[name="${elem}_id"]`).val(eval(`${elem}Resp`).id);

        // Изменение размеров элементов
        setModelSize(elem, eval(`${elem}Resp`));
    })
}

function setModelSize(model, objSize) {

    let height = objSize.height / eval(`${model}FirstParmsHeight`);
    let width = objSize.width / eval(`${model}FirstParmsWidth`);
    let thickness = objSize.thickness / eval(`${model}FirstParmsThickness`);

    // console.log(model, height, width, thickness, objSize.height, objSize.width, objSize.thickness, eval(`${model}FirstParmsHeight`), eval(`${model}FirstParmsWidth`), eval(`${model}FirstParmsThickness`));

    if (model == 'pedestals') {
        // для стелы
        positionStellaFromPedestal_Y = firstSize3DModel.pedestals.size.y * width - firstSize3DModel.pedestals.size.y;
        stella.position.y = positionStellaFromPedestal_Y + positionStellaFormScale_Y + yOffset;

        // для плиты и цветника
        positionTombstoneAndParteFromPedestal_Z = (firstSize3DModel.pedestals.size.z / 2) * thickness - (firstSize3DModel.pedestals.size.z / 2);

        tombstones.position.z = positionTombstoneAndParteFromPedestal_Z + positionTombstoneFormScale_Z;
        parterres.position.z = positionTombstoneAndParteFromPedestal_Z + positionParterresFormScale_Z;

        pedestals.scale.set(height, width, thickness);
    }

    if (model == 'tombstones') {
        positionTombstoneFormScale_Y = -firstSize3DModel.parterres.size.y * thickness + firstSize3DModel.parterres.size.y;
        positionTombstoneFormScale_Z = -(firstSize3DModel.pedestals.size.z / 2) * height + (firstSize3DModel.pedestals.size.z / 2);

        tombstones.scale.set(width, thickness, height);
        tombstones.position.y = positionTombstoneFormScale_Y + positionTombstoneFormParterres_Y + yOffset;
        tombstones.position.z = positionTombstoneFormScale_Z + positionTombstoneAndParteFromPedestal_Z;
    }

    if (model == 'parterres') {
        // в размерах для цветника приходит строка ввиде "5х8", поэтому мы ориентируемся на первое значение обозначающее высоту модели
        thickness = objSize.thickness_size.split("x")[0] / eval(`${model}FirstParmsThickness`).split("x")[0];

        positionTombstoneFormParterres_Y = firstSize3DModel.parterres.size.y * thickness - firstSize3DModel.parterres.size.y;
        positionParterresFormScale_Z = -(firstSize3DModel.pedestals.size.z / 2) * height + (firstSize3DModel.pedestals.size.z / 2);
        positionParterresFormScale_Y = firstSize3DModel.parterres.size.y * thickness - firstSize3DModel.parterres.size.y;

        parterres.scale.set(width, thickness, height);
        tombstones.position.y = positionTombstoneFormScale_Y + positionTombstoneFormParterres_Y + yOffset;
        parterres.position.z = positionParterresFormScale_Z + positionTombstoneAndParteFromPedestal_Z;
    }

    if (model == 'stella') {
        positionStellaFormScale_Y = -firstSize3DModel.pedestals.size.y * height + firstSize3DModel.pedestals.size.y;

        stella.position.y = positionStellaFromPedestal_Y + positionStellaFormScale_Y + yOffset;

        stella.scale.set(width, height, thickness);
    }
}

function addValueToFastOrderForm(selector, obj) {
    $(selector).each((index, item) => {
        let activeParamVal;
        // let activeParamVal = $(item).val();
        let activeParamKey = $(item).attr("name");

        if ($(item).val()) {
            activeParamVal = $(item).val();
        } else {
            activeParamVal = "empty";
        }

        // console.log(activeParamKey, activeParamVal);
        if (isNaN(activeParamVal)) {
            obj[activeParamKey] = activeParamVal;

        } else {
            obj[activeParamKey] = +activeParamVal;
        }



    });
}

function setPriceTextInput(nameSection, price) {
    // console.log(nameSection, price);

    let firstPriceCahr = price === "" ?
        $(`.${nameSection}__params [name="characters_price"]`).val() :
        price;
    // console.log(nameSection, firstPriceCahr);

    let countChar = 0;
    let totalPriceInitials;

    $(`.${nameSection}-input`).each((index, item) => {
        countChar = countChar + $(item).val().length;
    });

    totalPriceInitials = firstPriceCahr * countChar;
    setPrice(nameSection, totalPriceInitials);
    sumTotalPriceRegistration();
};

function setValueFormTextInput(nameSection) {
    $(`.${nameSection}-input`).each((index, item) => {

        let searchId = $(item).attr("id");
        // console.log(searchId, $(`.${searchId}`));

        $(`.${searchId}`).each((suIindex, subItem) => {
            $(subItem).text($(item).val());
        });
    });
}

function setValueFormImageInput(nameSection, searchDescription = "") {

    $(`.${nameSection}__size-link.active`).each((index, item) => {

        let searchPosition = $(item).data('position');

        $(`.${searchPosition}-${nameSection}`).each((suIindex, subItem) => {
            $(subItem).text(searchDescription);
        });
    });
}

function setPriceImageInput(nameSection, position, imgPrice = 0, colorPrice = 0) {

    // console.log(imgPrice, colorPrice);

    let totalPriceInPosition = imgPrice * colorPrice;
    // console.log(totalPriceInPosition , imgPrice, colorPrice);

    $('[name="' + nameSection + "-" + position + '_price"]').val(totalPriceInPosition);
    $("#" + nameSection + "__name ." + position + "-price").text(colorPrice);

    let leftSectionPrice = +$(`[name="${nameSection}-left_price"]`).val();
    let rightSectionPrice = +$(`[name="${nameSection}-right_price"]`).val();

    let sectionPrice = leftSectionPrice + rightSectionPrice;

    // console.log(sectionPrice,leftSectionPrice , rightSectionPrice);

    $(`[name="${nameSection}_price"]`).val(sectionPrice);
    $("#" + nameSection + "__name ." + "elem-price").text(sectionPrice);

    sumTotalPriceRegistration();
};


function setFirstSizesForAllObjects(response) {
    // console.log("function-stella", response);

    const namesPartsAnObject = ["stella", "pedestals", "parterres", "tombstones",];

    // эти переменные используются при формировании с помощью eval()
    let stellaResp = response.Stella,
        tombstonesResp = response.Tombstones,
        parterresResp = response.Parterres,
        pedestalsResp = response.Pedestals;

    $(namesPartsAnObject).each((index, elem) => {
        let linkImage = null;

        // Установка значений для окна параметра
        $(`#height-${eval(`${elem}Resp`).height}[data-element=${elem}]`).addClass("active");
        $(`#height-${eval(`${elem}Resp`).height}[data-element=${elem}]`).find("input").attr("checked", true);
        $(`#width-${eval(`${elem}Resp`).width}[data-element=${elem}]`).addClass("active");
        $(`#width-${eval(`${elem}Resp`).width}[data-element=${elem}]`).find("input").attr("checked", true);
        $(`#thickness-${eval(`${elem}Resp`).thickness}[data-element=${elem}]`).addClass("active");
        $(`#thickness-${eval(`${elem}Resp`).thickness}[data-element=${elem}]`).find("input").attr("checked", true);
    
        $(`[name="${elem}_id"]`).val(eval(`${elem}Resp`).id);
    
        if (elem == 'parterres') {
            $(`#thickness-${eval(`${elem}Resp`).thickness_size}[data-element=${elem}]`).addClass("active");
            $(`#thickness-${eval(`${elem}Resp`).thickness_size}[data-element=${elem}]`).find("input").attr("checked", true);
        }
    
        if (eval(`${elem}Resp`).material) {
            $(`#material-${eval(`${elem}Resp`).material}[data-element=${elem}]`).addClass("active");
            $(`#material-${eval(`${elem}Resp`).material}[data-element=${elem}]`).find("input").attr("checked", true);
            linkImage = $(`#material-${eval(`${elem}Resp`).material}.active .stele__size-img`).attr('src');

        } else {
            $(`#material-${eval(`${elem}Resp`).material_id}[data-element=${elem}]`).addClass("active");
            $(`#material-${eval(`${elem}Resp`).material_id}[data-element=${elem}]`).find("input").attr("checked", true);
            linkImage = $(`#material-${eval(`${elem}Resp`).material_id}.active .stele__size-img`).attr('src');
        }

        $(`.preview--material.${elem}--material`).each((index, item) => {
            $(item).attr('src', linkImage)
        })
    });
}



});
