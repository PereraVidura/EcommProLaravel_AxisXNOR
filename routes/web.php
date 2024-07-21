<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

/*
Route::get('/', function () {
    return view('home.index');
});
*/

Route::get('/',[HomeController::class,'homepage']);

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');


Route::get('view_category',[AdminController::class,'view_category'])->middleware('auth')->name('home');

Route::post('add_category',[AdminController::class,'add_category'])->middleware('auth')->name('home');

Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware('auth')->name('home');

Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware('auth')->name('home');

Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware('auth')->name('home');

Route::get('add_product',[AdminController::class,'add_product'])->middleware('auth')->name('home');

Route::post('upload_product',[AdminController::class,'upload_product'])->middleware('auth')->name('home');

Route::get('view_product',[AdminController::class,'view_product'])->middleware('auth')->name('home');

Route::get('delete_product/{id}',[AdminController::class,'delete_product'])->middleware('auth')->name('home');

Route::get('edit_product/{slug}',[AdminController::class,'edit_product'])->middleware('auth')->name('home');

Route::post('update_product/{id}',[AdminController::class,'update_product'])->middleware('auth')->name('home');

Route::get('product_search',[AdminController::class,'product_search'])->middleware('auth')->name('home');

Route::get('view_orders',[AdminController::class,'view_orders'])->middleware('auth')->name('home');

Route::get('on_the_way/{id}',[AdminController::class,'on_the_way'])->middleware('auth')->name('home');

Route::get('delivered/{id}',[AdminController::class,'delivered'])->middleware('auth')->name('home');

Route::get('print_pdf/{id}',[AdminController::class,'print_pdf'])->middleware('auth')->name('home');



Route::get('product_details/{id}',[HomeController::class,'product_details']);

Route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware('auth')->name('home');

Route::get('mycart',[HomeController::class,'mycart'])->middleware('auth')->name('home');

Route::get('delete_cart/{id}',[HomeController::class,'delete_cart'])->middleware('auth')->name('home');

Route::post('comfirm_order',[HomeController::class,'comfirm_order'])->middleware('auth')->name('home');

Route::get('myorders',[HomeController::class,'myorders'])->middleware('auth')->name('home');

Route::get('shop',[HomeController::class,'shop']);

Route::get('why',[HomeController::class,'why']);

Route::get('testimonial',[HomeController::class,'testimonial']);

Route::get('contact',[HomeController::class,'contact']);



Route::controller(HomeController::class)->group(function(){
    Route::get('stripe/{value}', 'stripe');
    Route::post('stripe/{value}', 'stripePost')->name('stripe.post');
});



/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';


