<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SliderController;
use App\Models\Navbar;
use App\Models\Slider;
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

Route::get('/', function () {
    $nav = Navbar::all();
    $slider = Slider::all();
    return view('pages/home', compact('nav','slider'));
});

Route::get('/about', function () {
    $nav = Navbar::all();
    return view('pages/about-us', compact('nav'));
});

Route::get('/class', function () {
    $nav = Navbar::all();
    return view('pages/class', compact('nav'));
});

Route::get('/galleri', function () {
    $nav = Navbar::all();
    return view('pages/gallery', compact('nav'));
});

Route::get('/contact', function () {
    $nav = Navbar::all();
    return view('pages/contact', compact('nav'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/navbar', NavbarController::class)->middleware(['auth']);

Route::resource('/slider', SliderController::class)->middleware(['auth']);

