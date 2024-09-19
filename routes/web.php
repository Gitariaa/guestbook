<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

//middleware untuk membatasi user, prefix agar semua route selalu di awali 'admin/' , as itu untuk route(admin...) atau namenya
Route::group(['middleware' => ['auth'], 'prefix' => 'admin' , 'as' => 'admin.'
], function() {

    //hasinya= guestbook.test/admin ->route('admin.index')
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); 
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //Route CRUD institution
    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);
    
    //Route CRUD Guest
    Route::resource('/guests', App\Http\Controllers\GuestController::class)
    ->only(['index', 'show', 'destroy']);

    //Route CRUD Report
    Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
});
