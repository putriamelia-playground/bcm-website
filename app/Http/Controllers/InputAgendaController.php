<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\AgendaSubtype as PivotAgendaSubJenisLayanan;
use App\Models\ServiceSubType as SubJenisLayanan;
use Illuminate\Http\Request;

class InputAgendaController extends Controller
{
    public function index()
    {
        $title = 'halo';
        $agenda = Agenda::all();
        return view('admin.showagenda', compact('title', 'agenda'));
    }

    public function create()
    {
        $title = 'Input Agenda';
        $data = SubJenisLayanan::all();
        return view('admin.inputagenda', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'agenda_slug' => 'required|unique:bcm_agendas|regex:/^\S*$/u',
                'agenda_name' => 'required',
                'agenda_start_date' => 'required',
                'agenda_end_date' => 'required',
                'agenda_time' => 'required',
                'agenda_desc' => 'required',
                'agenda_pamphlet' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'agenda_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'agenda_slug.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_slug.unique' => 'Data yang dimasukkan harus unik!',
                'agenda_slug.regex' => 'Data yang dimasukkan tidak boleh mengandung spasi!',
                'agenda_name.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_start_date.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_end_date.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_desc.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_pamphlet.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'agenda_image.required' => 'Data yang dimasukkan tidak boleh kosong!',
            ]
        );

        $request->agenda_pamphlet->move(storage_path('app/public/pamflet-agenda'), $request->agenda_pamphlet->getClientOriginalName());
        $request->agenda_image->move(storage_path('app/public/pamflet-agenda'), $request->agenda_image->getClientOriginalName());
        $agendaform = new Agenda();
        $agendaform->agenda_slug = $request->agenda_slug;
        $agendaform->agenda_name = $request->agenda_name;
        $agendaform->agenda_start_date = $request->agenda_start_date;
        $agendaform->agenda_end_date = $request->agenda_end_date;
        $agendaform->agenda_time = $request->agenda_time;
        $agendaform->agenda_desc = $request->agenda_desc;
        $agendaform->agenda_pamphlet = 'pamflet-agenda/' . $request->agenda_pamphlet->getClientOriginalName();
        $agendaform->agenda_image = 'pamflet-agenda/' . $request->agenda_image->getClientOriginalName();

        if (Agenda::all() == null) {
            $data = Agenda::select('id')->orderby('sort_order', 'desc')->first();
            $dataFinn = Agenda::where('id', $data->id)->select('sort_order')->first();
            $latestSort = $dataFinn->sort_order;
            $agendaform->sort_order = $latestSort + 1;
        } else {
            $agendaform->sort_order = 1;
        }
        $agendaform->save();

        $agendaPivot = new PivotAgendaSubJenisLayanan();
        $agendaPivot->bcm_agenda_id = $agendaform->id;
        $agendaPivot->bcm_service_subtype_id = $request->subtipelayananId;
        $agendaPivot->save();

        return redirect()
            ->route('inputagenda.index')
            ->with('success', 'Agenda Berhasil di Simpan');
    }
}
