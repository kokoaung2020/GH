<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
    $products = [13,2,3,4,5,6];
    return view('welcome')->with(['data'=>$products]);
});

Route::get('contact',function() {
    return view('contact');
})->middleware('checkAge');

Route::get('about',function() {
    return view('about');
});


Route::post('api/promotions',[Controller::class,'showPromotions']);