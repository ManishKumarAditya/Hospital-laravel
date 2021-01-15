<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Patient;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
  
    public function profile(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }

        //check if data about doctor not exists     
        
        $data['doctors']=Doctor::where('user_id',Auth::id())->firstOrFail();
        return view('homepage.profile',$data);

    }
    public function apply(){
        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
     
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }
        return view('homepage.drapply');
    }
    public function applyStore(Request $request){

        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }
        $request->validate([

            'name'=>'required',
            'contact'=>'required',
            'email'=>'required|email',
            'experience'=>'required',
            'state'=>'required',
            'country'=>'required',
            'address'=>'required',
            'dp'=>'required|mimes:jpg,png',
            'specialist'=>'required',
            'treatment'=>'required',
        ]);
        $filename=time() . "." .$request->dp->extension();
        $request->dp->move(public_path('images'),$filename);
        Doctor::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'experience'=>$request->experience,
            'state'=>$request->state,
            'country'=>$request->country,
            'address'=>$request->address,
            'dp'=>$filename,
            'specialist'=>$request->specialist,
            'treatment'=>$request->treatment,
            'user_id'=>Auth::id()

        ]);
        return redirect()->route('profile'); 
    }
}
