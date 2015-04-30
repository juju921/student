@extends('layouts.admin')

@section('content')

    {!! Form::open(['route'=>'student.store', 'files'=>true]) !!}

    <div class="form-group {{$errors->has('firstname')? 'has-error' : '' }}">
        {!! Form::label('firstname', 'Firstname:', ['for'=> 'Firstname'] ) !!}<br>
        {!! Form::text('firstname',old('firstname'), ['class'=>'form-control', 'id' => 'Firstname', 'required']) !!}
        {!! $errors->first('firstname', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{$errors->has('name')? 'has-error' : '' }}">
        {!! Form::label('name', 'Name:', ['for'=> 'Name'] ) !!}<br>
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'id' => 'Name']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>

            <div class="form-group {{$errors->has('date')? 'has-error' : '' }}">
                  {!! Form::label('date', ':', ['for'=> 'date'] ) !!}<br>
                  {!! Form::date('published_at', old('published_at'), ['class'=>'form-control', 'id' => 'date']) !!}
                  {!! $errors->first('date', '<span class="help-block">:message</span>') !!}
              </div>


      <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
        {!! Form::label('status', 'Status:' ) !!}<br>
        {!! Form::select('status',['publish' =>'publié', 'unpublish'=>'dépublié'], old('status')) !!}
        {{ $errors->first('status', '<span class="help-block">:message</span>') }}
    </div>

       <div class="form-group {{$errors->has('avatar')? 'has-error' : '' }}">
            {!! Form::label('avatar', 'avatar:' ) !!}<br>
            {!! Form::file('avatar',[ 'id' => 'avatar'], old('avatar')) !!}
            {{ $errors->first('avatar', '<span class="help-block">:message</span>') }}
        </div>



  <div class="form-group {{$errors->has('bio')? 'has-error' : '' }}">
        {!! Form::label('bio', 'bio:', ['for'=> 'bio'] ) !!}<br>
        {!! Form::textarea('bio', old('bio'), ['class'=>'form-control', 'id' => 'editor']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Click Me!', ['class'=>'btn']) !!}
    </div>

    {!! Form::close() !!}

@stop

@section('script')

<script src="{{url('assets/js/ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace('editor');
CKEDITOR.config.removePlugins='about';

</script>

@stop