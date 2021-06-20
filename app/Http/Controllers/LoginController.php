<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        if($request->group == 1){
            $student = Student::where('email', $request->email)->first();
            if($student==null or !Hash::check($request->password, $student->password)){
                return redirect()->back()->with('msg', 'Information not Matched');
            }
            $request->session()->put('student_id', $student->id);
            return redirect()->route('home', compact('student'));
        }
        else if($request->group == 0){
            $student = Faculty::where('email', $request->email)->first();
            if($student==null or !Hash::check($request->password, $student->password)){
                return redirect()->back()->with('msg', 'Information not Matched');
            }
            $request->session()->put('faculty_id', $student->id);
            return redirect()->route('home', compact('student'));
        }
        return redirect()->back()->with('msg', 'Something went wrong');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.page');
    }
}
