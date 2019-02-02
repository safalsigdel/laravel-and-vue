<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class EditAndUpdateController extends Controller
{
    public function show()
    {
    	$person = Person::all();

    	return view('vieweditandupdate',compact('person'));
    }
    public function all()
    {
    	$person = Person::all();
    	return $person->toJson();
    }
    public function update(Request $request)
    {
        $id = trim($request->id);
        $data=trim($request->data);
        $column = trim($request->column);
        $trimColumn =substr($column, 11);
       // print_r($trimColumn);die;

        if ($trimColumn===' name') {
            Person::where('id',$id)->update(['name'=>$data]);
            
        }elseif ($trimColumn==' email') {
            Person::where('id',$id)->update(['email'=>$data]);
            
        }elseif ($trimColumn==' address') {
            Person::where('id',$id)->update(['address'=>$data]);
            
        }elseif ($trimColumn==' city') {
            Person::where('id',$id)->update(['city'=>$data]);
            
        }elseif($trimColumn==' country'){
            Person::where('id',$id)->update(['country'=>$data]);

        }
        
    }
}
