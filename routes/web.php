<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ContactController;


Route::get('/', function(){
    return view('Home');
})->name('home');

Route::get('/about', function(){
    return view('/about');
})->name('about');

Route::get('/contact', function(){
    return view('/contact');
})->name('contact');

Route::get('/contact/all/{id}',
    [ContactController::class, 'showOnMeassage']
)->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    [ContactController::class, 'updateMessage']
)->name('contact-update');

Route::post('/contact/all/{id}/update',
    [ContactController::class, 'updateMessageSubmit']
)->name('contact-update-submit');

Route::get('/contact/all/{id}/delete',
    [ContactController::class, 'deleteMessage']
)->name('contact-delete');

Route::get('/contact/all',
    [ContactController::class, 'allData']
)->name('contact-data');

Route::post('/contact/submit',
    [ContactController::class, 'submit']
)->name('contact-form');