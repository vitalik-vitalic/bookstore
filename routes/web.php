<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'BaseController@getIndex')->name('home');
Route::get('/home', 'BaseController@getIndex')->name('home');
Route::get('/shop', 'ShopController@getIndex')->name('shop');
Route::get('/shop/{id}', 'ShopProductsController@index');
Route::get('/search', 'ShopController@searchIndex');
Route::get('/searchAuthor/{authorFullName}', 'ShopController@searchAuthorIndex');
Route::get('/searchPublisher/{publisherName}', 'ShopController@searchPublisherIndex');

Route::get('/product-details/{id}', 'ProductDetailsController@getIndex')->name('product-details');
Route::post('/product-details/{id}', 'ProductDetailsController@postReview');

Route::get('/contact', 'ContactController@getIndex')->name('contact');
Route::post('/contact', 'ContactController@postIndex');

Route::get('/cart', 'CartController@getIndex')->name('cart');
Route::get('/deleteItemFromCart/{id}', 'CartController@getDelete');

Route::get('/wishlist', 'WishlistController@getIndex')->name('wishlist');
Route::get('/compare', 'CompareController@getIndex')->name('compare');
Route::get('/login-register', 'LoginRegisterController@getIndex')->name('login-register');
Route::get('/checkout', 'CheckoutController@getIndex')->name('checkout');
Route::post('/checkout/{userId}', 'CheckoutController@makeOrder');

Route::get('/blog', 'BlogController@getIndex')->name('blog');
Route::get('/blog-details', 'BlogDetailsController@getIndex')->name('blog-details');
Route::get('/my-account', 'MyAccountController@getIndex')->name('my-account');

Route::post('/ajax/product-detail', 'Ajax\ProductDetailsModalController@getIndex');

/*Route::get('/home', 'HomeController@index')->name('home');*/
