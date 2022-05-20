<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GanjilGenapController extends Controller
{
    public function hasil(Request $request){
        $first = $request->input('first');
        $second = $request->input('second');

        return view('ganjilgenap', ['first' => $first, 'second' => $second]);
    }
}
