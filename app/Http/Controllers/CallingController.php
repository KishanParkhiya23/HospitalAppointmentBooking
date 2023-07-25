<?php

namespace App\Http\Controllers;

use App\Models\AcceptAp;
use App\Models\AdminTable;
use App\Models\Appointment;
use App\Models\RejectAp;
use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallingController extends Controller
{
    public function Home()
    {
        $doctor['doctor'] = DB::table('admin_tables')->limit(3)->get();
        return view('welcome',$doctor);
    }
    public function AboutUs()
    {
        return view('AboutUs');
    }
    public function Contact()
    {
        return view('Contact');
    }
    public function Doctor()
    {
        $doctor['doctor'] = AdminTable::all();
        return view('Doctor',$doctor);
    }
    public function Appointment()
    {
        return view('Appointment');
    }
    public function SignUp()
    {
        return view('SignUp');
    }
    public function Profile()
    {
        $id = session()->get('LogInId');
        $data = SignUp::where('id', '=', $id)->get()->first();

        $Ap['ap'] = Appointment::where('Email', '=', $data->Email)->paginate(2);
        $Ap['ac'] = AcceptAp::where('Email', '=', $data->Email)->paginate(2);
        $Ap['re'] = RejectAp::where('Email', '=', $data->Email)->paginate(2);
        return view('Profile', compact('data', 'Ap'));
    }
    public function LogIn()
    {
        return view('LogIn');
    }
}
