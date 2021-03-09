<?php

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
    return view('welcome');
});

Route::prefix('tools')->group(function () {
    Route::get('/',                 function () { return view('tools/tools'); });
    Route::get('/alphabetize',      function () { return view('tools/alphabetize'); });
    Route::get('/capitalize',       function () { return view('tools/capitalize'); });
    Route::get('/character-count',  function () { return view('tools/character-count'); });
    Route::get('/edit-counter',     function () { return view('tools/edit-counter'); });
    Route::get('/random-generator', function () { return view('tools/random-generator'); });
    Route::get('/word-count',       function () { return view('tools/word-count'); });
    Route::get('/words-per',        function () { return view('tools/words-per'); });
});

Route::prefix('word')->group(function () {
    Route::get('/',                     function () { return view('word/index'); });
    Route::get('/alphabetize',          function () { return view('word/alphabetize'); });
    Route::get('/auto-capitalize',      function () { return view('word/auto-capitalize'); });
    Route::get('/character-count',      function () { return view('word/character-count'); });
    Route::get('/edit-counter',         function () { return view('word/edit-counter'); });
    Route::get('/our-tools',            function () { return view('word/our-tools'); });
    Route::get('/random-word-generator',function () { return view('word/random-word-generator'); });
    Route::get('/website-word-count',   function () { return view('word/website-word-count'); });
    Route::get('/words-per-page',       function () { return view('word/words-per-page'); });
});
