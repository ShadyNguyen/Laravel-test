<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controller\ProductsController;
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
    return view('home');
});

Route::get('/word', function () {
    return 'đây là laravel';// trả về string
});

Route::get('/food', function () {
    return [
        'SuShi','Takoyaki','Ramen'
    ];// trả về mảng
});

Route::get('/aboutMe', function () {
    return response()->json([   
        'name' => 'Nguyen Binh Duong',
        'email' => 'nguyenbinhduong26@gmail.com'
    ]);
});

Route::get('/else', function () {
    return redirect ('/');// chuyển sang trang trong ()
});