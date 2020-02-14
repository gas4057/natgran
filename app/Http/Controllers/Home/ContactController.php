<?php

namespace App\Http\Controllers\Home;

use App\Models\SiteContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
       $contact_info = SiteContact::all()->sortBy('phone');

        return view('home.question',compact('contact_info'));
    }
}
