<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
      
        return view('homepage.index',['data'=>Doctor::all()]);
    }
    public function apply(){
        return view('homepage.drapply');
    }

  
    public function applyStore(Request $request){
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
        return redirect()->back(); 
    }
}
