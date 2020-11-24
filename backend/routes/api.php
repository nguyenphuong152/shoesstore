<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('type_accounts', [TypeAccountController::class, 'typeAccounts']);
// Route::get('type_accounts/{id}', [TypeAccountController::class, 'typeAccountById']);
// Route::post('type_accounts', [TypeAccountController::class, 'addTypeAccount']);
// Route::put('type_accounts/{id}', [TypeAccountController::class, 'updateTypeAccount']);
// Route::delete('type_accounts/{id}', [TypeAccountController::class, 'deleteTypeAccount']);
Route::apiResource('type_accounts', TypeAccountController::class);

Route::apiResource('accounts', AccountController::class);

Route::apiResource('sizes', SizeController::class);

Route::apiResource('colors', ColorController::class);

Route::apiResource('genders', GenderController::class);

Route::apiResource('models', ModelController::class);

Route::apiResource('brands', BrandController::class);

Route::apiResource('product_catalogs', ProductCatalogController::class);

Route::apiResource('products', ProductController::class);

Route::apiResource('product_details', ProductDetailController::class);

Route::apiResource('orders', OrderController::class);

Route::apiResource('order_details', OrderDetailController::class);