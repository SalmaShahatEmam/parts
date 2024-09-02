<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\StaticPageController;

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

Route::namespace('Site')->name('site.')->middleware('lang')->group(function () {
    // -------------------------------- Home Page Routes --------------------------------//
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::post('service-request', [HomeController::class,'service_request'])->name('service.request');
    Route::post('contact-request', [HomeController::class,'contact_request'])->name('contact.request');

    //-------------------------------- End Home Page Routes ------------------------------//


    // -------------------------------- Static Page Routes --------------------------------//


    //-------------------------------- About Page Routes ------------------------------//
    Route::get('about', [StaticPageController::class,'about'])->name('about');
    //---------------------------------- End About Page Routes ------------------------------//



    //-------------------------------- Services Page Routes ------------------------------//
    Route::get('services', [StaticPageController::class,'services'])->name('services');
    //---------------------------------- End Services Page Routes ------------------------------//


    //---------------------------------- Contact Page Routes ------------------------------//
    Route::get('contact', [StaticPageController::class,'contact'])->name('contact');
    //---------------------------------- End Contact Page Routes ------------------------------//



    //----------------------------------- Projects Page Routes ------------------------------//
    Route::get('projects', [StaticPageController::class,'projects'])->name('projects');
    //----------------------------------- End Projects Page Routes ------------------------------//


    //----------------------------------- Blog Page Routes ------------------------------//
    Route::get('blogs', [StaticPageController::class,'blogs'])->name('blogs');
    //----------------------------------- End Blog Page Routes ------------------------------//

    //----------------------------------- Partners Page Routes ------------------------------//
    Route::get('partners', [StaticPageController::class,'partners'])->name('partners');
    //----------------------------------- End Partners Page Routes ------------------------------//

    //------------------------------------ Regulations Page Routes ------------------------------//
    Route::get('regulations', [StaticPageController::class,'regulations'])->name('regulations');
    //------------------------------------ End Regulations Page Routes ------------------------------//





    // Route::get('courses', [StaticPageController::class,'courses'])->name('courses');



    //-------------------------------- End Static Page Routes ------------------------------//










    Route::get('/lang/{lang}', [HomeController::class,'lang'])->name('lang');
});


Route::fallback(function () {
    return redirect()->route('site.home');
});
