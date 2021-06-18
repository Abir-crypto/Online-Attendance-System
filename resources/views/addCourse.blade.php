@extends('main')
@section('content')
<div class="container" style="margin-top: 100px">
    <div class="container">
        <form action="{{route('add.course')}}" method="post">
            @csrf

            <div class="container center-align">
                <div class="input-field row">
                    <input id="last_name" type="text" name="title" class="validate">
                    <label for="last_name">Course Title</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="code" class="validate">
                    <label for="last_name">Course Code</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="section" class="validate">
                    <label for="last_name">Section</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="day1" class="validate">
                    <label for="last_name">Class Day 1</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="day2" class="validate">
                    <label for="last_name">Class Day 2</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="startHour" class="validate">
                        <label for="last_name">Start Hour</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="startMin" class="validate">
                        <label for="last_name">Start Minute</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="endHour" class="validate">
                        <label for="last_name">End Hour</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="endMin" class="validate">
                        <label for="last_name">End Minute</label>
                    </div>
                </div>


                <div class="row">
                    <input type="submit" class="btn waves-effect waves-light orange" value="Add Course">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
