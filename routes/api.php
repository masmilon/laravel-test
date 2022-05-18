<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\IndianvisaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::apiResource('customers', CustomerController::class);

Route::group(['middleware' => 'APISecurityToken'], function(){
    Route::post('/customer/search', CustomerController::class . '@search');
    Route::post('/customer/add', CustomerController::class . '@add');
    Route::post('/customer/login', CustomerController::class . '@login');
    Route::post('/customer/auth_by_key', CustomerController::class . '@auth_by_key');
    Route::post('/customer/activate_customer', CustomerController::class . '@activate_customer');
    Route::post('/customer/get_all_customer', CustomerController::class . '@get_all_customer');
    Route::post('/customer/delete', CustomerController::class . '@delete_customer');
    
    Route::post('/indianvisa', IndianvisaController::class . '@index');
    Route::post('/indianvisa/add', IndianvisaController::class . '@add');
    Route::post('/indianvisa/update', IndianvisaController::class . '@update');
    Route::post('/indianvisa/search', IndianvisaController::class . '@search');
    Route::post('/indianvisa/delete', IndianvisaController::class . '@delete');
    Route::post('/indianvisa/last_visas', IndianvisaController::class . '@last_visas');
});