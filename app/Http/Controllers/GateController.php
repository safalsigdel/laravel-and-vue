<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class GateController extends Controller
{
    public function showView()
    {
    	return view('gate');
    }

    public function restrictRoute()
    {
    	if (!Gate::allows('isSafal')) {
    		abort(404,'Sorry,you are not allowed to access this page');
    	}
    }
}
