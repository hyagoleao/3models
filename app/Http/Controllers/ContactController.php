<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();

        return view('contact.contact', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts = $contacts->create($request->all());
        return redirect('/contact');
    }

    public function edit($id)
    {
        $contacts = Contact::findOrFail($id);
        return redirect('contact.contact', ['contacts' => $contacts]);
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->update($request->all());
        return redirect('/contacts');
    }

    public function destroy($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect('/contact.contact');
    }
}
