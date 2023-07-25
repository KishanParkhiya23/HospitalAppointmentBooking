<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SignUp;

class EditController extends Controller
{
    public function Edit()
    {
        $id = session()->get('LogInId');
        $data = DB::table('sign_ups')->where('id', '=', $id)->get()->first();
        return view('Edit', compact('data'));
    }

    public function EditSave(Request $req, $id)
    {
        $data = SignUp::find($id);
        $data->Fname = $req->EFname;
        $data->Lname = $req->ELname;
        $data->Gender = $req->EGender;
        $data->City = $req->SCity;
        $data->Contact = $req->EContact;
        $data->DOB = $req->EDOB;
        $data->save();
        return redirect('Profile');
    }
}
