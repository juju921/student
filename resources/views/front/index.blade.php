    @extends('layouts.master')

    @section('sidebar')
      @parent

    @stop


    @section('content')
    @foreach($posts as $post)
    @if(!empty($post->tags))
    <nav>mot clef


    </nav>




    @endif

    <h2><a href="{{url('single/'.$post ->id)}}">{{$post ->title}}</a></h2>
    <p>{{$post ->created_at->format('d-m-Y')}}</p>

    <p>{{($post->category)? $post->category->title: ''}}</p>
       <p>{!! $post -> content !!}</p>



    @endforeach

    @stop