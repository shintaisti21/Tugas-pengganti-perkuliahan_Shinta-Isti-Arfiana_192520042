<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function menumakanan(){
        return view('menumakanan');
    }
    public function makanan_proses(Request $request){
        //$token =$request->aeaaion()->token();
        //echo $token;

        $makanan = $request->input('mkn');
        $minuman = $request->input('mnm');

        return "Makanan : ".$makanan.", Minuman : ".$minuman;
    
}
}
