<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    //Sign Up Data Pass Function
    public function SignUpSave(Request $req)

    {
        $req->validate([
            'SFName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'SLName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'SGender' => 'required',
            'SCity' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'SContact' => 'required|regex:/[0-9]{9}/',
            'SDOB' => 'required',
            'SEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:sign_ups,email',
            'SPass' => 'required',
            'SCPass' => 'required'
        ]);
        if (!($req->SPass ==  $req->SCPass)) {
            return back()->with('NotMatched', 'Password and Confirm Password is not matched.');
        } else {
            $data = new SignUp();
            $data->Fname = $req->SFName;
            $data->Lname = $req->SLName;
            $data->Gender = $req->SGender;
            $data->City = $req->SCity;
            $data->Contact = $req->SContact;
            $data->DOB = $req->SDOB;
            $data->Email = $req->SEmail;
            $data->Pswd = hash::make($req->SPass);
            $data->save();

            if(session()->has('LogInId')){
                session()->pull('LogInId');
                $req->session()->put('LogInId', $data->id);
            }
            else{
                $req->session()->put('LogInId', $data->id);
            }
            return redirect('/');
        }
    }
}
