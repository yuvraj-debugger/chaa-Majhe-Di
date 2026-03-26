<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a new contact message.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'message' => 'required|string',
        ], [
            'number.regex' => 'The phone number must be exactly 10 digits.',
        ]);

        Contact::create($request->all());

        return redirect(url()->previous() . '#contact')->with('success', 'Message sent successfully! We will get back to you soon.');
    }

    /**
     * Display a listing of messages.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Remove the specified message.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message deleted successfully.');
    }
}
