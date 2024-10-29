<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');
});

Route::get('/',[FrontendController::class,'index'])->name('forntend.index');
Route::get('/shop',[FrontendController::class,'shop'])->name('forntend.shop');
Route::get('/about',[FrontendController::class,'about'])->name('forntend.about');
Route::get('/services',[FrontendController::class,'services'])->name('forntend.services');
Route::get('/blog',[FrontendController::class,'blog'])->name('forntend.blog');
Route::get('/contact',[FrontendController::class,'contact'])->name('forntend.contact');
Route::get('/cart',[FrontendController::class,'cart'])->name('forntend.cart');

require __DIR__.'/auth.php';
