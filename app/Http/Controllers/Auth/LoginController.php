<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return \view('auth.login');
    }

    public function login(Request $request)
    {
        try {

            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);

            $user = User::where('email',$request->email)->first();
            
            if(!$user){
               return back()->withErrors([
                'email' => 'Email pengguna tidak ditemukan.',
            ]);
            }

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('home');
            }

            return back()->withErrors([
                'Password' => 'Password anda Salah, coba ulangi.',
            ]);

        } catch (\Throwable $th) {
            return response([
                "status" => 400,
                "message"=> $th->getMessage(),
            ]);
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
