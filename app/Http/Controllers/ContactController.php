<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        // Form data is valid, proceed to save
        $formData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Get existing form submissions from the JSON file
        $filename = 'all_form_data.json';
        $existingData = [];

        if (Storage::exists($filename)) {
            $existingData = json_decode(Storage::get($filename), true);
        }

        // Append the new form data to the existing data
        $existingData[] = $formData;

        // Save the updated data back to the JSON file
        Storage::put($filename, json_encode($existingData));

        // Redirect the user after successful form submission
        return redirect('/contact')->with('success', 'Form data saved successfully');
    }
}
