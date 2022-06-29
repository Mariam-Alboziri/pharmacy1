<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Public\MedicineController as PublicMedicineController;
use App\Models\Medicine;
//use App\Http\Controllers\Public\CarController as PublicCarController;
//use App\Http\Controllers\Public\CategoryController as PublicCategoryController;

use App\Models\Message;
use Illuminate\Routing\Route as RoutingRoute;
use LDAP\Result;

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
Route::resource('medicines',PublicMedicineController::class);

Route::name('admin.')->group(function(){
Route::prefix('admin')->group(function () {

Route::get('messages', [MessageController::class,'index'])->name('messages.index');
Route::get('messages/{message}', [MessageController::class,'show'])->name('messages.show');

// Route::get('medicines/create',[MedicineController::class,'create'])->name('medicines.create');
// Route::get('medicines',[MedicineController::class,'show'])->name('medicines.show');
// Route::get('medicines', [MedicineController::class,'index'])->name('medicines.index');
// Route::post('medicines',[MedicineController::class,'store'])->name('medicines.store');
// Route::get('medicines/{medicine}/edit',[MedicineController::class,'edit'])->name('medicines.edit');
// Route::put('medicines/{medicine}',[MedicineController::class,'update'])->name('medicines.update');
// Route::delete('medicines/{medicine}',[MedicineController::class,'destroy'])->name('medicines.destroy');

Route::resource('medicines' , MedicineController::class);
Route::resource('categories',CategoryController::class);
});

});
