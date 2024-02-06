<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Selamat datang';
 });

Route::get('/halo', function () {
return '<h1>Halo, Ninja!</h1>';
});

//  Route::get('/', [HomeController::class, 'index']);

 Route::get('/users/{id}', function ($id) {
    return "User ID: $id";
    });

    Route::post('/users/store', function () {
        // Code untuk membuat pengguna baru
        });
        Route::post('/users/{id}/update', function () {
            // Code untuk memperbarui pengguna
            });
            Route::post('/users/{id}/destroy', function () {
                // Code untuk menghapus pengguna
                });

    Route::get('/users/{id}', function ($id) {
// Mengambil pengguna berdasarkan ID
})->name('users.show');

Route::prefix('users')->group(function () {
    // Menjadi hanya / daripada sebelumnya /users
    Route::get('/', function () {
    return "<h1>Action index.</h1>";
    })->name('users.index');
    // Menjadi hanya {id} daripada sebelumnya /users/{id}
    Route::get('/{id}', function ($id) {
    return "<h1>Action show dengan id: ".$id."</h1>";
    })->name('users.show');
    });

    // Required
Route::get('/user/{id}', function($id){
    // baris code mengolah nilai dari $id
    });
    // Optional
    Route::get('/user/{id?}', function ($id =null){
    if ($id) {
    // baris code jika $id ada nilainya
    }else{
    // baris code jika $id tidak ada nilainya
    }
    });
    Route::get('/user/{id}', function ($id) {
        return "User ID: " . $id;
        })->where('id', '[0-9]+');

        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/create', [UserController::class, 'create']);
        Route::get('/users/', [UserController::class, 'index']);
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users/', [UserController::class, 'store']);
        Route::get('/users/{id}', [UserController::class, 'show']);
        Route::get('/users/{id}/edit', [UserController::class, 'edit']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);