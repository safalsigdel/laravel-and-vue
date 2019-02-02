<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Seat;

class DatabaseRelationController extends Controller
{
    public function hasManyInsert()
    {
    	$car = Car::create(['name'=>'Lamborghini']);
    	$car->seats()->create(['seats'=>25]);
    	return 'inserted';
    }
    public function hasManyUpdate()
    {
    	$car = Car::where('name','Lamborghini')->first();
    	$car->seats()->create(['seats'=>30]);
    	return 'updated';
    }
    public function hasManyDelete()
    {
    	$car = Car::where('name','Lamborghini')->first();
    	$car->seats()->delete();
    	return 'deleted';
    }
    public function hasManySelect()
    {
    	$cars = Car::where('name','Lamborghini')->with('seats')->first();

    	foreach ($cars->seats as $car) {
    		echo $car->seats;
    		echo "<br>";

    	}

    }

}
