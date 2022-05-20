<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HurufVokalController extends Controller
{
    public function hasil(Request $request){
        $name = $request->input('name');

        $arr = str_split($name);
        $vocal = ['a', 'i', 'u', 'e', 'o'];

        $found = array_intersect($vocal, $arr);
        $jumlah = count($found);

        return view('hurufvokal', ['name' => $name, 'found' => $found, 'jumlah' => $jumlah]);
    }
}
