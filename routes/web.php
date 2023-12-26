<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NosotrosController;

use App\Http\Controllers\DirectiveController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PupilController;
use App\Http\Controllers\DirectorController;


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

Route::get('/', function () {
    return view('select-type');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:directive', // Add this line
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/nosotros', [NosotrosController::class, '__invoke'])->name('nosotros');


Route::get('/directives/create', [DirectiveController::class, 'create'])->name('directives.create');
Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
// Add more routes as needed
Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::get('/pupils/create', [PupilController::class, 'create'])->name('pupils.create');
Route::get('/directors/create', [DirectorController::class, 'create'])->name('directors.create');
Route::post('/directives', [DirectiveController::class, 'store'])->name('directives.store');
Route::post('/players', [PlayerController::class, 'store'])->name('players.store');



