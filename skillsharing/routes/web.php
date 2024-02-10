<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

//Route for Landing Page
Route::get('/home', function(){ return view('landingPage');})->name('home');

Route::get('/profile', function(){ return view('profilePage');})->name('profile');

Route::get('/contact', function(){ return view('contactPage');})->name('contact');

Route::get('/questions', function(){ return view('FAQPage');})->name('questions');

Route::get('/instructors', function(){ return view('instructors');})->name('instructors');

Route::get('/Courses', function(){ return view('Course');})->name('Details');

Route::get('/Details', function(){ return view('Details');})->name('Courses');
