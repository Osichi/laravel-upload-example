<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function AddView(){
        return view('add');
    }
    public function AddProduct(Request $request){
        $nev = $request-> nev;
        $kep = $request->kep;
        $leiras = $request->leiras;
        $ar = $request->ar;
        $upload = DB::table('users')
            ->insert([
                'name' => $nev,
                'kep' => $kep,
                'leiras'=> $leiras,
                'ar'=>$ar,
            ]);

            if ($upload) {
                return redirect('/')->with('success', 'Sikeres feltöltés.');
            } else {
                return redirect('/')->with('error', 'Hiba történt a feltöltés közben.');
            }
    }
    
}
