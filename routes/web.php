<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

// Auth Routes
Route::get('login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register')->middleware('auth');
Route::post('register', [RegisteredUserController::class, 'store'])->middleware('auth');

Route::get('forgot-password', [ForgotPasswordController::class, 'show'])->middleware('guest')->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'store'])->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->middleware('guest')->name('password.reset');

Route::post('reset-password', [ForgotPasswordController::class, 'reset'])->name('password.change');


Route::group(['as' => 'admin.', 'prefix' => 'admin','middleware' => 'auth'], function () {

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

