@extends('main')
@section('content')
    <div class="container" >
        <div class="container">
            <div class="container center-item" style="display: grid;place-items: center">
                <h3>Attendance Submission</h3>
                <h4>{{$course->title}}</h4>
                @if($isClassAvailable==true)
                    <a href="{{route('attendance.submit',$course->id)}}" class="btn waves-effect waves-light indigo lighten-4 hoverable black-text">Submit Today's Attendance</a>
                @else
                    <a href="" class="btn waves-effect waves-light indigo lighten-4 hoverable black-text disabled">Submit Today's Attendance</a>
                @endif

            </div>
        </div>
    </div>
@endsection
