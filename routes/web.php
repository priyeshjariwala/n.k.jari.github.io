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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'adminController@a_main')->name('home');

Route::get('/', 'HomeController@c_main')->name('c_main');

Route::get('c_main', 'HomeController@c_main')->name('c_main');

Route::get('c_product', 'HomeController@c_product')->name('c_product');

Route::get('about', 'HomeController@about')->name('about');

Route::get('contact', 'HomeController@contact')->name('contact');

Route::post('contact_post', 'HomeController@contact_post')->name('contact_post');

Route::get('designer', 'HomeController@designer')->name('designer');

Route::get('fancy', 'HomeController@fancy')->name('fancy');

Route::get('newitems', 'HomeController@newitems')->name('newitems');

Route::get('product_detail/{id}', 'homeController@product_detail')->name('product_detail');

Route::get('cart', 'HomeController@cart')->name('cart');

Route::post('addtocart_post', 'HomeController@addtocart_post')->name('addtocart_post');

Route::post('removeCartItem', 'HomeController@removeCartItem')->name('removeCartItem');

Route::get('orders', 'HomeController@orders')->name('orders');

Route::get('a_main', 'adminController@a_main')->name('a_main');

Route::get('clogo', 'adminController@clogo')->name('clogo');

Route::post('clogo_post', 'adminController@clogo_post')->name('clogo_post');

Route::get('passport', 'adminController@passport')->name('passport');

Route::post('passport_post', 'adminController@passport_post')->name('passport_post');

Route::get('cbanner', 'adminController@cbanner')->name('cbanner');

Route::post('cbanner_post', 'adminController@cbanner_post')->name('cbanner_post');

Route::get('banner_active/{id}/{active}', 'adminController@banner_active')->name('banner_active');

Route::get('d_banner/{id}', 'adminController@d_banner')->name('d_banner');

Route::get('cbanner2', 'adminController@cbanner2')->name('cbanner2');

Route::post('cbanner2_post', 'adminController@cbanner2_post')->name('cbanner2_post');

Route::get('cbanner2_active/{id}/{active}', 'adminController@cbanner2_active')->name('cbanner2_active');

Route::get('d_banner2/{id}', 'adminController@d_banner2')->name('d_banner2');

Route::get('cproduct', 'adminController@cproduct')->name('cproduct');

Route::get('view_product', 'adminController@view_product')->name('view_product');

Route::get('product_edit/{id}', 'adminController@product_edit')->name('product_edit');

Route::get('d_cproduct/{id}', 'adminController@d_cproduct')->name('d_cproduct');

Route::get('feedback', 'adminController@feedback')->name('feedback');

Route::get('d_feedback/{id}', 'adminController@d_feedback')->name('d_feedback');

Route::post('cproduct_post', 'adminController@cproduct_post')->name('cproduct_post');

Route::get('create_offer', 'adminController@create_offer')->name('create_offer');

Route::post('offers_reg', 'adminController@offers_reg')->name('offers_reg');

Route::get('offers_view', 'adminController@offers_view')->name('offers_view');

Route::get('offer_active/{id}/{active}','adminController@offer_active')->name('offer_active');

Route::get('view_orders', 'adminController@view_orders')->name('view_orders');

Route::get('address_fetch', 'placeorder@address_fetch')->name('address_fetch');

Route::get('address_delete/{id}', 'placeorder@address_delete')->name('address_delete');

Route::post('address', 'placeorder@address_submit')->name('address_submit');

Route::get('final_cart/{aid}','CartController@final_cart')->name('final_cart');

Route::post('/get_offer_code', 'CartController@get_offer_code')->name('get_offer_code');

Route::post('/payumoney','paymentController@payumoney')->name('payumoney');

Route::get('/payment_view_sucess','paymentController@payment_view_sucess')->name('payment_view_sucess');

Route::get('/payment_view_failure','paymentController@payment_view_failure')->name('payment_view_failure');

Route::post('payment_view_sucess','PaymentController@payment_view_sucess')->name('payment_view_sucess');

// ------------------------Customer login routes -----------------------------

Route::group(['middleware' => 'customer_auth'], function() {

Route::post('/customer/logout', 'customer\Auth\LoginController@logout')->name('web_customer_logout');

}); 

Route::group(['middleware' => 'customer_auth_guest'], function() {

Route::get('clogin', 'customer\Auth\LoginController@clogin')->name('clogin');

Route::get('/customer/login', 'customer\Auth\LoginController@showloginform')->name('web_customer_login');

Route::post('/customer/signin', 'customer\Auth\LoginController@login')->name('web_customer_login_submit');


Route::get('cregister', 'customer\Auth\RegisterController@cregister')->name('cregister');

Route::get('/customer/register', 'customer\Auth\RegisterController@showregisterform')->name('web_customer_register');

Route::post('/customer/register', 'customer\Auth\RegisterController@customer_register_submit')->name('web_customer_register_submit');	

}); 







Route::get('/customer/cust_home', 'customer\Auth\LoginController@cust_home')->name('cust_home');

// ---------Add to cart Using Cart Model -----------------------------------

Route::get('/main_layout','CartController@main_layout')->name('main_layout');

Route::get('/shop','CartController@shop')->name('shop');

Route::get('/cart_lases','CartController@cart_lases')->name('cart_lases');

Route::post('/add','CartController@add')->name('add');

Route::post('/store','CartController@store')->name('store');

Route::post('/update', 'CartController@update')->name('update');

Route::post('/remove', 'CartController@remove')->name('remove');

Route::post('/clear', 'CartController@clear')->name('clear');





					