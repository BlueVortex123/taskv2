<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreDataController;

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
Route::get('/users/add', [StoreDataController::class, 'AddUser'])->name('users.add');
Route::post('/users/store', [StoreDataController::class, 'StoreUser'])->name('user.store');


Route::get('/tasks/view', [StoreDataController::class, 'ViewTasks'])->name('tasks.view');
Route::get('/tasks/add', [StoreDataController::class, 'AddTasks'])->name('tasks.add');
Route::post('/tasks/store', [StoreDataController::class, 'StoreTasks'])->name('tasks.store');
Route::get('/tasks/edit/{id}', [StoreDataController::class, 'EditTasks'])->name('tasks.edit');
Route::post('/tasks/update/{id}', [StoreDataController::class, 'UpdateTasks'])->name('tasks.update');
