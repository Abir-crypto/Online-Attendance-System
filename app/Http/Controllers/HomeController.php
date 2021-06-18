<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LoginMiddleware;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }

    public function index(){
        if(session()->has('student_id')){
            $user = Student::where('id', session()->get('student_id'))->first();
            $courses = $user->courses()->get();
            return view('home', compact('user', 'courses'));
        }
        else if(session()->has('faculty_id')){
            $user = Faculty::where('id', session()->get('faculty_id'))->first();
            $courses = $user->courses()->get();

            return view('home', compact('user', 'courses'));
        }
    }
}
