<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','Home\HomeController@index')->name('home');
Route::get('/contact','Home\ContactController@index')->name('contact_page');
Route::post('/send.question','Home\ContactController@sendQuestion')->name('send.question');
Route::get('/news','Home\NewsController@index')->name('news');
Route::get('/news/{id}','Home\NewsController@showById')->name('news.id');

Route::get('/service','Home\SiteServicesController@service')->name('service');
Route::get('/service/{id}','Home\SiteServicesController@showById')->name('service.id');

Route::get('/remuneration','Home\SiteServicesController@remuneration')->name('remuneration');
Route::get('/formalization','Home\SiteServicesController@formalization')->name('formalization');
//акции
Route::get('/offers','Home\SpecialOffersController@index')->name('special.offers');
Route::get('/offers/{id}','Home\SpecialOffersController@showById')->name('special.offers.id');

//товар
Route::prefix('products')->group(function(){
    Route::get('/','Home\ProductsController@index')->name('products');
    Route::get('/{type}/{subtype?}','Home\ProductsController@showByType')->name('products.type');
});
Route::get('/product/{id}','Home\ProductsController@showById')->name('products.id');
Route::post('/save_product','Home\MonumentController@saveProduct')->name('product.save');
Route::post('/fast_order','Home\MonumentController@fastOrder')->name('fast.order');
Route::post('/models_object','Home\MonumentController@getModels')->name('get.models');

//корзина
Route::prefix('cart')->group(function() {
    Route::post('/changeCountItem', 'Home\CartController@changeCountItem')->name('cart.change.count.item');
//    Route::get('/add', 'Home\CartController@getAddToCart')->name('cart.add');
//    Route::get('/addItem', 'Home\CartController@addOneItemToCart')->name('cart.add.item');
//    Route::get('/removeItem', 'Home\CartController@rmOneItemToCart')->name('cart.rm.item');
    Route::post('/removeItem', 'Home\CartController@RmItemToCart')->name('cart.rm.item');
    Route::get('/show', 'Home\CartController@getCart')->name('cart.show');
    Route::post('/checkout', 'Home\CartController@getCheckout')->name('cart.checkout');
});

Route::get('/get_img_type','Home\MonumentController@getImageType')->name('get_img_type');
Route::get('/get_price_engraving','Home\MonumentController@getPriceEngravingPortrait')->name('get_price_engraving');
Route::get('/get_price_medallion','Home\MonumentController@getPriceMedallion')->name('get_price_medallion');
Route::post('/sortProducts','Home\ProductsController@sort')->name('products.sort');
Route::post('/home.send.question','Home\HomeController@sendQuestion')->name('home.send.question');
Route::post('/set_attributes','Home\MonumentController@setAttributes')->name('set_attributes');
Route::get('/PrivacyPolicy','Home\HomeController@privacyPolicy')->name('privacy.policy');
Route::get('decor','Home\ProductsController@decor')->name('products.decor');
Route::get('/gallery','Home\GalleryController@index')->name('gallery');
Route::get('/reviews','Home\GalleryController@reviews')->name('reviews');
Route::get('/offerAgreement','Home\HomeController@offerAgreement')->name('offer.agreement');
Route::get('/aboutCompany','Home\HomeController@aboutCompany')->name('about.company');

 /* get exchange usd to rub*/
Route::get('/parse','Home\CurrencyController@index')->name('currency.rate');

//PAYMENT
Route::prefix('payment')->group(function () {
    Route::get('/fail','Home\PaymentController@getFail')->name('payment.fail');
    Route::get('/success','Home\PaymentController@getSuccess')->name('payment.success');
});
