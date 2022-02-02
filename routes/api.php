<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/sections', [\App\Http\Controllers\Client\QuestionSectionController::class, 'sections'])->name('api_sections');
Route::post('/sections/questions', [\App\Http\Controllers\Client\QuestionSectionController::class, 'questions'])->name('api_sections_questions');
Route::post('/sections/questions/chiffrage/downloadOrSendPdf', [\App\Http\Controllers\Client\ChifrageController::class, 'downloadOrSendPdf'])->name('downloadOrSendPdf');