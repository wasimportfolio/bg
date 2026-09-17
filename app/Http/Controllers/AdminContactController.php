<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->first();

        return view('admin.contact.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string|max:30',
            'whatsapp' => 'nullable|string|max:30',
            'gpay' => 'nullable|string|max:100',
            'facebook' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
        ]);

        $contact = Contact::latest()->first();

        if (!$contact) {
            $contact = new Contact();
        }

        $contact->phone = $request->phone;
        $contact->whatsapp = $request->whatsapp;
        $contact->gpay = $request->gpay;
        $contact->facebook = $request->facebook;
        $contact->youtube = $request->youtube;
        $contact->instagram = $request->instagram;
        $contact->status = true;

        $contact->save();

        return redirect()
            ->route('admin.contact')
            ->with('success', 'Contact details updated successfully.');
    }
}