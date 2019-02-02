<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example()
    {
    	return view('example');
    }
    public function example2()
    {
    	return view('example2');
    }
    public function localComponent()
    {
    	return view('localcomponent');
    }
    public function check(Request $request)
    {
    	$request->validate([
    		'email'=>'required',
    		'username'=>'required'

    	]);
    	return 'all ok man';
    }
    public function bulma()
    {
        return view('bulma');
    }
    public function loadModal()
    {
        return view('modal');
    }
    public function customEvent()
    {
        return view('customevent');
    }
    public function childCommunication()
    {
        return view('child-communication');
    }
    public function childCommunication2()
    {
        return view('child-communication2');
    }
    public function slot()
    {
        return view('slot');
    }
    public function inlineTemplate()
    {
        return view('inline-template');
    }
}

