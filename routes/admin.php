<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\DirectiveController;
use app\Http\Controllers\UserController;

Route::post('/create-director', 'UserController@createDirectorUser');
Route::post('/create-partner', 'UserController@createPartnerUser');