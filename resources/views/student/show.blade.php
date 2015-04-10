@extends('layouts.admin')

@section('nav')
    @parent
    <nav><a href="{{url('student')}}">retour crud student</a></nav>
@stop

@section('content')

    @if(isset($student))

        {{$student->firstname}}
        {{$student->name}}
    @endif

@stop

