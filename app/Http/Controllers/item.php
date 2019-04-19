</<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\items;
Class item extends Controller
{
	public function data()
	{
		$proje=items::all();
		// return $project;
		return view('result',compact('proje'));

	}
public function form()
{
	return view('contact');
}	
public function formdata()
{
	$p=new items();
	$p->id=request('id');
	$p->name=request('name');
	$p->price=request('price');
	$p->description=request('description');
	$p->save();
	return redirect('f');
	//return request()->all();
}

} 
 ?>