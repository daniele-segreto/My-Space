<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyspaceController;

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

Route::get("/", [HomeController::class,"home"])->name("home");

Route::get("contact", [ContactController::class,"contact"])->name("contact");
Route::post("contact/submit", [ContactController::class, "submit"])->name("submit");

Route::get("myspace", [MyspaceController::class,"posts"])->name("myspace");
Route::post("/post/store", [MyspaceController::class, "postStore"])->name("post.store");
Route::get("/post/update/{post}", [MyspaceController::class, "postUpdate"])->name("post.update");
Route::put("/post/edit/{post}", [MyspaceController::class, "postEdit"])->name("post.edit");
Route::delete("/post/delete/{post}", [MyspaceController::class, "postDelete"])->name("post.delete");