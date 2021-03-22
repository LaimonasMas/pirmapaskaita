<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PostCalculatorController extends Controller
{
    public function show()
    {
        $rez = Session::get('sum', 'not found');
        Session::put('sum', null);

        return view('pc.show', ['r' => $rez]);
    }

    public function calc(Request $request)
    {
        $sum = $request->x + $request->y;
        Session::put('sum', $sum);
        
        return redirect()->back();
    }
}
