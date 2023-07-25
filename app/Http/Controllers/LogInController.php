<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LogInController extends Controller
{
    //Log In  data check function

    public function LogInCheck(Request $Req)
    {
        $Req->validate(
            [
                'LogEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
                'LogPswd' => 'required|min:6|max:15'
            ]
        );

        $LogInData =  DB::table('sign_ups')->where('Email', '=', $Req->LogEmail)->get()->first();
        if ($LogInData) {
            if (hash::check($Req->LogPswd, $LogInData->Pswd)) {
                $Req->session()->put('LogInId', $LogInData->id);
                return redirect(route('Home'));
            } else {
                return back()->with('PassFail', 'Pasword is not matched...!');
            }
        } else {
            return back()->with('EmailFail', 'Email Id is not matched...!');
        }
    }



    // log Out Function

    public function LogOut()
    {
        session()->pull('LogInId');
        return redirect('LogIn');
    }
}
