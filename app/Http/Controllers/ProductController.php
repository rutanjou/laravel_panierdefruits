<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;
class ProductController extends Controller
{
    public function getIndex(){
    	$fruits = Fruit::all();  
    	return view('fruitsView', ['fruits'=>$fruits]);
     }
     public function getShow($id){
     	$fruits = Fruit::find($id);
     	return view('fruitsView', ['fruits'=>$fruits]);
     }
}
