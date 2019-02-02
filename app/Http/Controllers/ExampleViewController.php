<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleViewController extends Controller
{
    public function loadView()
    {
        return view('example-view');
    }
}
