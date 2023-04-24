<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


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


Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/search', [HomeController::class, 'search'])->name('search');


Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/order', [BasketController::class, 'basketOrder'])->name('basketOrder');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basketRemove');
Route::post('/basket/confirm', [BasketController::class, 'basketConfirm'])->name('basketConfirm');
//важно в какой последов наход роутеры корзины и перед каталогом иначе может не вывести данные

Route::get('/catalog/{catalog}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/catalog/{catalog}', [ProductController::class, 'showCatalog'])->name('showCatalog');
Route::get('/brand/{brand}', [ProductController::class, 'showBrand'])->name('showBrand');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
