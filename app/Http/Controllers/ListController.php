<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{ 
    //show all listing
    public function index(){
        return view('listings', [
           
            'listings' => Listing::all()
        ]);
    }
    public function show(){
        
    }
}
