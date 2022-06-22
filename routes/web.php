<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
//use App\Http\Controllers\Public\CarController as PublicCarController;
//use App\Http\Controllers\Public\CategoryController as PublicCategoryController;

use App\Models\Message;

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

Route::get('/',[HomeController::class,'welcome'])->name('home');

Route::view('/contact-us','pages.contact')->name('contact');

Route::post('/contact-us',[MessageController::class,'store'])->name('messages.store');
Route::get('/admin/messages', [MessageController::class,'index'])->name('messages.index');
Route::get('/admin/messages/{message}', [MessageController::class,'show'])->name('messages.show');

Route::get('/admin/medicines/create',[MedicineController::class,'create'])->name('medicines.create');
Route::get('/admin/medicines', [MedicineController::class,'index'])->name('medicines.index');
Route::post('/admin/medicines',[MedicineController::class,'store'])->name('medicines.store');



