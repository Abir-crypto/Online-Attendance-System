<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
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
        $student = $course->students()->where('student_id', session()->get('student_id'))->first();
        $lastAttend = $student->pivot->lastAttended;
//        dd($today->diffInDays($lastAttend));

        if($lastAttend==null or $today->diffInDays($lastAttend)!=0){
            $student->pivot->lastAttended = $today;
            $count = $student->pivot->attendanceCount;
            $count++;
            $student->pivot->attendanceCount = $count;
            $student->save();
            $student->pivot->save();
            return redirect()->route('home')->with('msg', 'Attendance Submitted');
        }
        else
            return redirect()->back()->with('msg', 'Attendance already submitted');
    }

    public function seeStudentReport(Student $student, Course $course){

        $startDate = $course->StartDate;
        $today = Carbon::today();
        $totalClass = 0;
        for($i = Carbon::parse($startDate); $i <= $today; $i->modify('+1 day')){
            if($i->dayOfWeek == $course->day1){
                $totalClass = $totalClass+1;
            }
            if($i->dayOfWeek == $course->day2){
                $totalClass = $totalClass+1;
            }

        }
        $stnd = $course->students()->where('student_id', $student->id)->first();
        $present = $stnd->pivot->attendanceCount;
        return view('studentReport', compact('student', 'totalClass', 'present'));
    }
}
