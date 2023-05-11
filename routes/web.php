<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
// use Auth;
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
Auth::routes();
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::match(['get','post'],'/','AdminController@login');
    Route::group(['middleware'=>['admin']],function(){
        Route::get('/dashboard','AdminController@index');

        // For Category
        Route::get('/category','ProductCategoryController@index');
        Route::post('/add-category','ProductCategoryController@AddCategory');
        Route::post('/edit-category','ProductCategoryController@EditCategory');
        Route::post('/update-category','ProductCategoryController@UpdateCategory');
        Route::post('/delete-category','ProductCategoryController@DeleteCategory');
        // End Category Here

         // For Product
         Route::get('/product','ProductController@index');
         Route::post('/add-product','ProductController@AddProduct');
         Route::post('/edit-category','ProductCategoryController@EditCategory');
         Route::post('/update-category','ProductCategoryController@UpdateCategory');
         Route::post('/delete-category','ProductCategoryController@DeleteCategory');
         // End Product Here
    });
});
// For User Routing
Route::namespace('App\Http\Controllers\User')->group(function(){
    Route::get('/','WelcomeController@index');
    Route::get('/detail-product/{id}','ProductDetailController@index' );
    Route::post('/AddToCart', 'CartController@index');
    Route::get('/view-cart', 'CartController@ViewCart');
    Route::patch('/update-cart','CartController@update');
    Route::delete('/remove-from-cart','CartController@remove');
    Route::group(['middleware' => ['auth']],function(){
        Route::get('/checkout','CheckoutController@index');
        Route::post('/place-order','CheckoutController@PlaceOrder');
        Route::get('/thankyou',function(){
            return view('thanyou');
        });
        Route::get('/profile','ProfileController@index');

    });
});

Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registeration','UserController@registeration');



