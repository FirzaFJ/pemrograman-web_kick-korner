<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function view()
    {
        return view('admin.conatctus.index');
    }
}
