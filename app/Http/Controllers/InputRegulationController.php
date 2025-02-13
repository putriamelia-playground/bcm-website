<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;

class InputRegulationController extends Controller
{
    public function index()
    {
        $regulations = Regulation::all();
        return view('admin.showregulation', compact('regulations'));
    }

    public function create()
    {
        return view('admin.inputregulation');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'regulation_number' => 'required',
                'regulation_title' => 'required',
            ],
            [
                'regulation_number.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'regulation_title.required' => 'Data yang dimasukkan tidak boleh kosong!',
            ]
        );

        $regulationform = new Regulation();
        $regulationform->regulation_number = $request->regulation_number;
        $regulationform->regulation_title = $request->regulation_title;
        $regulationform->save();

        return redirect()
            ->route('inputregulation.index')
            ->with('success', 'Regulasi Berhasil di Simpan');
    }

    public function getData()
    {
        $title = 'Regulations Page';
        $regulations = Regulation::all();
        return view('regulations', compact('regulations', 'title'));
    }
}
