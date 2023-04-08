<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", HomeController::class)->name("welcome");
Route::get("shop", [ShopController::class, "index"])->name("shop.index");
Route::get("shop/{product}", [ShopController::class, "show"])->name(
    "shop.show"
);
Route::get("cart", [CartController::class, "index"])->name("cart.index");

Route::post("cart", [CartController::class, "store"])->name("cart.store");
Route::delete("cart/{cart}", [CartController::class, "destroy"])->name(
    "cart.destroy"
);

Route::get("checkout/{checkout}", [CheckoutController::class, "show"])->name(
    "checkout.index"
);
Route::post("checkout", [CheckoutController::class, "store"])->name(
    "checkout.store"
);

Route::middleware(["role:superadmin"])->group(function () {
    Route::get("/dashboard", DashboardController::class)->name("dashboard");

    //    Route For Product
    Route::resource("products", ProductController::class);
    Route::resource("categories", CategoryController::class);
});

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

require __DIR__ . "/auth.php";
