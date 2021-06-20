@extends('main')
@section('content')

    <div class="container white-text">
        <div class="">
            <p class="flow-text">Welcome <b style="color: red">{{$user->name}}</b></p>
        </div>
    </div>

    <div class="container row">
        @if(session()->has('faculty_id'))
            <div class="col s6">
                <ul class="collection with-header">
                    <li class="collection-header indigo lighten-4"><h4>My Courses</h4></li>
                    @foreach($courses as $course)
                        <li class="collection-item ">{{$course->title}} --Section: {{$course->section}}<a href="{{route('course.student',$course->id)}}" class="secondary-content"><i class="material-icons">send</i></a></li>
                    @endforeach
                </ul>
                <a href="{{route('course.page')}}" class="btn waves-effect waves-light amber darken-2 hoverable">Add Courses</a>
            </div>
        @endif
        @if(session()->has('student_id'))
            <div class="col s6">
                <ul class="collection with-header">
                    <li class="collection-header"><h4>My Courses</h4></li>
                    @foreach($courses as $course)
                        <li class="collection-item">{{$course->title}} --Section: {{$course->section}}<a href="{{route('attendance.page',$course->id)}}" class="secondary-content"><i class="material-icons">send</i></a></li>
                    @endforeach
                </ul>
{{--                <a href="{{route('course.page')}}" class="btn waves-effect waves-light amber darken-2">Add Courses</a>--}}
            </div>
        @endif
    </div>
    <div style="width: 30%;margin: auto">
        <x-alert/>
    </div>

@endsection
