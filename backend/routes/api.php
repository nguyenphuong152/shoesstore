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

Route::apiResources([
    'type_accounts' => TypeAccountController::class,
    'accounts' => AccountController::class,
    'sizes' => SizeController::class,
    'colors' => ColorController::class,
    'genders' => GenderController::class,
    'models' => ModelController::class,
    'brands' => BrandController::class,
    'product_catalogs' => ProductCatalogController::class,
    'products' => ProductController::class,
    'product_details' => ProductDetailController::class,
    'orders' => OrderController::class,
    'order_details' => OrderDetailController::class
]);