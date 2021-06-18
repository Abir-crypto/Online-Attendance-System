<?php

namespace App\Http\Middleware;

use App\Models\Faculty;
use App\Models\Student;
use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!(session()->has('student_id') || session()->has('faculty_id'))){
            return redirect()->route('login.page');
        }
        else if(session()->has('student_id')){
            $user = Student::where('id', session()->get('student_id'))->first();
//            dd($user);
            if($user->changedPassword == false){
                return redirect()->route('change.pass.page');
            }
        }
        else if(session()->has('faculty_id')){
            $user = Faculty::where('id', session()->get('faculty_id'))->first();
            if($user->changedPassword == false){
                return redirect()->route('change.pass.page');
            }
        }
        return $next($request);
    }
}
