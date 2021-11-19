<?php

use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Product\CreateProduct;
use App\Http\Livewire\SaleReport\SalesReport;
use App\Http\Livewire\Storefront\Backend\AdminDashboard;
use App\Http\Livewire\Storefront\Backend\Adminindox;
use App\Http\Livewire\Storefront\Backend\AdminProfile;
use App\Http\Livewire\Storefront\Backend\Store\CreateAsscoiate;
use App\Http\Livewire\Storefront\Backend\Store\CreateStore;
use App\Http\Livewire\Storefront\Backend\Store\ViewDetail;
use App\Http\Livewire\Storefront\Frontend\Cart;
use App\Http\Livewire\Storefront\Frontend\Header;
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

///////////////////////////////// MIDDLEWARES //////////////////////////////////

Route::group(['middleware' => 'admin'], function () {
    //Admin Routes Go Here
});

Route::group(['middleware' => 'customer'], function () {
    //Customer Routes Go Here
});

Route::group(['middleware' => 'merchant'], function () {
    //Merchant Routes Go Here
});

Route::group(['middleware' => 'associate'], function () {
    //Associate Routes Go Here
});

////////////////////////////////// MIDDLEWARES ////////////////////////////////////


Route::get('/', Index::class)->name('index');

Route::view('/pos', 'pos.pos')->name('pos');
Route::view('/pos2', 'pos.pos2')->name('pos2');

Route::group(['prefix' => 'storefront', 'as' => 'backend.'], function () {

    Route::get('/backend/dashboard', AdminDashboard::class)
        ->name('dashboard');

    Route::get('/backend/dashboard/profile', AdminProfile::class)
        ->name('profile');

    Route::get('/backend/inbox', Adminindox::class)
        ->name('inbox');

    Route::get('/backend/store/createStore', CreateStore::class)
        ->name('createStore');

    Route::get('/backend/store/CreateAssociate', CreateAsscoiate::class)
        ->name('createAssociate');

    Route::get('/backend/store/ViewDetails', ViewDetail::class)
        ->name('viewDetails');

    Route::get('/backend/store/ViewSalesReport', SalesReport::class)
        ->name('SalesReport');

});

Route::get('/{storeName}/store', Header::class)
    ->name('storefront');

Route::get('/product/create', CreateProduct::class)
    ->name('product.create');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cart', Cart::class)->name('cart');

require __DIR__ . '/auth.php';
