<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\BrancheController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProjectController;
use App\Http\Controllers\Site\ServicesController;
use App\Http\Controllers\Site\StaticPageController;
use App\Http\Controllers\Site\ContractsPlatformController;

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
    Route::get('branches', [BrancheController::class,'index'])->name('branches');

    //-------------------------------- End Home Page Routes ------------------------------//


    // -------------------------------- Static Page Routes --------------------------------//


    //-------------------------------- About Page Routes ------------------------------//
    Route::get('about', [StaticPageController::class,'about'])->name('about');
    //---------------------------------- End About Page Routes ------------------------------//



    //-------------------------------- Services Page Routes ------------------------------//
    Route::get('services', [ServicesController::class,'index'])->name('services');
    Route::get('services/show/{slug}', [ServicesController::class,'show'])->name('services.show');
    Route::get('services/order/{slug}', [ServicesController::class,'order'])->name('services.order');
    Route::post('services/order', [ServicesController::class,'order_request'])->name('services.order.request');
    //---------------------------------- End Services Page Routes ------------------------------//


    //---------------------------------- Contact Page Routes ------------------------------//
    Route::get('contact', [StaticPageController::class,'contact'])->name('contact');
    //---------------------------------- End Contact Page Routes ------------------------------//



    //----------------------------------- Projects Page Routes ------------------------------//
    Route::get('projects', [ProjectController ::class,'index'])->name('projects');
    Route::get('projects/show/{slug}', [ProjectController ::class,'show'])->name('projects.show');
    //----------------------------------- End Projects Page Routes ------------------------------//


    //----------------------------------- Blog Page Routes ------------------------------//
    Route::get('blogs', [BlogController ::class,'index'])->name('blogs');
    Route::get('blogs/show/{slug}', [BlogController ::class,'show'])->name('blogs.show');
    //----------------------------------- End Blog Page Routes ------------------------------//

    //----------------------------------- Partners Page Routes ------------------------------//
    Route::get('partners', [StaticPageController::class,'partners'])->name('partners');
    //----------------------------------- End Partners Page Routes ------------------------------//

    //------------------------------------ Regulations Page Routes ------------------------------//
    Route::get('regulations', [StaticPageController::class,'regulations'])->name('regulations');
    //------------------------------------ End Regulations Page Routes ------------------------------//


    //------------------------------------ Contracts Platform Page Routes ------------------------------//
    Route::get('contracts-platform', [ContractsPlatformController::class,'index'])->name('contracts.platform');
    //------------------------------------ End Contracts Platform Page Routes ------------------------------//





    // Route::get('courses', [StaticPageController::class,'courses'])->name('courses');



    //-------------------------------- End Static Page Routes ------------------------------//










    Route::get('/lang/{lang}', [HomeController::class,'lang'])->name('lang');
});


Route::fallback(function () {
    return redirect()->route('site.home');
});
