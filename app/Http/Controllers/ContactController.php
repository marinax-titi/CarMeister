<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Input;

class ContactController extends Controller
{
    // Fetch Contact
    public function index()
    {
      return Contact::latest()->orderBy('created_at', 'desc')->get();
    }

    // Get Single Contact
    public function getContact($id)
    {
      return Contact::findOrFail($id);
    }

    // store
    public function store(Request $request)
    {
      return Contact::create($request->all());
    }

    // Update Contact
    public function update(Request $request, $id)
    {
      Contact::findOrFail($id)->update(['name' => $request->input(['name']), 'email' => $request->input(['email']), 'phone' => $request->input(['phone'])]);
    }

    // delete
    public function delete($id)
    {
      return Contact::destroy($id);
    }

}
