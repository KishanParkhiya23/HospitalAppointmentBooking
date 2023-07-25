<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChangePswdController extends Controller
{
    //Page Call
    public function ChangrPswdPage()
    {
        return view('ChangePswd');
    }

    // Password Change Process 
    public function ChangePswdSave(Request $req)
    {
        $id = session()->get('LogInId');
        $data=SignUp::find($id);

        if (Hash::check($req->OPswd, $data->Pswd)) {
            if ($req->NPswd == $req->RNPswd) {
                $data->Pswd = Hash::make($req->NPswd);
                $data->save();
                return redirect('Edit');
            } else {
                return back()->with('BothNotMatched','New Password and Re Enter Password Not matched.');

            }
        } else {
            return back()->with('OldNotMatch','Old Password Is not Matched.');
        }
    }
}
