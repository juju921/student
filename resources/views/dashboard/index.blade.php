@extends('layouts.admin')

@section('content')
   <ul>
       <li><a href="{{url('student')}}">CRUD student</a></li>
       <li><a href="{{url('posts')}}">CRUD post</a></li>
   </ul>


@stop
