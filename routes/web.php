<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Pages
Route::get("/", [HomeController::class, "index"])->name("home.index");
Route::get("/a-propos", [HomeController::class, "about"])->name("home.about");

// Blog
Route::get("/blog", [BlogController::class, "index"])->name("blog.index");
Route::get("/blog/categorie/{categorie}", [BlogController::class, "index"])->name("blog.categorie");
Route::get("/blog/{post:slug}", [BlogController::class, "show"])->name("blog.show");
