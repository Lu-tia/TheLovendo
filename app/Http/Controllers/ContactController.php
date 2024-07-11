<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationMail;
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
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'eta' => 'required|integer|min:18|max:100',
            'citta' => 'required|string|max:255',
            'curriculum' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB massimo
        ]);

        // Carica il file curriculum
        $curriculumPath = $request->file('curriculum')->store('public/curricula');

        $details = [
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'email' => $request->email,
            'eta' => $request->eta,
            'citta' => $request->citta,
            'curriculum' => $curriculumPath,
        ];

        Mail::to('application@thelovendo.com')->send(new ApplicationMail($details));

    session()->flash('success', 'Candidatura inviata con successo!');
    return redirect()->route('workWithUs');
    }
}
