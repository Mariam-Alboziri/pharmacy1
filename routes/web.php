<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Public\CarController as PublicCarController;
use App\Http\Controllers\Public\CategoryController as PublicCategoryController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/contact-us','pages.contact')->name('contact');

Route::post('/contact-us',function(Request $request){
    $request->validate([
        'c_fname' => 'required|string|min:3|max:255',
        'c_lname' => 'required|string|min:3|max:255',
        'c_email' => 'required|email',
        'c_subject' => 'required|string|min:3',
        'c_message' => 'required|string|min:3',
    ]);



    $data=$request->all();
    $message=new Message();

    $message->c_fname=$request->c_fname;
    $message->c_lname=$request->c_lname;
    $message->c_email=$request->c_email;
    $message->c_subject=$request->c_subject;
    $message->c_message=$request->c_message;

    $message->save();

    return redirect('/contact-us');


});


Route::get('/admin/messages', function () {
    $messages = Message::all();

    return view('messages.index',compact('messages'));
})->name('messages.store');

Route::get('/admin/messages/{message}', function (Message $message) {
  //  $message = Message::findOrfail($message);

    return view('messages.show', compact('message'));
})->name('messages.show');



