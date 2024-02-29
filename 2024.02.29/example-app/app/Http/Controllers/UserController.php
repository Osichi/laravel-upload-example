<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function veiw(){
        return view('upload');
    }

    public function valami(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password= Hash::make($request->password);
        $upload = DB::table('users')
        ->insert([
            'name' => $name,
            'email' => $email,
            'password'=> $password,
        ]);
        if ($upload) {
            return redirect('/')->with('success', 'Sikeres feltöltés.');
        } else {
            return redirect('/')->with('error', 'Hiba történt a feltöltés közben.');
        }
    }
}
