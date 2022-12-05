<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class LoginController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login');
    }

    public function post(Request $request){

        $request->validate([
            'correo'=>'required',
            'pass'=>'required',
        ]);

        $users = Usuarios::where([
                ['email', '=', $request->correo],
                ['password', '=', md5($request->pass)],
            ])->get();

        $count = $users->count();

        if($count > 0){
            return 'Entro!';
        }else{
            return redirect('/login');
        }
    }
}
