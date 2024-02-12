<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AjaxController;

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

Route::get('/', function () {
    return view('landing');
})->name('landing');

//login and register
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

//logout
Route::get('/logout',[AuthManager::class, 'logout'])->name('logout');

//to access this page must login first
Route::group(['middleware'=>'auth'], function(){
    Route::get('/profile', function(){
        return "HI";
    });

    Route::get('home', function () {
        return view('home');
    })->name('home');

    //vendor registration
    Route::get('/vendor', [VendorController::class, 'vendor'])->name('vendor');
    Route::post('/vendor', [VendorController::class, 'vendorRegister'])->name('vendorRegister');


    Route::get('/budget',function()
    {
        return view('budget');
     });

     
});

//recommendation


Route::get('/about',function()
{
    return view('about');
});


Route::get('/landing',function()
{
    return view('landing');
});


Route::get('/budget',function()
{
    $vendor = DB::table('vendors')->get();
   
    return view('budget',[
        'vendors'=> $vendor
    ]);
});

Route::get('/vendors', [VendorController::class, 'getVendors']);

Route::get('/checklist',function()
{
    return view('checklist');
});


