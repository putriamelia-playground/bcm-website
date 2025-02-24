<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InputAgendaController;
use App\Http\Controllers\InputArticleController;
use App\Http\Controllers\InputRegulationController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/article', [ArticleController::class, 'getArticleData']);

Route::get('/detailarticle/{slug}', [ArticleController::class, 'getArticleDetail']);

// Route::get('/agenda', [AgendaController::class, 'getAgendaData']);

Route::get('/detailagenda/{slug}', [AgendaController::class, 'getAgendaDetail']);

Route::get('/formuliragenda/{slug}', [AgendaController::class, 'getAgendaFormulirDetail']);

Route::get('/detailagendatag/{slug}', [AgendaController::class, 'getDetailTag']);

Route::get('/detailarticletag/{slug}', [ArticleController::class, 'getDetailTag']);

Route::get('/detailarticle/{slug}/download', [ArticleController::class, 'getArticleDownload'])->name('article.download');

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

// Route::get('/admin', function () {
//     return view('admin\adminlogin', ['title' => 'ini khusus admin']);
// });

Route::get('/admin', function () {
    return view('admin.admindashboard', ['title' => 'Dashboard Admin']);
});

Route::resource('inputarticle', InputArticleController::class);

Route::resource('inputagenda', InputAgendaController::class);

Route::resource('inputregulation', InputRegulationController::class);

Route::get('/landingenpage', function () {
    return view('landingenpage');
});

Route::get('/regulations', [InputRegulationController::class, 'getData']);

// Route::get('/newsletter', [NewsletterController::class, 'getData']);

Route::resource('inputemailnewsletter', NewsletterController::class);
