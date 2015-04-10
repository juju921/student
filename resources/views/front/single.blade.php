@extends('layouts.master')

@section('sidebar')
  @parent

@stop


@section('content')
 <p>{{$posts -> title}}</p>
<p>{{$posts ->created_at->format('d-m-Y')}}</p>
   <p>{!! $posts -> content !!}</p>


@stop