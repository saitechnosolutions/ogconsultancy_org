<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BusinessImmigrationController;
use App\Http\Controllers\BusinessSetupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\EServicesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RegistrationApplicationController;
use App\Http\Controllers\SkilledImmigrationController;
use App\Http\Controllers\StudentVisaController;
use App\Http\Controllers\SuccessGalleryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VisitVisaController;
use App\Http\Controllers\WhatWeDoController;
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

// home page
Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/home', [HomeController::class, "home"]);



// about us page
Route::get("/about", [AboutUsController::class, "index"])->name("about");


// e-services page
Route::get('/e_services', [EServicesController::class, "index"])->name("e_services");

// successgallery page
Route::get('/success_gallery', [SuccessGalleryController::class, "index"])->name("success_gallery");

// Contact Page
Route::get('/contact', [ContactController::class, "index"])->name("contact");

// Locations Page
Route::get('/locations', [LocationsController::class, "index"])->name("locations");
Route::view('/careers','pages.careers');




//Immigration Type  drop down pages
Route::get("/skilled_immigration", [SkilledImmigrationController::class, "index"])->name("skilled_immigration");
Route::get("/student_visa", [StudentVisaController::class, "index"])->name("student_visa");
Route::get("/business_immigration", [BusinessImmigrationController::class, "index"])->name("business_immigration");
Route::get("/visit_visa", [VisitVisaController::class, "index"])->name("visit_visa");


//Directors Page
Route::get("/directors", [DirectorsController::class, "index"])->name("directors");

// What we do page
Route::get("/what_we_do", [WhatWeDoController::class, "index"])->name("whatWeDo");

// Business Setup page
Route::get("business_setup", [BusinessSetupController::class, "index"])->name("business_setup");


// Privacy Policy Page
Route::get("privacy_policy", [PrivacyPolicyController::class, "index"])->name("privacy_policy");





// api
Route::post("/online_status_check/{id}", [EServicesController::class, "onlineStatus"]);
Route::post("/job_description/{id}", [EServicesController::class, "jobDescription"]);



// Mail
Route::post("/mail", [Mailcontroller::class, "index"]);


// Eservices Registraton Application
Route::post("registration_application", [RegistrationApplicationController::class, "index"]);

// Route::view('/careers','pages.careers');