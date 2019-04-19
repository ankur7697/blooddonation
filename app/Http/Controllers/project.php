<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
       public function formdata()
{
	$a=new project();
	$a->name=request('name');
	$a->email=request('email');
	$a->age=request('age');
	$a->bloodgrp=request('bloodgrp');
	$a->contact=request('contact');
	$a->save();
	return redirect('ta');
//return request()->all();
}
}
