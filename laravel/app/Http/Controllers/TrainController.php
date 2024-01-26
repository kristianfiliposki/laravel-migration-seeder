<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;


class TrainController extends Controller
{
    public function index(){
        
        $trains=Train::all();
        $dati = config("data");
        return view('trains' , $dati, compact("trains"));
    
    }
}
