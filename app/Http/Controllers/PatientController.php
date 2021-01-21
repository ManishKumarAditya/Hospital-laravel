<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Doctor;
class PatientController extends Controller
{
    
    
    public function profileP(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }
        $data['patients']=Patient::where('user_id',Auth::id())->firstOrFail();
        return view('patient.profile',$data);
    }
    public function applyPatient(){
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->back();
        }

        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
        return view('patient.apply');
    }
    public function applyInsert(Request $request, $id){
        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }
        $request->validate([
            'contact'=>'required',
            'address'=>'required',
            'age'=>'required',
            'disease'=>'required',
            'desc'=>'required',
            'gender'=>'required',
            'image'=>'required|mimes:jpg,png',

        ]);
        
        $filename=time() . "." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);
        Patient::create([
            
            'contact'=>$request->contact,
            'address'=>$request->address,
            'age'=>$request->age,
            'disease'=>$request->disease,
            'desc'=>$request->desc,
            'gender'=>$request->gender,
            'image'=>$filename,
            'user_id'=>Auth::id(),
            'doctor_id'=>$id
        ]);
        return redirect()->route('Patientprofile');

    }
}
