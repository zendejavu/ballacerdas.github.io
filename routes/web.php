<?php

use App\Models\Database;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessController;

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

Route::get('/', [ProcessController::class, 'all']);
Route::get('/contact', [ProcessController::class, 'store']);
// Route::get('/#portfolio/test', function () {
//     return 'Hello World';
// });
// Route::get('/portfolio',[ProcessController::class, 'Portfolio']);
