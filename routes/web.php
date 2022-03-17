<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

// frontend controllers
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ShopController;
use App\Http\Controllers\FrontEnd\ContactController;


//backend controllers
use App\Http\Controllers\BackEnd\BackendHomeController;
use App\Http\Controllers\BackEnd\MainMenusController;
//menus user
use App\Http\Controllers\BackEnd\UserAddDetailController;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// frontend portion

Route::get("/",[HomeController::class,'index'])->name('frontend.index');
Route::get("/shop",[ShopController::class,'shop'])->name('frontend.shop');
Route::get("/single-product",[ShopController::class,'singleProduct'])->name('frontend.single-product');
Route::get("/contact",[ContactController::class,'contact'])->name('frontend.contact');
Route::get("/about",[ContactController::class,'about'])->name('frontend.about');


// backend portion
Route::get("/admin",[BackendHomeController::class,'index'])->name('backend.index');
Route::get("/admin/add-new-product",[BackendHomeController::class,'addNewProduct'])->name('backend.add-new-product');
Route::get("/admin/view-product-list",[BackendHomeController::class,'viewProductList'])->name('backend.view-product-list');
//menus
Route::get("/admin/add-new-menus",[MainMenusController::class,'addNewMenusForm'])->name('backend.add-new-menus');
Route::get("/admin/edit-menus",[MainMenusController::class,'editMenusForm'])->name('backend.edit-menus');
Route::post("/admin/editMainMenuTitleDetail",[MainMenusController::class,'editMainMenuTitleDetail'])->name('backend.editMainMenuTitleDetail');
Route::get("/admin/delete-menus",[MainMenusController::class,'deleteMenus'])->name('backend.delete-menus');
Route::get("/admin/view-menus-list",[MainMenusController::class,'viewMenusList'])->name('backend.view-menus-list');
Route::post("/admin/addMainMenuTitleDetail",[MainMenusController::class,"addMainMenuTitleDetail"]);

Route::get("/admin/add-sub-menus",[MainMenusController::class,'addSubMenusForm'])->name('backend.add-sub-menus');
Route::post("/admin/addSubMenuTitleDetail",[MainMenusController::class,"addSubMenuTitleDetail"]);
Route::get("/admin/view-sub-menus-list",[MainMenusController::class,'viewSubMenusList'])->name('backend.view--sub-menus-list');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
