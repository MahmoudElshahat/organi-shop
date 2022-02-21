<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;

use App\Http\Controllers\front\user_lognController;
use App\Http\Controllers\LangController;

use App\Http\Controllers\front\shopController;

use App\Http\Controllers;

use App\Http\Controllers\front\cartController;

use App\Http\Controllers\front\blogDetailsController;

use App\Http\Controllers\fatoorahController;
use Illuminate\Support\Facades\App;


/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
    ]);
});

// ================== route of translated page =====================


Route::group([ 'prefix' => LaravelLocalization::setLocale(),
               'middleware' => [
                            'localeSessionRedirect',
                            // 'localizationRedirect',
                            'localeViewPath'
                ]
], function ()
{


// =============== singin routes ==============================
Route::group(['preix'=>'site'],function(){
    Route::get('user-signup-page', [user_lognController::class , 'user_signup_page'])->name('user.signup.page');
    Route::post('user-signup', [user_lognController::class , 'user_signup'])->name('user.signup');
    Route::get('user-login-page', [user_lognController::class , 'login_page'])->name('user.login.page');
    Route::post('user-login', [user_lognController::class , 'login'])->name('user.login');
     });
    // ================= site route =======================
    Route::get('/', \App\Http\Livewire\Homelive::class)->name('home');

    // ================ cart route ==========================================

    // Route::group(['prefix'=>'cart'],function(){

    //     // Route::get('index',[cartController::class,'index'])->name('cart.index');

    //     // Route::get('add/{id}',[cartController::class,'add'])->name('cart.add');

    //     // Route::post('update',[cartController::class,'update'])->name('cart.update');

    //     // Route::post('delete',[cartController::class,'delete'])->name('cart.delete');


    // });//end cart route groop function

    // ================== shop page route    ===============================================

    Route::get('/shop',\App\Http\Livewire\Shoplive::class)->name('shop');


    Route::get('shop-datails',\App\Http\Livewire\ShopDetailsLive::class)->name('Shop.details');

    Route::get('cart',\App\Http\Livewire\Cartlive::class)->name('cart.index');

    Route::get('check-out',\App\Http\Livewire\CheckOutLive::class)->name('check.out');

    Route::get('blog-details',\App\Http\Livewire\BlogDetailsLive::class)->name('blog.details');

    Route::get('Blog',\App\Http\Livewire\BlogLive::class)->name('Blog');

    Route::get('contact',\App\Http\Livewire\ContactLive::class)->name('contact');

    Route::get('Add-tenant',\App\Http\Livewire\Addtenant::class)->name('Add.tenant');
// ================== admin tenant ===============================================================

    // Route::get('tenants',\App\Http\Livewire\Tenantss::class)->name('Show.tenants');

    Route::get('tena/{id}',\App\Http\Livewire\Tenantss::class,'delta')->name('del.tenants');

});//trnaslate page

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/







// ======================






