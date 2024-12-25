<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Faker\Factory as Faker;

Route::get('/', function () {
    return Inertia::render('home', ['name'=> 'Bagas']);
});

Route::inertia('/about', 'about/about');

// Route::get('/about', function(){
    //     return Inertia::render('about/about');
    // });

Route::inertia('/app', 'app');
Route::inertia('/gpt', 'gpt');

Route::get('/texts', function () {
    return response()->json([
        'texts' => [
            'Selamat datang di aplikasi typing test.',
            'Ketikkan teks ini dengan cepat dan akurat.',
            'Ini adalah tes kecepatan mengetik.',
        ]
    ]);
});



Route::get('/random-word', function () {
    $faker = Faker::create('id_ID'); // Bahasa Indonesia
    $randomWord = $faker->words(100);
    return response()->json($randomWord);
});
