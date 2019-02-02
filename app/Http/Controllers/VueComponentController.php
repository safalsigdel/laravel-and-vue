<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueComponentController extends Controller
{
    public function show()
    {
    	return view('vuecomponent');
    }
    public function showComponentDetailView()
    {
    	return view('vuecomponentdetail');
    }
    public function componentRevised()
    {
    	return view('componentrevised');
    }
}
