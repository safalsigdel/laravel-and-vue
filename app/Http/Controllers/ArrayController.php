<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function demo()
    {
    	$cars = array(
    		array('volvo','22','18'),
    		array('BMW','15','13'),
    		array('Lamborghini','17','18')
    	);
    	for ($i=0; $i<3 ; $i++) { 
    		for ($j=0; $j <3 ; $j++) { 
    			echo $cars[$i][$j];
    			echo "<br>";
    		}
    	}
    	
    }
}
