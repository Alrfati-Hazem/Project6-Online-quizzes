<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

### Admin ###

//Admin-Dashboard
Route::group(['middleware' => 'admin'],function() {
Route::get("/admin",[AdminController::class,'dashboard'])->name('dashboard');
//Manage-User
Route::resource("/manage-user",UserController::class);
//Manage-Category
Route::resource("/manage-category",CategoryController::class);
//Manage-Exam
Route::resource("/manage-exam",ExamController::class);
//Manage-Question
Route::resource("/manage-question",QuestionController::class);
//Manage-Result
Route::resource("/manage-result",ResultController::class);
Route::post("/manage-result/{resultId}",[ResultController::class,"delete"])->name("result_delete");
Route::get("/filter",[FilterController::class,"userFilter"])->name("userFilter");
}
);


### Public-Site ###
Route::get("/",[SiteController::class,"index"])->name("index");
Route::get("/contact",[SiteController::class,"contact"])->name("contact");
Route::get("/category",[SiteController::class,"category"])->name("category");
Route::get("/exam/{categoryId}",[SiteController::class,"exam"])->name("exam");
Route::get("/quiz/{examId}",[SiteController::class,"quiz"])->name("quiz");
Route::Post("/storeResult/{examId}",[SiteController::class,"storeResult"])->name("storeResult");
Route::get("/show-result/{examId}",[SiteController::class,"showResult"])->name("showResult");
Route::get("/review/{examId}",[SiteController::class,"review"])->name("review");
Route::get("/profile",[SiteController::class,"showAllExam"])->name("showAllExam");
