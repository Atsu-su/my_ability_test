<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactForm $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255',
        //     'tel' => 'required',
        //     'content' => 'nullable|string',
        // ]);

        $validated = $request->all();

        return view('confirm', $validated);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required',
            'content' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('index')
                ->withErrors($validator)
                ->withInput();
        }

        Contact::create($validator->validated());

        return view('thanks');
    }
}