<?php

namespace App\Http\Controllers;

use App\Jobs\DemoJob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DemoJobController extends Controller
{
    public function demo()
    {
    	$insert = (new DemoJob())->delay(Carbon::now()->addSeconds(10));
    	dispatch($insert);
    	return 'inserted successfullly';
    }
}
