<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Doctor;

class PatientController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    
    public function profileP(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }
        $data['patients']=Patient::where('user_id',Auth::id())->firstOrFail();
        return view('patient.profile',$data);
    }
    public function applyPatient(){
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }

        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
        return view('patient.apply');
    }
    public function applyInsert(Request $request){
        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
        $request->validate([
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'address'=>'required',
            'age'=>'required',
            'disease'=>'required',

        ]);
        Patient::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'age'=>$request->age,
            'disease'=>$request->disease,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('Patientprofile');

    }
}
