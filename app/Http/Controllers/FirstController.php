<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function view()
    {
    	return view('vuesample');
    }
    // this show method is called by axios 
    public function show()
    {
    	return 'I am show method content loaded by axios';

    }
    public function vueMagic()
    {
    	return view('vuemagic');
    }
    public function bind()
    {
    	return view('bind');
    }
}
