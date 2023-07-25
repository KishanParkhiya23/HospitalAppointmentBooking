<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AppointmentController extends Controller
{
    // Get Appointment Form data
    public function GetAppointment(Request $req)
    {
        $req->validate([
            'ApName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'ApMobile' => 'required|regex:/[0-9]{9}/',
            'ApEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'ApDoctor' => 'required',
            'ApService' => 'required'
        ]);

        // $LogInData =  DB::table('sign_ups')->where('Email', '=', $req->ApEmail)->get()->first();
        $id = session()->get('LogInId');
        $LogInData = SignUp::find($id);

        if ($LogInData->Email == $req->ApEmail) {

            $data = new Appointment();
            $data->Name = $req->ApName;
            $data->Mobile = $req->ApMobile;
            $data->Email = $req->ApEmail;
            $data->Date = date("d-m-y");
            $data->Doctor = $req->ApDoctor;
            $data->Service = $req->ApService;
            $data->Discription = $req->ApDescription;
            $data->save();
            return redirect('Profile');
        } else {
            return back()->with('EmailNotMatched', 'You Are not Logged In with this Email Address');
        }
    }
}
