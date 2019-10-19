<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'uses' => 'FrontController@index',
    'as'   => '/'
]);

Route::get('/showing/category/{id}/{name}', [
    'uses' => 'FrontController@showCategory',
    'as'   => 'show-category'
]);

Route::get('/product/single/{id}/{name}', [
    'uses' => 'FrontController@productSingle',
    'as'   => 'product-single'
]);

// Cart=========>>>>>
Route::get('/cart/add', 'CartController@addToCart')->name('add-to-cart');

Route::get('/cart/show', [
    'uses' => 'CartController@showCart',
    'as'   => 'show-cart',
    'middleware' => 'cartCount'
]);

Route::get('/cart/remove/{rowId}', [
    'uses' => 'CartController@cartRemove',
    'as'   => 'cart-remove'
]);

Route::post('/cart/update', [
    'uses' => 'CartController@cartUpdate',
    'as'   => 'cart-update'
]);

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//Customer============>>>>
Route::get('sing-up', [
    'uses' => 'CustomerController@showRegistrationForm',
    'as'   => 'customer-register-form',
    'middleware' => 'canGo'
]);

//Route::get('/mail', function (){
//    return view('mails.test');
//});

Route::post('sing-up', [
    'uses' => 'CustomerController@customerRegister',
    'as'   => 'customer-register'
]);

Route::post('customer/logout', [
    'uses' => 'CustomerController@customerLogout',
    'as'   => 'customer-logout'
]);

Route::post('customer/login', [
    'uses' => 'CustomerController@customerLogin',
    'as'   => 'customer-login'
]);

Route::get('shipping/checkout', [
    'uses' => 'ShippingCheckoutController@shippingCheckout',
    'as'   => 'shipping-checkout',
    'middleware' => 'customerRedirect'
]);

Route::post('place/order', [
    'uses' => 'ShippingCheckoutController@placeOrder',
    'as'   => 'place-order'
]);


//Admin=============>>>>>>
Route::resource('categories', 'CategoriesController');
Route::get('categories/{id}/status', 'CategoriesController@status')->name('categories.status');


//Brand======>>>>>>>
Route::get('/brand', [
    'uses' => 'BrandController@index',
    'as'   => 'brand'
]);

Route::post('/brand', [
    'uses' => 'BrandController@store',
    'as'   => 'brand.store'
]);

Route::get('/brand/{brand}/edit', [
    'uses' => 'BrandController@edit',
    'as'   => 'brand.edit'
]);

Route::patch('/brand/{brand}', [
    'uses' => 'BrandController@update',
    'as'   => 'brand.update'
]);

Route::get('/brand/{brand}/status', [
    'uses' => 'BrandController@status',
    'as'   => 'brand.status'
]);

Route::post('/brand/restore/{brand}', [
    'uses' => 'BrandController@restore',
    'as'   => 'brand.restore'
]);

Route::post('/brand/confirm/delete/{brand}', [
    'uses' => 'BrandController@confirmDelete',
    'as'   => 'brand.confirm.delete'
]);

Route::delete('/brand/{brand}', [
    'uses' => 'BrandController@destroy',
    'as'   => 'brand.destroy'
]);

Route::get('/product', [
    'uses' => 'ProductsController@index',
    'as'   => 'product'
]);

Route::post('/product', [
    'uses' => 'ProductsController@store',
    'as'   => 'product.store'
]);

Route::get('/product/edit/{product}', [
    'uses' => 'ProductsController@edit',
    'as'   => 'product.edit'
]);

Route::post('/product/update', [
    'uses' => 'ProductsController@update',
    'as'   => 'product.update'
]);

Route::delete('/product/{product}', [
    'uses' => 'ProductsController@delete',
    'as'   => 'product.delete'
]);

//Order=============>>>>>>
Route::get('orders', [
    'uses' => 'OrderController@order',
    'as' => 'manage-order'
]);

Route::get('view/orders/{id}', [
    'uses' => 'OrderController@viewOrder',
    'as' => 'view-order'
]);

Route::get('orders/invoice/{id}', [
    'uses' => 'OrderController@orderInvoice',
    'as' => 'order-invoice'
]);
