<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

class ForgotPassController extends Controller
{
    public  function  show(){

    }
    public function index(){
        $data=request()->validate([
            'email'=>'required'
        ]);

        $check=DB::table('users')->where('email', $data['email'])->exists();
        if(!$check){
            return back()->with('error','Email Dosent Exist');
        }
        else{
            $user=User::findByID(auth()->user()->id);
            $reminder=Reminder::exists($user) ? : Reminder::create($user);
            $this->sendEmail($user,$reminder);
            return back()->with('success','A Message has been sent to your email');
        }
    }

    public function sendEmail($user,$code){
        Mail::send(
        'email.forgot',
            ['user'=>$user,'code'=>$code],
            function ($message) use($user){
                $message->to($user->email);
                $message->subject($user->first_name);
            }
        );
    }
}
