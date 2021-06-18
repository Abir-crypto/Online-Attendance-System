<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function register(Request $request){
        if($request->group == 0){
            $faculty = Faculty::create($request->all(), ['password'=> Hash::make(1234)]);
            $faculty->password = Hash::make(1234);
            $faculty->save();
        }
        else if($request->group == 1){

            Student::create($request->all(), ['password' => Hash::make(1234)]);
        }

        return redirect()->route('login.page');
    }

    public function changePass(Request $request){
        if($request->password != $request->confirm){
            return redirect()->back()->with('msg','Password did not match');
        }
        if(session()->has('student_id')){
            $user = Student::where('id', session()->get('student_id'))->first();

            $user->password = Hash::make($request->password);
            $user->changedPassword = true;
            $user->save();
            return redirect()->route('home');
        }
        else if(session()->has('faculty_id')){
            $user = Faculty::where('id', session()->get('faculty_id'))->first();
            $user->password = Hash::make($request->password);
            $user->changedPassword = true;
            $user->save();
            return redirect()->route('home');
        }
        return redirect()->back();
    }

    public function gotoChangePass(){
        return view('changePass');
    }
}
