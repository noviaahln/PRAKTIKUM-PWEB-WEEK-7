<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

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
    return view('landing');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get("/home", function () {
    $contacts = [];
    $faker = Faker::create();
    for( $i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name'=> $faker->name,
            'email'=> $faker->unique()->safeEmail,
            'phone'=> $faker->phoneNumber,
            
        ];
    };
        
    return view("homepage", ['contacts' => $contacts]);
});





