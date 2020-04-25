<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class LoginController extends Controller
{
    
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            $base_url = config('api.base_url');
            
            $response = Http::post($base_url.'/login', [
                'username' => $request->username,
                'password' => $request->password,
            ]);
            
            if($response['status'] == 200){
                Session::put('token' , $response['token']);

                return redirect('dashboard');
            }else{
                return redirect('/')->with('message' , 'password atau username salah!');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return 'oks';
        }

    }

    public function reset(){
        return view('auth.reset');
    }

}
