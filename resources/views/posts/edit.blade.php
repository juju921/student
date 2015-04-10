                @extends('layouts.admin')

                @section('content')

                    {!! Form::open(['url'=>'posts/'.$post->id, 'method'=>'PUT', 'files'=>true]) !!}

                    <div class="form-group {{$errors->has('firstname')? 'has-error' : '' }}">
                        {!! Form::label('title', 'title:', ['for'=> 'Firstname'] ) !!}<br>
                        {!! Form::text('title', $post->title, ['class'=>'form-control', 'id' => 'title', 'required']) !!}
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    </div>
            
                    <div class="form-group {{$errors->has('name')? 'has-error' : '' }}">
                        {!! Form::label('content', 'content:', ['for'=> 'Name'] ) !!}<br>
                        {!! Form::textarea('content', $post->content, ['class'=>'form-control', 'id'=>'editor']) !!}
                        {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                    </div>



                      <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
                            {!! Form::label('status', 'Status:' ) !!}<br>
                            {!! Form::select('status',['publish' =>'publié', 'unpublish'=>'dépublié'], $post->status) !!}
                             {{ $errors->first('status', '<span class="help-block">:message</span>') }}
                        </div>

                <div class="form-group {{$errors->has('category_id')? 'has-error' : '' }}">
                         {!! Form::label('category_id', 'Category:', ['for'=> 'Category'] ) !!}<br>
                         {!! Form::select('category_id', $category_options, $post->category_id) !!}
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