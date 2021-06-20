@extends('main')
@section('content')
    <div class="container deep-purple darken-4 hoverable" style="margin-top: 200px; padding: 100px; width: 30%; border-radius: 6%">
        <div class="center-align">
            <x-alert/>
            <ul class="collection with-header">
                <li class="collection-header"><h4>{{$student->name}}</h4></li>
                <li class="collection-item">Total Class: {{$totalClass}}</li>
                <li class="collection-item">Present in Class: {{$present}}</li>

            </ul>
            <a href="#" class="btn waves-effect waves-light blue">Download Report</a>
        </div>
    </div>
@endsection
