        @extends('layouts.admin')

        @section('content')

            {!! Form::open(['route'=>'posts.store', 'files'=>true]) !!}

            <div class="form-group {{$errors->has('title')? 'has-error' : '' }}">
                {!! Form::label('titre', 'titre:', ['for'=> 'title'] ) !!}<br>
                {!! Form::text('title',old('title'), ['class'=>'form-control', 'id' => 'title', 'required']) !!}
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>

            <div class="form-group {{$errors->has('content')? 'has-error' : '' }}">
                {!! Form::label('content', 'contenu:', ['for'=> 'content'] ) !!}<br>
                {!! Form::textarea('content', old('content'), ['class'=>'form-control', 'id' => 'editor']) !!}
                {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
            </div>

               <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
                    {!! Form::label('status', 'Status:' ) !!}<br>
                    {!! Form::select('status',['publish' =>'publié', 'unpublish'=>'dépublié'], old('status')) !!}
                    {{ $errors->first('status', '<span class="help-block">:message</span>') }}
                </div>

   <div class="form-group {{$errors->has('category_id')? 'has-error' : '' }}">
           {!! Form::label('category_id', 'Category:', ['for'=> 'Category'] ) !!}<br>
           {!! Form::select('category_id', $category_options, old('category_id')) !!}
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