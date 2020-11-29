<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('file/img/{file_name}', [FileController::class, 'getImgByName']);
Route::get('file/img/product/{product_detail_id}', [FileController::class, 'getImgByProductDetailId']);
Route::post('file/img', [FileController::class, 'uploadImg']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('logout', [AuthController::class, 'logout']);

    //with any route that had in Route::apiResouces
    //use Absolute path like App\Http\Controllers\... to avoid err
    Route::get('order/{user_id}', [App\Http\Controllers\OrderController::class, 'orderByUser']);
    Route::get('order_detail/{order_id}', [App\Http\Controllers\OrderDetailController::class, 'detailByOrder']);

    Route::apiResources([
        'roles' => RoleController::class,
        'users' => UserController::class,
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
});

// Route::post('type_accounts', [TypeAccountController::class, 'addTypeAccount']);
// Route::put('type_accounts/{id}', [TypeAccountController::class, 'updateTypeAccount']);
// Route::delete('type_accounts/{id}', [TypeAccountController::class, 'deleteTypeAccount']);

//middleware isAdmin
