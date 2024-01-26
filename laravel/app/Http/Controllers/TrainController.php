<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TrainController extends Controller
{
    public function index(){
        
        $dati = config("data");
        return view('trains' , $dati);
    
    }
}
