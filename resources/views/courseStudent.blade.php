@extends('main')
@section('content')
    <div class="container row">
        <div style="margin:auto; width: 50%">
            <ul class="collection with-header">
                <li class="collection-header"><h4>Students list</h4></li>
                @foreach($students as $student)
                    <li class="collection-item">{{$student->name}} <a href="{{route('student.report',[$student->id, $course->id])}}" class="secondary-content"><i class="material-icons">send</i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
