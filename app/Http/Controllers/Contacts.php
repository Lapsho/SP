<?php

namespace shellphone\Http\Controllers;

use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function index ()
    {
        return view('pages.contacts');
    }
}
