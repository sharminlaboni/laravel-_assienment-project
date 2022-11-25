<?php
use App\Http\Controllers\backend\CatagoryController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\frontendController;


use App\Http\Controllers\backend\ColorController;


use App\Http\Controllers\backend\UserController;

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
//Route::get('/', function () {
    //return view('welcome');
//});


//
//->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/frontend', [frontendController::class, 'frontend']);
Route::get('/product_detail/{id}/', [frontendController::class, 'product_detail'])->name('products.detail');
Route::get('/cart/{id}/', [frontendController::class, 'cart'])->name('cart.detail');



//Route::get('/frontend', function () {
    //return view('frontend.index');
//});

//Route::get('/about', function () {
    //return view('frontend.about');

//});
//Route::get('/testimonial', function () {
    //return view('frontend.testimonial');
//});




//Route::get('/contact', function () {
   // return view('frontend.contact');
//});

//Route::get('/products', function () {
   // return view('frontend.products');
//});

//Route::get('/blog_list', function () {
    //return view('frontend.blog_list');
//});



Route::get('/user', function () {
    return view('backend.user');
});
Route::get('/catagory', function () {
    return view('backend.catagory');
});
Route::get('/order', function () {
    return view('backend.order');
});
Route::get('/customer', function () {
    return view('backend.customer');
});
Route::get('/delivery', function () {
    return view('backend.delivery');
});

//Route::get('/product', function () {
   // return view('backend.product');
//});
Route::middleware('auth')->group(function(){

Route::get('/dashboard', function () {
        return view('dashboard');
});
Route::get('/catagories/trash', [CatagoryController::class, 'trash'])->name('catagories.trash');

Route::get('/catagories/{id}/restore', [CatagoryController::class, 'restore'])->name('catagories.restore');

Route::delete('/catagories/{id}/delete', [CatagoryController::class, 'delete'])->name('catagories.delete');

Route::get('/catagories/pdf', [CatagoryController::class, 'downloadPdf'])->name('catagories.pdf');






//


Route::get('/catagories', [CatagoryController::class, 'index'])->name('catagories.index');
Route::get('/catagories/create', [CatagoryController::class, 'catagorycreate'])->name('catagories.create');
Route::post('/catagories/store', [CatagoryController::class, 'catagorystore'])->name('catagories.store');

Route::get('/catagories/{id}', [CatagoryController::class, 'show'])->name('catagories.show');
Route::get('/catagories/edit/{id}',[CatagoryController::class,'edit'])->name('catagories.edit');
Route::put('/catagories/update/{id}',[CatagoryController::class,'update'])->name('catagories.update');
Route::delete('/catagories/view/{id}/delete', [CatagoryController::class, 'destroy'])->name('catagories.destroy');
//Route::resource('catagories', CatagoryController::class);
//color
Route::get('/colors/trash', [ColorController::class, 'trash'])->name('colors.trash');

Route::get('/colors/{id}/restore', [ColorController::class, 'restore'])->name('colors.restore');

Route::delete('/colors/{id}/delete', [ColorController::class, 'delete'])->name('colors.delete');

Route::get('/colors/pdf', [ColorController::class, 'downloadPdf'])->name('colors.pdf');



Route::get('/colors', [ColorController::class, 'index'])->name('colors.index');
Route::get('/colors/create', [ColorController::class, 'create'])->name('colors.create');
Route::post('/colors/store', [ColorController::class, 'store'])->name('colors.store');
Route::get('/colors/{id}', [ColorController::class, 'show'])->name('colors.show');
Route::get('/colors/edit/{id}',[ColorController::class,'edit'])->name('colors.edit');
Route::put('/colors/update/{id}',[ColorController::class,'update'])->name('colors.update');
Route::delete('/colors/view/{id}/delete', [ColorController::class, 'destroy'])->name('colors.destroy');
//Route::resource('catagories', CatagoryController::class);
//

//product
    Route::get('/product-trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/{id}/restore', [ProductController::class, 'restore'])->name('product.restore');
    Route::delete('/product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/productspdf', [ProductController::class, 'downloadPdf'])->name('product.pdf');



Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/Product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/Product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/product/view/{id}/delete', [ProductController::class, 'destroy'])->name('product.view.destroy');
//order
 Route::get('/order',[OrderController::class,'index'])->name('order.index');
//Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
//Route::post('/order/store',[OrderController::class,'store'])->name('order.store');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');

//Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
//Route::post('/order/update',[OrderController::class,'update'])->name('order.update');
Route::get('/order/{id}/delete',[OrderController::class,'delete'])->name('order.delete');


//
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/change-role', [UserController::class, 'changeRole'])->name('users.change_role');
    Route::patch('/{user}/change-role', [UserController::class, 'updateRole'])->name('users.update_role');
});

});



?>
