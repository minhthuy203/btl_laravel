<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

// Route::get('/', function () {
//     return view('client.menu');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('//{product}-{slug}', [HomeController::class, 'productDetail'])->name('productDetail');

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'cart'])->name('cart.cart');
        Route::get('addToCart/{id}',[CartController ::class,'addToCart'])->name('cart.addToCart');
        Route::get('remove/{id}',[CartController ::class,'remove'])->name('cart.remove');
        Route::get('update/{id}',[CartController ::class,'update'])->name('cart.update');
        Route::get('clear',[CartController ::class,'clear'])->name('cart.clear');
    });
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('admin/login',[AdminController::class,'check_login']);
Route::group(['prefix'=> 'admin','middleware'=>'auth'],function ()
{
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::group(['prefix' => 'category'], function (){
        Route::get('trashed',[CategoryController::class,'trashed'])->name('category.trashed');
        Route::get('restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
    });
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);

});
