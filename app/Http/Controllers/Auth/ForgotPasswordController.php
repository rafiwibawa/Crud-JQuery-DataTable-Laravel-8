<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{

    public function index(){
        return view('auth.forgot-password');
    }

    public function send_email(Request $request)
    {
        try {
            date_default_timezone_set("Asia/Jakarta");
    
            $user = \App\Models\User::where('email', $request->email)->first();

            if(!$user){
                return response([
                    "status" => 400,
                    "message"=> 'Email tidak terdaftar!',
                ], 400);
            }

            $key_password = Crypt::decryptString($user->key);

            Mail::send('mail.send-access', compact('user', 'key_password'), function($message) use($user){
                $message->to($user->email, $user->name)->subject('Pemura - Giving access to the Pemura system');
            });

            // $student->active = true;
            // $student->verified = true;
            // $student->active_voter = true;
            // $student->update();

            return response([
                "status"=> 200,
                "message"   => 'Email Terkirim'
            ], 200);
        } catch (Exception $e) {
            return response([
                "status" => 400,
                "message"=> $e->getMessage(),
            ]);
        }
    }
}
