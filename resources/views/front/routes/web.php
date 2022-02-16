<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;

use App\Http\Controllers\front\user_lognController;
use App\Http\Controllers\LangController;

use App\Http\Controllers\front\shopController;

use App\Http\Controllers;

use App\Http\Controllers\front\cartController;

use App\Http\Controllers\fatoorahController;


/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/admin', [dashboardController::class , 'index'])->name('dashboard');
// =============== singin routes ==============================

// Route::get('user-signup_page', [user_lognController::class ,'signup_page'])->name('user.signup.page');

// Route::post('user-signup', [user_lognController::class , 'signup'])->name('user.signup');

// Route::get('user-loginpage', [user_lognController::class , 'login_page'])->name('user.login.page');

// Route::post('user-login', [user_lognController::class , 'login'])->name('user.login');

// // =================

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// ================== languages route =====================

// Route::get('lang/home', [LangController::class,'index']);
// Route::get('lang/change', [LangController::class,'change'])->name('changeLang');


// ========================= localization Route ==============
// routes/web.php


// ================== route of translated page =====================

Route::group(['prefix' => LaravelLocalization::setLocale(),
	            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function ()
{

// =============== singin routes ==============================

    Route::get('user-signup_page', [user_lognController::class , 'signup_page'])->name('user.signup.page');
    Route::post('user-signup', [user_lognController::class , 'signup'])->name('user.signup');
    Route::get('user-loginpage', [user_lognController::class , 'login_page'])->name('user.login.page');
    Route::post('user-login', [user_lognController::class , 'login'])->name('user.login');
    // ================= site route =======================
    Route::get('/', [App\Http\Controllers\HomeController::class , 'index'])->name('home');

    // ================ cart route ==========================================

    Route::group(['prefix'=>'cart'],function(){

        Route::get('index',[cartController::class,'index'])->name('cart.index');

        Route::get('add/{id}',[cartController::class,'add'])->name('cart.add');

        Route::post('update',[cartController::class,'update'])->name('cart.update');

        Route::post('delete',[cartController::class,'delete'])->name('cart.delete');




    });//end cart route groop function

    // ================== shop page route    ===============================================
    Route::get('/shop',[shopController::class,'index'])->name('shop');









    // =============== 
// Route::post('/pay',[fatoorahController::class,'payorder']);

// Route::get('/callback',function(){
//     return 'succes';
// });

// Route::get('/error',function(){
//     return 'errrror';
// });




});//trnaslate page

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/







// ======================
