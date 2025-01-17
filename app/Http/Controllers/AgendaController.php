<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Form;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()  // show data
    {
        $agenda = Agenda::all();
        $dataPivot = Agenda::with('tags')->get();
        $title = 'Agenda Page';

        return view('agenda', compact(
            'agenda', 'title', 'dataPivot'
        ));
    }

    public function getAgendaDetail($slug)
    {
        $data = Agenda::where('agenda_slug', $slug)->first();
        $slug = $data->agenda_slug;
        $title = 'Detail Artikel Page';

        return view('detailagenda', compact(
            'title', 'data', 'slug'
        ));
    }

    public function getDetailTag()
    {
        return view('detailtag');
    }

    public function getAgendaFormulirDetail($slug)
    {
        $data = Agenda::where('agenda_slug', $slug)->first();
        $title = 'Formulir Page';
        return view('formuliragenda', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'participant_name' => 'required',
                'participant_email' => 'required',
                'company_name' => 'required',
                'participant_orgunit' => 'required',
                'company_address' => 'required',
                'phone_number' => 'required|numeric',
                'company_email' => 'required',
                'privacy_agreement' => 'required',
                'email_agreement' => '',
            ],
            [
                'participant_name.required' => 'Field ini wajib diisi !',
                'participant_email.required' => 'Field ini wajib diisi !',
                'company_name.required' => 'Field ini wajib diisi !',
                'participant_orgunit.required' => 'Field ini wajib diisi !',
                'company_address.required' => 'Field ini wajib diisi !',
                'phone_number.required' => 'Field ini wajib diisi !',
                'company_email.required' => 'Field ini wajib diisi !',
                'privacy_agreement.required' => 'Field ini wajib diisi !',
            ]
        );

        $agendaform = new Form();
        $agendaform->bcm_agenda_id = $request->agenda_id;
        $agendaform->participant_name = $request->participant_name;
        $agendaform->participant_email = $request->participant_email;
        $agendaform->company_name = $request->company_name;
        $agendaform->participant_orgunit = $request->participant_orgunit;
        $agendaform->company_address = $request->company_address;
        $agendaform->phone_number = $request->phone_number;
        $agendaform->company_email = $request->company_email;
        $agendaform->privacy_agreement = $request->privacy_agreement;
        $agendaform->email_agreement = $request->input('email_agreement', 0);
        $agendaform->save();

        return redirect()
            ->route('agenda.index')
            ->with('message', 'Formulir Berhasil di Simpan');  // TODO
    }
}
