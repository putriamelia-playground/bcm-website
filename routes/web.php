<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/artikel', [ArticleController::class, 'getArticleData']);

Route::get('/detailartikel/{slug}', [ArticleController::class, 'getArtikelDetail']);

// Route::get('/agenda', [AgendaController::class, 'getAgendaData']);

Route::get('/detailagenda/{slug}', [AgendaController::class, 'getAgendaDetail']);

Route::get('/formuliragenda/{slug}', [AgendaController::class, 'getAgendaFormulirDetail']);

Route::get('/detailtag/{id}', [AgendaController::class, 'getDetailTag']);

Route::resource('agenda', AgendaController::class);

Route::get('/about-us', function () {
    return view('aboutus', ['title' => 'About Us Page']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan Page']);
});

Route::get('/k3-product', function () {
    return view('k3product', ['title' => 'K3 Product Page']);
});
