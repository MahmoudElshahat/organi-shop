<?php
namespace App;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\dashboardController;

use App\Http\Controllers\admin\categorieController;

use App\Http\Controllers\admin\sub_categorieController;

use App\Http\Controllers\admin\blogController;

use App\Http\Controllers\admin\productController;

use App\Http\Controllers\admin\attribuiteController;

use App\Http\Controllers\admin\attribuite_valueController;
use App\Http\Controllers\admin\MessagesController;

use App\Http\Controllers\admin\ordersController;
use App\Http\Controllers\admin\showTenantController;



// use MessagesController;

use LaravelLocalization;

use App\Models\categori;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get

Route::group(['prefix' => LaravelLocalization::setLocale(),
	            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function ()
{
// ================== sign-up & login route=====================================
Route::get('loginpage', [dashboardController::class , 'login_page'])->name('admin.login.page');

Route::post('login', [dashboardController::class , 'login'])->name('admin.login');

// ============================
Route::group(['namespace'=>'admin','prefix'=>'admin'], function () {

Route::get('/dashboard', [dashboardController::class , 'index'])->name('admin.dashboard');

Route::get('signup_page', [dashboardController::class , 'signup_page'])->name('admin.signup.page');

Route::post('signup', [dashboardController::class , 'signup'])->name('admin.signup');

Route::get('logout', [dashboardController::class , 'logout'])->name('admin.logout');


// ============================= users section in dashboard ==================================

Route::get('show-users',[dashboardController::class ,'show_users'])->name('index.users');

// ====================== Beigen Categories route ======================================================

Route::get('/create/categori', [categorieController::class , 'create'])->name('create.categori');

Route::get('/show/categori', [categorieController::class , 'index'])->name('show.categori');

Route::post('/store/categori', [categorieController::class , 'store'])->name('store.categori');

Route::get('/edite/categori/{id}', [categorieController::class , 'edite'])->name('edite.categori');

Route::post('/update/categori/{id}', [categorieController::class , 'update'])->name('update.categori');

Route::get('/delete/categori/{id}', [categorieController::class , 'delete'])->name('delete.categori');


// ====================== Beigen subCategories route ======================================================


Route::get('/create/subcategoricategori', [sub_categorieController::class , 'create'])->name('create.sub.categori');

Route::get('/show/subcategori', [sub_categorieController::class,'index'])->name('show.sub.categori');

Route::post('/store/subcategori', [sub_categorieController::class , 'store'])->name('store.sub.categori');

Route::get('/edite/subcategoricategori/{id}', [sub_categorieController::class , 'edite'])->name('edite.sub.categori');

Route::post('/update/subcategoricategori/{id}', [sub_categorieController::class , 'update'])->name('update.sub.categori');

Route::get('/delete/subcategoricategori/{id}', [sub_categorieController::class , 'delete'])->name('delete.sub.categori');


// ====================== Beigen products route ======================================================


Route::get('/create/product', [productController::class , 'create'])->name('create.product');

Route::get('/show/product', [productController::class , 'index'])->name('show.product');

Route::post('/store/product', [productController::class , 'store'])->name('store.product');

Route::get('/edite/product/{id}', [productController::class , 'edite'])->name('edite.product');

Route::post('/update/product/{id}', [productController::class , 'update'])->name('update.product');

Route::get('/delete/product/{id}', [productController::class , 'delete'])->name('delete.product');

// ================ begin blogs route ===================================

Route::group(['prefix'=>'blog'],function(){

Route::get('/index', [blogController::class , 'index'])->name('index.blog');

Route::get('/cearte', [blogController::class , 'cearte'])->name('cearte.blog');

Route::post('/store', [blogController::class , 'store'])->name('store.blog');

Route::get('/edite/{id}', [blogController::class , 'edite'])->name('edite.blog');

Route::post('/update/{id}', [blogController::class , 'update'])->name('update.blog');

Route::get('/delete/{id}', [blogController::class , 'delete'])->name('delete.blog');

// Route::get('/delete/product/{id}', [blogControllerController::class , 'delete'])->name('delete.blog');

});

// ==================== begin atribuite routes =================
Route::group(['prefix'=>'atribuite/'],function(){

Route::get('index', [attribuiteController::class , 'index'])->name('index.atribuite');

Route::get('cearte', [attribuiteController::class , 'create'])->name('cearte.atribuite');

Route::post('store', [attribuiteController::class , 'store'])->name('store.atribuite');

Route::get('edite/{id}', [attribuiteController::class , 'edite'])->name('edite.atribuite');

Route::post('update/{id}', [attribuiteController::class , 'update'])->name('update.atribuite');

Route::get('delete/{id}', [attribuiteController::class , 'delete'])->name('delete.atribuite');


});

// ==================== begin atribuitezz route ======================
Route::group(['prefix'=>'atribuite/value/'],function(){

Route::get('index', [attribuite_valueController::class , 'index'])->name('index.atribuite.value');

Route::get('cearte', [attribuite_valueController::class , 'create'])->name('cearte.atribuite.value');

Route::post('store', [attribuite_valueController::class , 'store'])->name('store.atribuite.value');

Route::get('edite/{id}', [attribuite_valueController::class , 'edite'])->name('edite.atribuite.value');

Route::post('update/{id}', [attribuite_valueController::class , 'update'])->name('update.atribuite.value');

Route::get('delete/{id}', [attribuite_valueController::class , 'delete'])->name('delete.atribuite.value');


});

// =================== Messages ===================================================
Route::group(['prefix'=>'messages/'],function(){

Route::get('/index',[MessagesController::class,'index'])->name('index.messages');

Route::get('/delete/{id}',[MessagesController::class,'destroy'])->name('delete.messages');


});

// ===============================================================
Route::group(['prefix'=>'orders/'],function(){

Route::get('/index',[ordersController::class,'index'])->name('index.orders');


Route::get('/delete/{id}',[ordersController::class,'destory'])->name('delete.order');


});
// ===================================

Route::get('tenant',[showTenantController::class,'index'])->name('Show.tenants');
Route::get('delete-tenant/{id}',[showTenantController::class,'delete'])->name('del.tenants');



});//end admin prefix

});//end translate page

// Auth::routes();

