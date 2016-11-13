<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CardController extends Controller
{
	
    public function index(){
       $cards= \App\Card::all();	//call the all the cards using model
    	return view('cards.index',compact('cards'));
    }

    public function show(\App\Card $card){
    	$notes=$card->notes;
    	 return view('cards.show',compact('notes','card'));
    }

	public function store(Request $request ,\App\Card $card)
    {
    	 $this->validate($request, [
        	'title' => 'required',
        	'description' => 'required|min:10',
    		]);
    	
  		  	$card->create($request->all());
  		  	return back();	
    }
    
}
