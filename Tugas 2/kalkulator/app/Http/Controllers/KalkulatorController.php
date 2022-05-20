<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function hitung(Request $request){
        $operasi = $request->input('operasi');
        $first = $request->input('first');
        $second = $request->input('second');
        $hasil = 0;

        if($operasi=="tambah"){
            $hasil = $first + $second;
        }elseif($operasi=="kurang"){
            $hasil = $first - $second;
        }elseif($operasi=="kali"){
            $hasil = $first * $second;
        }elseif($operasi=="bagi"){
            $hasil = $first / $second;
        }else{
            $hasil = 0;
        }

        return redirect('/')->with('info', 'Hasil : '.$hasil);
    }
}
