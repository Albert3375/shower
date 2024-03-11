<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('invitation');

Route::post('/confirmar-asistencia', [InvitadoController::class, 'confirmarAsistencia'])->name('confirmar-asistencia');

Route::get('/invitation', [InvitationController::class, 'index'])->name('invitation');
Route::get('/rsvp', [InvitationController::class, 'rsvp'])->name('rsvp');