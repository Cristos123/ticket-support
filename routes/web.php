<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function() {
    return view('about-us');
});

Route::get('/create-ticket', [TicketController::class, 'create'])->name('ticket.create');
Route::get('/tickets', [TicketController::class, 'index'])->name('ticket.index');
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
Route::post('/create-ticket', [TicketController::class, 'store'])->name('ticket.store');
