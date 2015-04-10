@extends('layouts.master')

@section('sidebar')
  @parent

@stop


@section('content')
@foreach($categories as $categorie)
<p>{{$categorie -> content}}</p>
   <p>{{$categorie -> content}}</p>
@endforeach
@stop