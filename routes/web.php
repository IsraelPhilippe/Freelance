<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index')->name('projects.index');

Route::view('/projects/{projects}', 'projects.show')->name('projects.show');

