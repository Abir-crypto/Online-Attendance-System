<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttendanceController extends Controller
{
    public function index(Course $course){
        $isClassAvailable = false;
        $today = Carbon::now();
//        dd($today->dayOfWeek);
        if($today->dayOfWeek == $course->day1 or $today->dayOfWeek == $course->day2){
            $isClassAvailable = true;
        }

        return view('submitAttendance', compact('course', 'isClassAvailable'));
    }

    public function submitAttendance(Course $course){
        $today = Carbon::today();
        dd($today->diff($course->StartDate));
    }
}
