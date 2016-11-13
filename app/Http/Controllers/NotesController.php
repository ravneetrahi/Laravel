<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
class NotesController extends Controller
{
	

	public function store(Request $request ,Card $card)
    {
    	 $this->validate($request, [
        	'note' => 'required|min:10',
    		]);
       
  		  	$card->notes()->create(['note'=>$request->note]);
  		  	return back();	
    }
}
