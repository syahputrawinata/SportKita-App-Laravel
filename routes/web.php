<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController as AdminhomeController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\user\HomeController as UserHomeController;
use App\Http\Controllers\user\TransactionController as UserTransactionController;
use App\Http\Controllers\cashier\HomeController as CashierHomeController;
use App\Http\Controllers\cashier\TransactionController as CashierTransactionController;
use App\Http\Controllers\auth\LoginController;

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
/////////error permission////////////////
Route::get('/error.permission', function() {
    return view('errors.permission');
})->name('error.permission');

    ///////////////landingpage///////////////////
Route::middleware(['IsLanding'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });

    ///////////////////Authentication////////////
    Route::get('/login', [LoginController::class, 'formLogin'])->name('auth.form');
    Route::post('/login', [LoginController::class, 'loginAuth'])->name('loginAuth');
});

Route::middleware(['IsLogin'])->group(function(){
 
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


    ////////////////user///////////////////////////////////
Route::middleware(['IsUser'])->group(function () {
    Route::prefix('/user')->name('user.')->group(function(){
        Route::get('/home', [UserHomeController::class, 'index'])->name('index');
    });

    Route::prefix('/user/transaction')->name('usertransaction.')->group(function(){
        Route::get('/index', [UserTransactionController::class, 'index'])->name('index');
        Route::get('/create', [UserTransactionController::class, 'create'])->name('create');
        Route::post('/create', [UserTransactionController::class, 'store'])->name('store');
        Route::get('/print/{id}', [UserTransactionController::class, 'showStruk'])->name('showStruk');
        Route::get('/download/{id}', [UserTransactionController::class, 'downloadStruk'])->name('downloadStruk');
    });
});


    /////////////admin/////////////////////////////////////////////////////
Route::middleware(['IsAdmin'])->group(function () {
    Route::prefix('/admin')->name('admin.')->group(function(){
        Route::get('/dashboard', [AdminhomeController::class, 'index'])->name('index');
        Route::get('/product', [ProductController::class, 'index'])->name('AdminProductIndex');
        Route::get('/user', [UserController::class, 'index'])->name('AdminUserIndex');
        Route::get('/Brand', [BrandController::class, 'index'])->name('AdminBrandIndex');
        Route::get('/Category', [CategoryController::class, 'index'])->name('AdminCategoryIndex');
    });

    Route::prefix('/admin/product')->name('adminproduct.')->group(function(){
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/create', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/admin/user')->name('adminuser.')->group(function(){
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/create', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/admin/brand')->name('adminbrand.')->group(function(){
        Route::get('/create', [BrandController::class, 'create'])->name('create');
        Route::post('/create', [BrandController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [BrandController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BrandController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/admin/category')->name('admincategory.')->group(function(){
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/create', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
});


    ///////////////////////cashier///////////////////////////////////////////////////////
Route::middleware(['IsCashier'])->group(function () {
    Route::prefix('/cashier')->name('cashier.')->group(function(){
        Route::get('/home', [CashierHomeController::class, 'index'])->name('index');
    });

    Route::prefix('/cashier/transaction')->name('cashiertransaction.')->group(function(){
        Route::get('/index', [CashierTransactionController::class, 'index'])->name('index');
        Route::get('/create', [CashierTransactionController::class, 'create'])->name('create');
        Route::post('/create', [CashierTransactionController::class, 'store'])->name('store');
        Route::get('/print/{id}', [CashierTransactionController::class, 'showStruk'])->name('showStruk');
        Route::get('/download/{id}', [CashierTransactionController::class, 'downloadStruk'])->name('downloadStruk');
        Route::get('/export-excel', [CashierTransactionController::class, 'exportExcel'])->name('export-excel');
    });
});

});