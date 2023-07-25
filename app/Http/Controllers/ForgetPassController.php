<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgetPassController extends Controller
{
    //Page call
    public function ForgetPassCall()
    {
        return view('ForgetPswd');
    }

    public function ForgetPswdSave(Request $req)
    {
        // $req->validate([
        //     'FEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
        //     'FMobile' => 'required|regex:/[0-9]{9}/',
        //     'Fdate' => 'required',
        //     'FNPswd' => 'required',
        //     'FRNPswd' => 'required'
        // ]);
        if (session()->has('LogInId')) {

            $id = session()->get('LogInId');
            $data = SignUp::find($id);

            //Check Email Is correct or not
            if ($data->Email == $req->FEmail) {
                //Check Mobile number  Is correct or not
                if ($data->Contact == $req->FMobile) {
                    //Check Date Of Birth is Correct or not
                    if ($data->DOB == $req->Fdate) {
                        //Check Passwords Are same or not
                        if ($req->FNPswd == $req->FRNPswd) {
                            $data->Pswd = Hash::make($req->FNPswd);
                            $data->save();
                            return redirect('/');
                        } else {
                            return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                        }
                    } else {
                        return back()->with('DOBNotMatched', 'Date Of Birth is incorrect.');
                    }
                } else {
                    return back()->with('MobileNotMatched', 'Mobile Number is incorrect.');
                }
            } else {
                return back()->with('EmailNotMatched', 'Email id is incorrect.');
            }
        } else {
            return $data = SignUp::where('Email', '=', $req->FEmail)->get()->first();

            //Check Email is Corect or not
            if ($data) {
                //Check Mobile number  Is correct or not
                if ($data->Contact == $req->FMobile) {
                    //Check Date Of Birth is Correct or not
                    if ($data->DOB == $req->Fdate) {
                        //Check Passwords Are same or not
                        if ($req->FNPswd == $req->FRNPswd) {
                            $data->Pswd = Hash::make($req->FNPswd);
                            $data->save();
                            return redirect('LogIn');
                        } else {
                            return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                        }
                    } else {
                        return back()->with('DOBNotMatched', 'Date Of Birth is incorrect.');
                    }
                } else {
                    return back()->with('MobileNotMatched', 'Mobile Number is incorrect.');
                }
            } else {
                return back()->with('EmailNotMatched', 'Email id is incorrect.');
            }
        }
    }
}
