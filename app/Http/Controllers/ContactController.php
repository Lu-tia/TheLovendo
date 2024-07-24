<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationMail;
use App\Mail\ContactSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function workWithUs()
    {
        return view('WorkWithUs');
    }

    public function sendApplication(Request $request)
    {
        $request->validate([
            'eta' => 'required|integer|min:18|max:100',
            'curriculum' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB massimo
        ]);

        // Carica il file curriculum
        $curriculumPath = $request->file('curriculum')->store('public/curricula');

        $details = [
            'nome' => auth()->user()->firstName,
            'cognome' => auth()->user()->lastName,
            'email' => auth()->user()->email,
            'eta' => $request->eta,
            'curriculum' => $curriculumPath,
        ];

        Mail::to('application@thelovendo.com')->send(new ApplicationMail($details));

    session()->flash('success', 'Candidatura inviata con successo!');
    return redirect()->route('workWithUs');
    }

    public function contactSeller(Request $request,$article)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $details = [
            'message' => $request->message,
            'firstName' => auth()->user()->firstName,
            'lastName' => auth()->user()->lastName,
            'email' => auth()->user()->email,
            'article' => $article
        ];

        Mail::to('application@thelovendo.com')->send(new ContactSeller($details));

    session()->flash('success', 'Mesaggio inviato con successo!');
    return redirect()->back();
    }
}
