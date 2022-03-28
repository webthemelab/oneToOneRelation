<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foreignKeyController;




Route::get('/',[foreignKeyController::class, 'index'])->name('home');
Route::post('/add/class',[foreignKeyController::class, 'addClass'])->name('add.class');
Route::get('/edit/class/{id}',[foreignKeyController::class, 'editClass'])->name('edit.class');
Route::post('/update/class',[foreignKeyController::class, 'updateClass'])->name('update.class');
Route::get('/delete/class/{id}',[foreignKeyController::class, 'deleteClass'])->name('delete.class');


//Section add
Route::get('/add/section',[foreignKeyController::class, 'addSection'])->name('add.section');

Route::post('/store/section',[foreignKeyController::class, 'storeSection'])->name('store.section');

Route::get('/edit/section/{id}',[foreignKeyController::class, 'editSection'])->name('edit.section');

Route::post('/update/section',[foreignKeyController::class, 'updateSection'])->name('update.section');

Route::get('/delete/section/{id}',[foreignKeyController::class, 'deleteSection'])->name('delete.section');


/*Shift start */
Route::get('/add/shift',[foreignKeyController::class, 'shiftAdd'])->name('add.shift');

Route::post('/store/shift',[foreignKeyController::class, 'shiftStore'])->name('store.shift');

Route::get('/view/shift',[foreignKeyController::class, 'shiftView'])->name('view.shift');

Route::get('/edit/shift/{id}',[foreignKeyController::class, 'shiftEdit'])->name('edit.shift');
Route::post('/update/shift',[foreignKeyController::class, 'shiftUpdate'])->name('shift.update');
/*Shift end */






