<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MariamController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Public\MedicineController as PublicMedicineController;
use App\Http\Controllers\PublicCategoryController;
use App\Http\Controllers\RehamController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use App\Models\Medicine;
//use App\Http\Controllers\Public\CarController as PublicCarController;
//use App\Http\Controllers\Public\CategoryController as PublicCategoryController;

use App\Models\Message;
use Illuminate\Routing\Route as RoutingRoute;
use LDAP\Result;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::view('/about','pages.about')->name('about');


Route::get('/products', [PublicMedicineController::class, 'index'])->name('products.list');
Route::get('/cart', [RehamController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [RehamController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [RehamController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [RehamController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [RehamController::class, 'clearAllCart'])->name('cart.clear');

Route::resource('/checkout',CheckoutController::class)->middleware('auth');

Route::resource('/thanckyou',ConfirmationController::class)->middleware('auth');


Route::get('empty',function(){
    \Cart::clear();

});


Route::resource('profile',UsersController::class)->middleware('auth');
Route::resource('billings',BillingController::class);




Route::post('/contact-us',[MessageController::class,'store'])->name('messages.store');
Route::resource('medicines',PublicMedicineController::class);
Route::resource('categories',PublicCategoryController::class);



// Auth Routes
Route::get('login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('forgot-password', [ForgotPasswordController::class, 'show'])->middleware('guest')->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'store'])->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->middleware('guest')->name('password.reset');

Route::post('reset-password', [ForgotPasswordController::class, 'reset'])->name('password.change');


Route::group(['as' => 'admin.', 'prefix' => 'admin','middleware' => ['auth','isAdmin']], function () {

Route::get('messages', [MessageController::class,'index'])->name('messages.index');
Route::get('messages/{message}', [MessageController::class,'show'])->name('messages.show');
Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

Route::resource('medicines' , MedicineController::class);
Route::resource('categories',CategoryController::class);
Route::resource('users', UserController::class);
Route::resource('companies',CompanyController::class);
Route::resource('billings',BillingController::class);

Route::get('dashboard' ,[DashboardController::class,'index'])->name('dashboard');


});

