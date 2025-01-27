<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputAgendaController extends Controller
{
    public function index()
    {
        $title = 'halo';
        $article = Article::all();
        return view('admin.showarticle', compact('title', 'article'));
    }
}
