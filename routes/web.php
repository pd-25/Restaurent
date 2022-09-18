<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\USER\HomeController;
use App\Http\Controllers\ADMIN\UserController;
use App\Http\Controllers\ADMIN\FoodController;
use App\Http\Controllers\ADMIN\ReservationController;
use App\Http\Controllers\ADMIN\ChefController;
use App\Http\Controllers\ADMIN\AddCartController;

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


Route::get('/redirects', [HomeController::class, 'redirects']);


//admin

Route::get('/user', [UserController::class, 'user'])->name('user');

Route::post('/delete_user', [UserController::class, 'delete_user'])->name('delete_user');
Route::get('/foodMenu', [FoodController::class, 'foodMenu'])->name('foodMenu');
Route::get('/Add_foodMenu', [FoodController::class, 'Add_foodMenu'])->name('Add_foodMenu');
Route::post('/upload_foodMenu', [FoodController::class, 'upload_foodMenu'])->name('upload_foodMenu');
Route::get('/edit_foodMenu/{id}', [FoodController::class, 'edit_foodMenu'])->name('edit_foodMenu');
Route::post('/update_foodMenu/{id}', [FoodController::class, 'update_foodMenu'])->name('update_foodMenu');
Route::post('/delete_food', [FoodController::class, 'delete_food'])->name('delete_food');
Route::get('/showReservation', [ReservationController::class, 'showReservation'])->name('showReservation');
Route::get('/showChef', [ChefController::class, 'showChef'])->name('showChef');
Route::get('/addChef', [ChefController::class, 'addChef'])->name('addChef');
Route::post('/uploadChef', [ChefController::class, 'uploadChef'])->name('uploadChef');
Route::get('/editChef/{id}', [ChefController::class, 'editChef'])->name('editChef');
Route::post('/updateChef/{id}', [ChefController::class, 'updateChef'])->name('updateChef');
Route::delete('/deleteChef/{id}', [ChefController::class, 'deleteChef'])->name('deleteChef');
Route::get('/showaddcartadmin', [AddCartController::class, 'showaddcartadmin'])->name('showaddcartadmin');


//user
Route::get('/home', [HomeController::class,'userHome'])->name('home');


Route::get('/', [HomeController::class, 'home']);
Route::post('/reservation', [ReservationController::class, 'reservation'])->name('reservation');
Route::post('/addCart/{id}', [HomeController::class, 'addCart'])->name('addCart');
Route::get('/showCart/{id}', [HomeController::class, 'showCart'])->name('showCart');
Route::post('/removecart', [HomeController::class, 'removecart'])->name('removecart');
Route::post('/orderConfirm', [HomeController::class, 'orderConfirm'])->name('orderConfirm');
//{{ route('manage_role.destroy', ['manage_role' => $roles->id]) }}






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
