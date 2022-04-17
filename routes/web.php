<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DadosInstagram;
use App\Http\Controllers\DadosYoutube;
use App\Http\Controllers\DadosFacebook;


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

Route::get('/', [DadosInstagram::class, 'index']);

Route::get('/facebook', [DadosFacebook::class, 'index']);

Route::get('/youtube', [DadosYoutube::class, 'index']);


