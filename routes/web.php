<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\BateauController;
use App\http\Controllers\EquipementController;

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
    return view('accueil');
})->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');




Route::get('/affichage_ferry',[BateauController::class, 'index'])->name('affichage_ferry');
Route::get('/create_bateau', [BateauController::class, 'create'])->name('create_bateau');
Route::get('/bateaux/{id}', [BateauController::class, 'show'])->name('bateaux.show');
Route::resource('bateaux', BateauController::class);
Route::post('/bateaux', [BateauController::class, 'store'])->name('bateaux.store');
Route::delete('/bateaux/{id}', [BateauController::class, 'destroy'])->name('bateaux.destroy');
Route::resource('equipements', EquipementController::class);
Route::get('/creerPDF', [BateauController::class, 'creerPDF'])->name('creerPDF');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
require __DIR__.'/auth.php';
