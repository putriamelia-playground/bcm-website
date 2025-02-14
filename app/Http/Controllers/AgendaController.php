<?php

namespace App\Http\Controllers;

use App\Mail\SubmitMail;
use App\Models\Agenda;
use App\Models\Form;
use App\Models\ServiceSubType;
use Illuminate\Http\Request;
use Mail;

class AgendaController extends Controller
{
    public function index()  // show data
    {
        $agenda = Agenda::all();
        $title = 'Agenda Page';

        return view('agenda', compact(
            'agenda', 'title'
        ));
    }

    public function getAgendaDetail($slug)
    {
        $data = Agenda::where('agenda_slug', $slug)->first();
        $slug = $data->agenda_slug;
        $title = 'Detail Agenda Page';

        return view('detailagenda', compact(
            'title', 'data', 'slug'
        ));
    }

    public function getDetailTag($slug)
    {
        $data = ServiceSubType::where('service_subtype_slug', $slug)->first();
        $title = 'Detail Tag Agenda Page';

        return view('detailagendatag', compact('title', 'data'));
    }

    public function getAgendaFormulirDetail($slug)
    {
        $data = Agenda::where('agenda_slug', $slug)->first();
        $title = 'Formulir Page';
        return view('formuliragenda', compact('title', 'data'));
    }

    public function store(Request $request)  // store formulir agenda
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
                'participant_name.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'participant_email.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'company_name.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'participant_orgunit.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'company_address.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'phone_number.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'company_email.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'privacy_agreement.required' => 'Data yang dimasukkan tidak boleh kosong!',
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

        $data = Agenda::where('id', $request->agenda_id)->select('*')->first();
        // dd($data);

        $emailSubject = 'Konfirmasi Pendaftaran – ' . $data->agenda_name;
        $emailParticipantName = $request->participant_name;
        $emailAgendaName = $data->agenda_name;
        $emailDateAgenda = date('d F Y', strtotime($data->agenda_start_date)) . ' - ' . date('d F Y', strtotime($data->agenda_end_date));
        $emailTimeAgenda = $data->agenda_time;

        Mail::to($request->participant_email)->cc($request->company_email)->send(new SubmitMail($emailSubject, $emailParticipantName, $emailAgendaName, $emailDateAgenda, $emailTimeAgenda));

        return redirect()
            ->route('agenda.index')
            ->with('success', 'Formulir Berhasil di Simpan');
    }
}
