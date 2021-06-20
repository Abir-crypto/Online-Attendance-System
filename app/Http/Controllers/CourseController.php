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
        $dowMap = array('Sun'=>1, 'Mon'=>2, 'Tue'=>3, 'Wed'=>4, 'Thu'=>5, 'Fri'=>6, 'Sat'=>7);
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
        return view('courseStudent',compact('students'));
    }
}
