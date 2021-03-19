<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function index($vaisius, $id) // <--- gates metodas
    {
        $id = 5 * $id;
        return view('garden.gates',['pirmas' => $vaisius, 'id' => $id]); 
        // return view('garden.gates',compact('vaisius','id')); arba taip

    }
}
