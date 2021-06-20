<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('faculty');
    }

    public function index(){
        return view('addCourse');
    }
    public function addCourse(Request $request){
        $faculty = Faculty::find(session()->get('faculty_id'));
        $dowMap = array('Sun'=>0, 'Mon'=>1, 'Tue'=>2, 'Wed'=>3, 'Thu'=>4, 'Fri'=>5, 'Sat'=>6);
        $start = Carbon::now();
        $start->hour = $request->startHour;
        $start->minute = $request->startMin;

        $end = Carbon::now();
        $end->hour = $request->endHour;
        $end->minute = $request->endMin;

        $faculty->courses()->create([
            'title'=>$request->title,
            'code'=>$request->code,
            'section'=>$request->section,
            'startDate'=>$request->date,
            'day1'=>$dowMap[$request->day1],
            'day2'=>$dowMap[$request->day2],
            'start'=>$start,
            'end'=>$end
        ]);

        return redirect()->back()->with('msg', 'Course Added to your profile');
    }

    public function showCourseStudent(Course $course){
        $students = $course->students()->get();
//        dd($students);
//        $startDate = $course->StartDate;
//        $today = Carbon::today();
//        $days = $today->diff($startDate, true)->days;
//        $totalClass = 0;
//
//        for($i = Carbon::parse($startDate); $i <= $today; $i->modify('+1 day')){
//            if($i->dayOfWeek == $course->day1){
//                $totalClass = $totalClass+1;
//            }
//            if($i->dayOfWeek == $course->day2){
//                $totalClass = $totalClass+1;
//            }
//
//        }
//        $present = $students->pivot->attendanceCount;
        return view('courseStudent',compact('students', 'course'));
    }
}
