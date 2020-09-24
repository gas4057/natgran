<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

//главная страница
Breadcrumbs::register('home', function ($breadcrumbs) {

    $breadcrumbs->push('Главная', url('/'));

});
//галерея
Breadcrumbs::for('gallery', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Галерея');

});

//отзывы
Breadcrumbs::for('reviews', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Отзывы');

});

//новости
Breadcrumbs::for('news', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Новости',route('news'));

});

//новость
Breadcrumbs::for('newsById', function ($breadcrumbs) {

    $breadcrumbs->parent('news');

    $breadcrumbs->push('Новость');

});

//Контакты
Breadcrumbs::for('contacts', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Контакты');

});

//Акции
Breadcrumbs::for('offers', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Акции');

});

Breadcrumbs::for('offersId', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Акции',route('special.offers'));

    $breadcrumbs->push('Акция');

});

//Продукция
Breadcrumbs::for('products', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция');

});

//Продукт
Breadcrumbs::for('product', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Продукт');

});

//Политика конфиденцильаности
Breadcrumbs::for('PrivacyPolicy', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Политика конфиденциальности',route('privacy.policy'));
//    $breadcrumbs->push('Политика конфиденцильаности');

});

//О компании
Breadcrumbs::for('aboutCompany', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('О компании');

});

//ДОГОВОР ОФЕРТА
Breadcrumbs::for('offerAgreement', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Договор оферта');

});

//Корзина
Breadcrumbs::for('cart', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Корзина');

});

//Декор
Breadcrumbs::for('decor', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Декор');

});
//Декор.Ид
Breadcrumbs::for('decorById', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Декор',route('products.decor'));
    $breadcrumbs->push('Декор');

});

//Саркофаг
Breadcrumbs::for('sarcophagus', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Саркофаг');

});

//услуги
Breadcrumbs::for('service', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Услуги',route('service'));

});

//услуга
Breadcrumbs::for('serviceById', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Услуга');

});
//оформление
Breadcrumbs::for('formalization', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Оформление');

});
//оплата
Breadcrumbs::for('remuneration', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Оплата');

});
