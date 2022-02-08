<?php

use App\Models\Database;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('layouts.main', [
        "management" => Database::managementData(),
        "resume_we" => Database::work_experienceData(),
        "resume_awards" => Database::awardsData(),
        "portfolio" => Database::portolioData(),
    ]);


    //  $users->toArray();
});
