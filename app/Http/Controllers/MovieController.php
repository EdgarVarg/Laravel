<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class MovieController extends Controller
{
     public function index()
     {
    	return 'estoy en el index';
     }
	 public function create()
	    {
	    return '<h1>olo</h1>
         <input type="text"> 
	    ';
	    echo '<h1>olo</h1>';
	    }
	  public function store()
    {
    	# code...
    }
    
     public function show($id)
    {
    	# code...
    }
     public function edit($id)
    {
    	# code...
    }
     public function update($id)
    {
    	# code...
    }
      public function destroy($id)
    {
    	# code...
    }
   
   
   
   
}
