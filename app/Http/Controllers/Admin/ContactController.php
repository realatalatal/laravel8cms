<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index()
  {
    $contacts = Contact::all();
    return view('cms.contact.index', compact('contacts'));
  }

  public function destroy(Contact $contact)
  {
    $contact->delete();
    return back();
  }
}
