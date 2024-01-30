<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:10',
            'email' => ['required','email','regex:/^.+@.+$/i'],
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Send email

        echo "Recibimos tu mensaje, te responderemos en menos de 24 horas.";
    }
}
