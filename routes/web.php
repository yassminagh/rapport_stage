<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/redirect', [App\Http\Controllers\Frontend\FrontendController::class,'redirect']);

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class,'index']);



Route::get('/products/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'show'])->name('product.details');
Route::post('/add/{id}', [App\Http\Controllers\Frontend\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class,'cart'])->name('cart');
Route::get('/delete/{id}', [App\Http\Controllers\Frontend\CartController::class,'deletecart']);
Route::post('/order', [App\Http\Controllers\Frontend\CartController::class,'confirmorder']);
Route::get('/search', [App\Http\Controllers\Frontend\FrontendController::class,'search']);


Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'index'])->name('redirect');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders','index');
        Route::get('sliders/create','create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit','edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');
    });
    //category routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function (){
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete','destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');
    });
    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function (){
        Route::get('/user', 'index');
        Route::get('/user/{id}/edit', 'edit');
        Route::put('/user/{id}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function (){
        Route::get('/order', 'index');
        Route::get('/order/{id}/edit', 'edit');
        Route::put('/order/{id}', 'updatestatus');
        Route::get('/order/{id}/print_pdf','print_pdf');
    });

    Route::get('/authors', App\Http\Livewire\Admin\Author\index::class);


});