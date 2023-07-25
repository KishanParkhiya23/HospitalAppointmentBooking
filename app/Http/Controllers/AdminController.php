<?php

namespace App\Http\Controllers;

use App\Models\AcceptAp;
use App\Models\AdminTable;
use App\Models\Appointment;
use App\Models\RejectAp;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Page Call 
    public function AdHomeCall()
    {
        return view('Admin.AdHome');
    }
    public function AdAppointmentCall()
    {
        $id = session()->get('AdLoggedIn');
        $data = AdminTable::find($id);
        // $Ap = DB::table('appointments')->where('Doctor', '=', $data->Name)->get();
        $Ap = Appointment::where('Doctor', '=', $data->Name)->paginate(5);
        return view('Admin.AdAppointment', compact('Ap'));
    }
    public function AdLogInCall()
    {
        return view('Admin.AdLogIn');
    }
    public function AdLogInCheck(Request $Req)
    {
        $LogInData =  DB::table('admin_tables')->where('Email', '=', $Req->LogEmail)->get()->first();
        if ($LogInData) {
            if (hash::check($Req->LogPswd, $LogInData->Password)) {
                $Req->session()->put('AdLoggedIn', $LogInData->id);
                return redirect(route('AdHome'));
            } else {
                return back()->with('PassFail', 'Pasword is not matched...!');
            }
        } else {
            return back()->with('EmailFail', 'Email Id is not matched...!');
        }
    }

    public function AdForgetPswdCall()
    {
        return view('Admin.AdForget');
    }

    public function AdForgetPswdSave(Request $req)
    {
        $req->validate([
            'FEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'FMobile' => 'required|regex:/[0-9]{9}/',
            'FNPswd' => 'required',
            'FRNPswd' => 'required'
        ]);
        if (session()->has('AdLoggedIn')) {
            $id = session()->get('AdLoggedIn');
            $data = AdminTable::find($id);
            //Check Email Is correct or not
            if ($data->Email == $req->FEmail) {
                //Check Mobile number  Is correct or not
                if ($data->Mobile == $req->FMobile) {
                    //Check Passwords Are same or not
                    if ($req->FNPswd == $req->FRNPswd) {
                        $data->Password = Hash::make($req->FNPswd);
                        $data->save();
                        return redirect('AdHome');
                    } else {
                        return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                    }
                } else {
                    return back()->with('MobileNotMatched', 'Mobile Number is incorrect.');
                }
            } else {
                return back()->with('EmailNotMatched', 'Email id is incorrect.');
            }
        } else {
            $data = AdminTable::where('Email', '=', $req->FEmail)->get()->first();

            //Check Email is Corect or not
            if ($data) {
                //Check Mobile number  Is correct or not
                if ($data->Mobile == $req->FMobile) {
                    //Check Passwords Are same or not
                    if ($req->FNPswd == $req->FRNPswd) {
                        $data->Password = Hash::make($req->FNPswd);
                        $data->save();
                        return redirect('AdLogIn');
                    } else {
                        return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                    }
                } else {
                    return back()->with('MobileNotMatched', 'Mobile Number is incorrect.');
                }
            } else {
                return back()->with('EmailNotMatched', 'Email id is incorrect.');
            }
        }
    }


    public function AdLogOut()
    {
        session()->pull('AdLoggedIn');
        return redirect('AdLogIn');
    }
    public function AdProfileCall()
    {
        $id = session()->get('AdLoggedIn');
        $data = DB::table('admin_tables')->where('id', '=', $id)->get()->first();
        return view('Admin.AdProfile', compact('data'));
    }

    public function AdEditCall()
    {
        $id = session()->get('AdLoggedIn');
        $data = DB::table('admin_tables')->where('id', '=', $id)->get()->first();
        return view('Admin.AdEdit', compact('data'));
    }

    public function AdEditSave(Request $req, $id)
    {
        $req->validate([
            'Name' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'Mobile' => 'required|regex:/[0-9]{9}/'
        ]);
        $data = AdminTable::find($id);
        $data->Name = $req->Name;
        $data->Mobile = $req->Mobile;
        $data->Gender = $req->Gender;
        $data->Details = $req->DocDetail;
        if ($req->file('EProfile') == '') {
            $data->save();
            return redirect('AdProfile');
        } else {
            // insert Image
            $file = $req->file('EProfile');
            unlink('img/' . $data->img);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $data->img = $filename;
            $data->save();
            return redirect('AdProfile');
        }
    }

    public function AdChangePswdCall()
    {
        $id = session()->get('AdLoggedIn');
        $data = DB::table('admin_tables')->where('id', '=', $id)->get()->first();

        return view('Admin.AdChangePswd', compact('data'));
    }

    // Password Change Process 
    public function ADChangePswdSave(Request $req)
    {
        $id = session()->get('LogInId');
        $data = AdminTable::find($id);

        if (Hash::check($req->OPswd, $data->Password)) {
            if ($req->NPswd == $req->RNPswd) {
                $data->Password = Hash::make($req->NPswd);
                $data->save();
                return redirect('AdEdit');
            } else {
                return back()->with('BothNotMatched', 'New Password and Re Enter Password Not matched.');
            }
        } else {
            return back()->with('OldNotMatch', 'Old Password Is not Matched.');
        }
    }


    public function AdAcceptApCall(Request $req, $id)
    {

        $data = Appointment::find($id);
        return view('Admin.AdAcceptApponitment', compact('data'));
    }
    public function AdAppointmentConfirmation(Request $req, $id)
    {
        $Ap = Appointment::find($id);
        if ($req->Confirmation == "Yes") {
            $req->validate([
                'Time' => 'required'
            ]);
            $Con = new AcceptAp();
            $Con->Name = $Ap->Name;
            $Con->Mobile = $Ap->Mobile;
            $Con->Email = $Ap->Email;
            $Con->Date = $Ap->Date;
            $Con->Service = $Ap->Service;
            $Con->Doctor = $Ap->Doctor;
            $Con->Time = $req->Time;
            $Con->Confirmation = $req->Confirmation;
            $Con->save();
        } else {
            $Con = new RejectAp();
            $Con->Name = $Ap->Name;
            $Con->Mobile = $Ap->Mobile;
            $Con->Email = $Ap->Email;
            $Con->Date = $Ap->Date;
            $Con->Service = $Ap->Service;
            $Con->Doctor = $Ap->Doctor;
            $Con->Confirmation = $req->Confirmation;
            $Con->save();
        }

        $Ap->delete();
        return redirect('AdAppointment');
    }
}
