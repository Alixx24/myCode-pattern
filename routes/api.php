<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/student/show', [StudentController::class, 'show'])->name('cat.delete');

Route::post('/student/store', [StudentController::class, 'store'])->name('cat.store');

Route::get('/student/{id}/show-edit', [StudentController::class, 'showEdit'])->name('cat.delete');


Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('cat.edit');

Route::put('/student/{id}/edit', [StudentController::class, 'update'])->name('cat.update');

Route::delete('/student/{id}/delete', [StudentController::class, 'destroy'])->name('cat.delete');

