<?php

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
    return view('landing');
});

// Route::get('/fullStack', function (){
//     return view('fullStack');
// });
//
// Route::get('/applicationForm' , function (){
//     return view('applicationForm');
// });
//
// Route::get('/courseCatalog' , function (){
//     return view('courseCatalog');
// });
