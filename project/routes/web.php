<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;





/* ----shop router */
Route::prefix('shop')->group(function(){
    Route::get('/', [
        ShopController::class , 'categories'
    ]);
    Route::get('checkout', [
        ShopController::class , 'checkout'
    ]);
    Route::get('add-to-cart', [
        ShopController::class , 'addToCart'
    ]);
    Route::get('clear-cart', [
        ShopController::class , 'clearCart'
    ]);
    Route::get('order', [
        ShopController::class , 'order'
    ]);
    Route::get('remove-item/{id}', [
        ShopController::class , 'removeItem'
    ]);
    Route::get('update-cart', [
        ShopController::class , 'updateCart'
    ]);
    Route::get('{cat_url}', [
        ShopController::class , 'products'
    ]);
    Route::get('{cat_url}/{prod_url}', [
        ShopController::class , 'product'
    ]);

});

/*----user router */
Route::prefix('user')->group(function(){
    Route::get('signin', [
        UserController::class , 'getSignin'
    ]);

    Route::post('signin', [
            UserController::class , 'postSignin'
        ]);
    Route::get('signup', [
        UserController::class , 'getSignup'
    ]);
    Route::post('signup', [
            UserController::class , 'postSignup'
        ]);
    Route::get('logout', [
        UserController::class , 'logout'
    ]);
});

/*----cms router */

Route::middleware(['cmsadmin'])->group(function(){
    Route::prefix('cms')->group(function(){
        Route::get('dashboard', [
            CmsController::class , 'dashboard'
        ]);
        Route::get('orders', [
            CmsController::class , 'orders'
        ]);
        Route::resource('menu', MenuController::class  );
        Route::resource('content', ContentController::class  );
        Route::resource('categories', CategoriesController::class  );
        Route::resource('products', ProductsController::class  );
    });

});


/* ----pages router */
Route::get('/', [
    PagesController::class , 'home'
]);
Route::get('{url}', [
    PagesController::class , 'content'
]);
