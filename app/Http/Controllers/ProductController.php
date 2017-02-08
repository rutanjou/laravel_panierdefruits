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
     	$fruit = Fruit::find($id);
     	return view('show', ['fruit'=>$fruit]);
     }
     public function getAdd($id){
     	$fruit = Fruit::find($id);
     	$fruit->stock++;
     	$fruit->save();
     	return back();
     }
     public function getDown($id){
     	$fruit = Fruit::find($id);
     	$fruit->stock--;
     	$fruit->save();
     	return back();
     }
}
