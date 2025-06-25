<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\ServiceTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),
'verified',])->group(function () {

//Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
   Route::get('/dashboard', [AdminPageController::class, 'index'])->name('dashboard');

   Route::group(['prefix' => 'service_type', 'as' => 'type.'], function(){

        Route::get('/index',[ServiceTypeController::class,'index'])->name('service_type');
        Route::get('/create',[ServiceTypeController::class, 'create'])->name('create_service_type');
        Route::post('/store',[ServiceTypeController::class, 'store'])->name('store');
        Route::get('/edit',[ServiceTypeController::class, 'edit'])->name('edit_service_type');
        Route::get('/delete',[ServiceTypeController::class, 'delete'])->name('delete_service_type');
   });
    
});
