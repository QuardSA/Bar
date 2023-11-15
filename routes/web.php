<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;




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

Route::get('/', [MainController::class, 'index']);

Route::get('/product/{prod}', [MainController::class,'product'] )
;
Route::get('/catalog', [CatalogController::class,'Products'] );

Route::get('/basket', [MainController::class,'basket'] );

Route::get('/basket', [MainController::class,'basket'] );

Route::get('/autho', [AuthController::class, 'auth']);

Route::post('/auth_valid', [AuthController::class,'auth_valid']);

Route::get('/register', [AuthController::class, 'regist']);

Route::post('/reg_valid', [AuthController::class,'reg_valid']);

Route::get('/personalcub', [AuthController::class, 'personal']);

Route::get('/personalcub', [AuthController::class, 'personal_information']);


Route::get("/signout",[AuthController::class, 'signout'] ) ->name("signout");

Route::get('/sidebar', [AuthController::class, 'personal']);


Route::get("/admin",[AdminController::class, 'index']) -> name("admin");

Route::post("/addproduct",[AdminController::class, 'addproduct']);


Route::get('admin/ordersDeny', [AdminController::class,'ordersDeny'] );
Route::get('admin/ordersNew', [AdminController::class,'ordersNew'] );
Route::get('admin/ordersProg', [AdminController::class,'ordersProg'] );
Route::get('admin/ordersSub', [AdminController::class,'ordersSub'] );
Route::get('admin/serviceRedact', [AdminController::class,'serviceRedact'] );
Route::get('admin/userRedact', [AdminController::class,'userRedact'] );

