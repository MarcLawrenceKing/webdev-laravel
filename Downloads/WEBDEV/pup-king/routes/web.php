<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', function () {
//     return 'Sample UI';
// })->name('homePage');

// Route::get('about', function () {
//     return "<a href='" . route('homePage') . "'> Home</>";
// });


// Route::get('edit/{id}', function ($id) {
//     return "<a href='" . route('hello', $id) . "'> Edit</>";
// });

// Route::get('sample/{id}', function ($id) {
//     return $id;
// })->name('hello');

Route::group(['prefix' => 'user'], function () {

    Route::get('home', function () {
        return 'Sample UI';
    })->name('homePage');

    Route::get('about', function () {
        return "<a href='" . route('homePage') . "'> Home</>";
    });

    Route::get('edit/{id}', function ($id) {
        return "<a href='" . route('hello', $id) . "'> Edit</>";
    });

    Route::get('sample/{id}', function ($id) {
        return $id;
    })->name('hello');
});

Route::fallback(function () {
    return "<img src='https://media1.tenor.com/m/putSnlggm-MAAAAC/kween-yasmin-kween-yasmin-funny.gif'/>";
});

// Route::fallback(function () {
//     return redirect()->route('homePage');
// });


Route::group(['prefix' => 'admin'], function () {

    // Route::get('home', function () {
    //     return view('admin.home', ['name' => 'Marc']); // home is inside admin folder
    // })->name('home');

    // Route::get('home/{name}', function ($name) {
    //     return view('admin.home', ['name' => $name]); // home is inside admin folder
    // })->name('home');

    Route::get('home/{name}', function ($name) {
        return view('admin.home', compact('name')); // home is inside admin folder
    })->name('home');

    // Route::get('home1', function () {
    //     return view('admin.home1', compact('blogs') ); // home is inside admin folder
    // })->name('home1');

    Route::get('home1', [BlogController::class, 'retrieveBlogs']);

    Route::get('activity4', [BlogController::class, 'retrieveActivity4']);

    // submit
    Route::post('activity4', [LoginController::class, 'loginSubmit'])->name('activity4.submit');

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('activity9', [BlogController::class, 'retrieveActivity9']);
    Route::post('activity9', [BlogController::class, 'createActivity9'])->name('activity9.create');
});

Route::get('/blog/data', [BlogController::class, 'sampleModel']);
Route::get('/blog/data/{id}', [BlogController::class, 'sampleModel']);
Route::get('/blog/data/{id}/{cat}', [BlogController::class, 'sampleModel']);


Route::get('/try', [BlogController::class, 'index']);
