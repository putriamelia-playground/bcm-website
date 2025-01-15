<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function getAgendaData()
    {
        $agenda = Agenda::all();
        $title = 'Agenda Page';

        return view('agenda', compact(
            'agenda', 'title'
        ));
    }

    public function getAgendaDetail($id)
    {
        $data = Agenda::find($id);
        // $slug = $data->article_slug;
        $title = 'Detail Artikel Page';

        return view('detailagenda', compact(
            'title', 'data'
        ));
    }
}
