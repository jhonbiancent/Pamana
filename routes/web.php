<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsSectionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AccountsController;

//-----------sign up--------------//
Route::get('/signup1', [AccountsController::class, 'step1'])->name('signup_and_login.signup1');
Route::post('/signup1', [AccountsController::class, 'postStep1']);

Route::get('/signup2', [AccountsController::class, 'step2'])->name('signup_and_login.signup2');
Route::post('/signup2', [AccountsController::class, 'postStep2']);

Route::get('/signup3', [AccountsController::class, 'step3'])->name('signup_and_login.signup3');
Route::post('/signup3', [AccountsController::class, 'complete'])->name('signup_and_login.complete');


Route::get('/login', [AccountsController::class, 'showLogin'])
    ->name('accounts.login.form');

Route::post('/login', [AccountsController::class, 'login'])
    ->name('accounts.login');

Route::post('/logout', [AccountsController::class, 'logout'])
    ->name('logout');




Route::get('/', function () {
    if (!session('account_id')) {
        return redirect('/login');
    }
    return view('welcome');
});
// Route::get('/sell', function () {
//     $userIsLoggedIn = session()->has('account_id');
//     return view('products.sell', compact('userIsLoggedIn'));
// });


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/sell', [ProductsSectionController::class, 'index']);
// Route::get('/profile', [CustomerController::class, 'index']);
Route::get('/profile', [AccountsController::class, 'verifyUserSession'])->name('profile.userInfo');

Route::get('/add-new-product', [ProductsSectionController::class, 'addNewProduct']);
