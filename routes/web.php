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

Route::get('/', function () {


    $data = [

        'name' => 'Simone',
        'lastname' => 'Nolberto',
        'job' => 'full stack web developer'

    ];

    return view('home', $data);
});


Route::get('/contacts', function () {


    $data = [
        'contacts' => [
            'number' => '002365929',
            'mail' => 'simto46@gmail.com',
            'address' => 'via tal de tali 98'
        ]


    ];

    return view('contacts', $data);
});
