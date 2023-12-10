<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header_Model;

class Header_Controller extends Controller
{
    public function Country_Flags(){
        
        
        $data = Header_Model::all()->toArray();
        return view('includes/header',['country_with_flags' => $data]);
    
    }
}
