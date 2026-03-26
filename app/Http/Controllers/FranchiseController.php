<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function index()
    {
        $franchises = Franchise::latest()->get();
        return view('franchises.index', compact('franchises'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|regex:/^[0-9]{10}$/',
            'area' => 'required|string|max:255',
            'address' => 'required|string',
            'message' => 'nullable|string',
            'model_type' => 'required|in:Take Away,Dining'
        ], [
            'number.regex' => 'Please enter exactly 10 digits for the contact number.'
        ]);

        Franchise::create($request->all());

        return redirect()->back()->with('success_franchise', 'Your franchise inquiry has been successfully submitted! Our team will contact you soon.')->withFragment('franchise');
    }

    public function destroy(Franchise $franchise)
    {
        $franchise->delete();
        return redirect()->back()->with('success', 'Franchise inquiry deleted successfully.');
    }
}
