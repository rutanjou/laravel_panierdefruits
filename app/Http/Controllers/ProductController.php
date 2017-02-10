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
     public function getAddFruit(){
     	return view('/.addfruit');
     }
     public function postAddFruit(Request $request){
    	$newFruit= new Fruit;
    	$newFruit->name = $request->name;
    	$newFruit->prix = $request->prix;
    	$newFruit->stock = $request->stock;
    	$newFruit->description = $request->description;
    	$newFruit->origine = $request->origine;
    	$newFruit->save();
     	return redirect('/');
     }
     public function postDelete($id){
     	$delete = Fruit::find($id);
     	$delete->delete();
     	return back();
     }
     public function getEdit($id){
     		$editFruit = Fruit::find($id);
     		return view('edit',['editFruit'=>$editFruit]);
     }
     public function postEditFruit($id, Request $request){
     	$editFruit = Fruit::find($id);
     	$editFruit->name = $request->name;
     	$editFruit->prix = $request->prix;
     	$editFruit->description = $request->description;
     	$editFruit->origine = $request->origine;
     	$editFruit->stock = $request->stock;
     	$editFruit->save();
     	return redirect('/');
     }
}
