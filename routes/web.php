<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;

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
Route::get('/posts', Posts::class);
Route::get('/pencatatan', function () {
    return view('livewire\pencatatans');
  
}); 
Route::get('/jadwal', function () {
        return view('livewire/jadwals');
        
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
