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

//Типы продуктов
Breadcrumbs::for('product', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Каталог');

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

//Карточка памятника
Breadcrumbs::for('productcard-1-1', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Одиночные-простые',route('products.type',[1,1]));

    $breadcrumbs->push('Продукт');

});
Breadcrumbs::for('productcard-1-2', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Одиночные-комплексы',route('products.type',[$id = 1,2]));

    $breadcrumbs->push('Продукт');

});
Breadcrumbs::for('productcard-1-3', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Одиночные-саркофаги',route('products.type',[$id = 1,3]));

    $breadcrumbs->push('Продукт');

});
Breadcrumbs::for('productcard-2-4', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Двойные-простые',route('products.type',[$id = 2,4]));

    $breadcrumbs->push('Продукт');

});
Breadcrumbs::for('productcard-2-5', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Двойные-комплексы',route('products.type',[$id = 2,5]));

    $breadcrumbs->push('Продукт');

});
Breadcrumbs::for('productcard-2-6', function ($breadcrumbs) {

    $breadcrumbs->parent('home');

    $breadcrumbs->push('Продукция',route('products'));

    $breadcrumbs->push('Двойные-саркофаги',route('products.type',[$id = 2,6]));

    $breadcrumbs->push('Продукт');

});
