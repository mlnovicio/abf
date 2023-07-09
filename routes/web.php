<?php

use App\Http\Controllers\BorrowersLogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* <!-- Login Form route default --> */
Route::get('/', function () {
    return Inertia::render('Auth/Login');
});
/* <!-- Login Form route default --> */

/* <!-- Register Form route --> */
Route::get('/reg', function () {
    return Inertia::render('Auth/Register');
});
/* <!-- Register Form route --> */


/* <!-- Goes Here when login --> */
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('dashboard');
/* <!-- Goes Here when login --> */

/* <!-- BorrowerLogs Resource--> */
Route::get('/blcreate', function () {
    return Inertia::render('BorrowersLog/Create');
})->middleware(['auth']);

Route::get('/blindex', function () {
    return Inertia::render('BorrowersLog/Index');
})->middleware(['auth']);

Route::resource('BorrowersLog', BorrowersLogController::class)
    ->only(['index', 'store'])
    ->middleware(['auth']);
/* <!-- BorrowerLogs Resource--> */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
