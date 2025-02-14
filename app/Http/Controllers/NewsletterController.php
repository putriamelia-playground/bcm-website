<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $title = '';

        return view('landingnewsletter', compact('title'));
    }

    public function store(Request $request)
    {
        $newsletterEmail = new Newsletter();
        $newsletterEmail->newsletter_email = $request->newsletter_email;
        $newsletterEmail->active = $request->active;
        $newsletterEmail->save();

        return redirect()
            ->route('inputemailnewsletter.index');
    }
}
