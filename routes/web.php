<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

/*
Route::get('/', function () {
    return view('welcome');

});
*/

Route::get('/', [WebController::class, 'index']);
Route::get('/web/{product_id}', [WebController::class, 'show'])->name('web.show');

//Solo vistas
Route::get('/promociones', function () {
    return view('promociones');

})->name('promociones');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
