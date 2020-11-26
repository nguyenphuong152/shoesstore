<?php

// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\OrderDetailController;
// use App\Http\Controllers\OrderController;
use App\Http\Middleware\CheckRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('order/{user_id}', [OrderController::class, 'orderByUser']);
    Route::get('order_detail/{order_id}', [OrderDetailController::class, 'detailByOrder']);
    
    // Route::apiResource('brands', BrandController::class);
    // ->middleware(CheckRole::class);
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
