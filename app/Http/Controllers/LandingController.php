<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    public function index(){
        return view('landing.index');
    }

    public function faq()
    {
        return view('landing.faq'); // The view file located in resources/views/faq/index.blade.php
    }

    public function tac()
    {
        return view('landing.tac'); // The view file located in resources/views/faq/index.blade.php
    }

    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_date' => 'required|date',
            'meeting_type' => 'required|string|max:255'
        ]);
        
        $contact = Contact::create([
            'contact_name' => $validatedData['full_name'],
            'contact_email' => $validatedData['email'],
            'contact_date' => $validatedData['contact_date'],
            'contact_method' => $validatedData['meeting_type']
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Booking successful!');
    }
}
