<?php

use Illuminate\Support\Facades\Route;

// Root URL
Route::view('/', 'home')->name('home');

// Page routes
Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');

// Project detail pages
Route::view('/projects/{project}', 'projects.{project}')->name('project.show');
?>