<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\JobDescriptionController;
use App\Http\Controllers\OnlineStatusController;
use App\Http\Controllers\RegistrationApplicationController;
use App\Http\Controllers\TestController;
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

Route::get("/", [OnlineStatusController::class, "index"])->middleware(['auth']);
Route::get("/online_status", [OnlineStatusController::class, "index"])->middleware(['auth'])->name("online_status");
Route::post("/online_status", [OnlineStatusController::class, "store"])->middleware(['auth']);
Route::get("/online_status/{id}/show", [OnlineStatusController::class, "show"])->middleware(['auth']);
Route::get("/online_status/{id}/update", [OnlineStatusController::class, "edit"])->middleware(['auth']);
Route::put("/online_status/{id}/update", [OnlineStatusController::class, "update"])->middleware(['auth']);
Route::post("/online_status/{id}/delete", [OnlineStatusController::class, "destroy"])->middleware(['auth']);
Route::get("/job_description", [JobDescriptionController::class, "index"])->middleware(['auth'])->name("job_description");
Route::post("/job_description", [JobDescriptionController::class, "store"])->middleware(['auth']);
Route::get("/job_description/{id}/show", [JobDescriptionController::class, "show"])->middleware(['auth']);
Route::get("/job_description/{id}/update", [JobDescriptionController::class, "edit"])->middleware(['auth']);
Route::put("/job_description/{id}/update", [JobDescriptionController::class, "update"])->middleware(['auth']);
Route::post("/job_description/{id}/delete", [JobDescriptionController::class, "destroy"])->middleware(['auth']);

Route::get("/registration_application", [RegistrationApplicationController::class, "index"])->middleware(['auth'])->name("rgApp.index");
Route::post("/viewRegApplication/{id}", [RegistrationApplicationController::class, "show"]);

require __DIR__ . '/auth.php';
