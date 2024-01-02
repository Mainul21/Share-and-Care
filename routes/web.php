<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonationController;
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
    return view('WelcomePage');
});

/*ROUTE POST*/
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/collect-donation', [DonationController::class, 'collectDonation']);
/*ROUTE POST*/

Route::get('/UserProfille', function () {
    return view('UserProfille');
});
Route::get('/BuyFoodlPage', function () {
    return view('BuyFoodlPage');
});

Route::get('/LoginPage', function () {
    return view('LoginPage');
});

Route::get('/SignupPage', function () {
    return view('SignupPage');
});

Route::get('/UserProfile', function () {
    return view('UserProfile');
});

Route::get('/LoginPage/HomePage', function () {
    return view('HomePage');
});

Route::get('/shareFoodPage', function () {
    return view('shareFoodPage');
});

Route::get('/donateMoneyPage', function () {
    return view('donateMoneyPage');
});

Route::get('/LoginPage/HomePage/BuyFoodPage', function () {
    return view('BuyFoodPage');
});

Route::get('/LoginPage/HomePage/BuyFoodPage/ShoppingCart', function () {
    return view('ShoppingCart');
});
Route::get('/SellerLogin', function () {
    return view('SellerLogin');
});
Route::get('/SellerSignup', function () {
    return view('SellerSignup');
});
Route::get('/SellerHomePage', function () {
    return view('SellerHomePage');
});
Route::get('/SellerProfile', function () {
    return view('SellerProfile');
});
Route::get('/CreatePost', function () {
    return view('CreatePost');
});
Route::get('/CompletedOrders', function () {
    return view('CompletedOrders');
});

Route::get('/SellerDonate', function () {
    return view('SellerDonate');
});
Route::get('/SellerShareFood', function () {
    return view('SellerShareFood');
});
Route::get('/SellerShareFood', function () {
    return view('SellerShareFood');
});

Route::get('/About', function () {
    return view('About');
});
Route::get('/Support', function () {
    return view('Support');
});


