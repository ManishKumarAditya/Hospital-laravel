<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function applyPatient(){
        return view('patient.apply');
    }
    public function applyInsert(Request $request){
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
        return redirect()->back();

    }
}
