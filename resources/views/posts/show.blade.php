@extends('layouts.admin')

@section('nav')
    @parent
    <nav><a href="{{url('posts')}}">retour crud posts</a></nav>
@stop

@section('content')

    @if(isset($posts))

       <h1> {{$posts->title}}</h1>
       <p class="blog-post-meta">{{$posts->created_at->format('d/m/Y ')}} <a href="#">{{ Auth::user()->name }}</a></p>
      <p> {{$posts->content}}</p>
    @endif

@stop

