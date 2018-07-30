<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function __contstruct()
	{
		$this->middleware('age') ->only('middlewareAgePage');
	}

    public function contactPage(){
    	return view ('pages.contact');
    }

    public function middlewareAgePage(Request $request){
    	$age = $request ->pages;

    	return view('age',array('age'=>$age));
    }

}
