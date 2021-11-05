<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdressemailController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MessagerieController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewslaterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrainerController;
use App\Models\About;
use App\Models\Classe;
use App\Models\Client;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newslater;
use App\Models\Pricing;
use App\Models\Schedule;
use App\Models\Slider;
use App\Models\Titre;
use App\Models\Trainer;
use Database\Seeders\MapSeeder;
use Illuminate\Support\Facades\DB;
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
    $slider1 = Slider::all();
    $slider = Slider::all();
    $titre = Titre::all();
    $sli = DB::table('sliders')->where('order',true)->get();
    $about = About::all();
    $classe = Classe::all();
    $galleri = Gallery::take(6)->inRandomOrder()->get();
    $schedule = Schedule::all();
    // $schedule = Schedule::paginate(1);
    $trainer = Trainer::all();
    $pricing = Pricing::all();
    $event = DB::table('events')->where('order',true)->get();
    $trainer1 = DB::table('trainers')->where('user_id',2)->get();
    $client = Client::all();
    $map = Map::all();
    $newslater = Newslater::all();
    $footer = Footer::all();
    return view('pages/home', compact('footer','newslater','map','client','pricing','nav','event','slider','titre','about','sli','trainer1','trainer','classe','slider1','galleri','schedule'));
})->name('/home');




Route::get('/abouts', function () {
    $nav = Navbar::all();
    $slider1 = Slider::all();
    $slider = Slider::all();
    $titre = Titre::all();
    $sli = DB::table('sliders')->where('order',true)->get();
    $about = About::all();
    $classe = Classe::all();
    $galleri = Gallery::take(6)->inRandomOrder()->get();
    $schedule = Schedule::all();
    // $schedule = Schedule::paginate(1);
    $trainer = Trainer::all();
    $pricing = Pricing::all();
    $event = DB::table('events')->where('order',true)->get();
    $trainer1 = DB::table('trainers')->where('user_id',2)->get();
    $client = Client::all();
    $map = Map::all();
    $newslater = Newslater::all();
    $footer = Footer::all();
    return view('pages/about-us', compact('footer','newslater','map','client','pricing','nav','event','slider','titre','about','sli','trainer1','trainer','classe','slider1','galleri','schedule'));
});

Route::get('/class', function () {
    $nav = Navbar::all();
    $slider1 = Slider::all();
    $slider = Slider::all();
    $titre = Titre::all();
    $sli = DB::table('sliders')->where('order',true)->get();
    $about = About::all();
    $classe = Classe::all();
    $galleri = Gallery::take(6)->inRandomOrder()->get();
    $schedule = Schedule::all();
    // $schedule = Schedule::paginate(1);
    $trainer = Trainer::all();
    $pricing = Pricing::all();
    $event = DB::table('events')->where('order',true)->get();
    $trainer1 = DB::table('trainers')->where('user_id',2)->get();
    $client = Client::all();
    $map = Map::all();
    $newslater = Newslater::all();
    $footer = Footer::all();
    return view('pages/class', compact('footer','newslater','map','client','pricing','nav','event','slider','titre','about','sli','trainer1','trainer','classe','slider1','galleri','schedule'));
});

Route::get('/galleri', function () {
    $nav = Navbar::all();
    $slider1 = Slider::all();
    $slider = Slider::all();
    $titre = Titre::all();
    $sli = DB::table('sliders')->where('order',true)->get();
    $about = About::all();
    $classe = Classe::all();
    $galleri = Gallery::paginate(6);
    $schedule = Schedule::all();
    // $schedule = Schedule::paginate(1);
    $trainer = Trainer::all();
    $pricing = Pricing::all();
    $event = DB::table('events')->where('order',true)->get();
    $trainer1 = DB::table('trainers')->where('user_id',2)->get();
    $client = Client::all();
    $map = Map::all();
    $newslater = Newslater::all();
    $footer = Footer::all();
    return view('pages/gallery', compact('footer','newslater','map','client','pricing','nav','event','slider','titre','about','sli','trainer1','trainer','classe','slider1','galleri','schedule'));
});

Route::get('/contact', function () {
    $nav = Navbar::all();
    $slider1 = Slider::all();
    $slider = Slider::all();
    $titre = Titre::all();
    $sli = DB::table('sliders')->where('order',true)->get();
    $about = About::all();
    $classe = Classe::all();
    $galleri = Gallery::take(6)->inRandomOrder()->get();
    $schedule = Schedule::all();
    // $schedule = Schedule::paginate(1);
    $trainer = Trainer::all();
    $pricing = Pricing::all();
    $event = DB::table('events')->where('order',true)->get();
    $trainer1 = DB::table('trainers')->where('user_id',2)->get();
    $client = Client::all();
    $map = Map::all();
    $newslater = Newslater::all();
    $footer = Footer::all();
    return view('pages/contact', compact('footer','newslater','map','client','pricing','nav','event','slider','titre','about','sli','trainer1','trainer','classe','slider1','galleri','schedule'));
});

Route::get('/amail', function () {
    
    return view('amail', compact(''));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/navbar', NavbarController::class)->middleware(['auth']);

Route::resource('/slider', SliderController::class)->middleware(['auth']);

Route::resource('/about', AboutController::class)->middleware(['auth']);

Route::resource('/titre', TitreController::class)->middleware(['auth']);

Route::resource('/classe', ClasseController::class)->middleware(['auth']);

Route::resource('/schedule', ScheduleController::class)->middleware(['auth']);

Route::resource('/gallery', GalleryController::class)->middleware(['auth']);

Route::resource('/trainer', TrainerController::class)->middleware(['auth']);

Route::resource('/event', EventController::class)->middleware(['auth']);

Route::resource('/pricing', PricingController::class)->middleware(['auth']);

Route::resource('/inscription', InscriptionController::class)->middleware(['auth']);

Route::resource('/client', ClientController::class)->middleware(['auth']);

Route::resource('/map', MapController::class)->middleware(['auth']);

Route::resource('/newslater', NewslaterController::class)->middleware(['auth']);

Route::resource('/footer', FooterController::class)->middleware(['auth']);

Route::resource('/adressemail', AdressemailController::class)->middleware(['auth']);

Route::resource('/messagerie', MessagerieController::class)->middleware(['auth']);



Route::post("/send-mail", [EmailController::class, "sendMail"])->name('sendMail');
