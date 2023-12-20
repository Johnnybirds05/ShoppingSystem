<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('home.login');
    }

    public function login(Request $request){

        $credentials = $request->validate(
            [
                'email'=>['required'],
                'password'=>['required'],
            ]
            );
            
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return Auth::user();
            }
            return response()->json([
                'errors' => [
                    'username' =>['Invalid Credentials']
                ]
                ], 422);
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
