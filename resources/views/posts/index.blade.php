        @extends('layouts.admin')

        @section('nav')
            @parent




        @stop

        @section('content')
            <div class="pagination">
                {!! $posts->render() !!}
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                <th>voir</th>
                    <th>Status</th>
                    <th>titre</th>
                    <th>Auteur</th>
                    <th>catégorie</th>
                    <th>updated_at</th>
                    <th>supprimer</th>
                    <th>auteur</th>
                    <th>tags</th>
                </tr>
                </thead>
                <tbody>
                <!--Faites un foreach ici des students-->
                <tr>
               @foreach($posts as $post)
                     <tr class="{{($post->status=='publish')? 'success' : 'info'}}">

                         <td><a href="{{url('posts/'.$post->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                         <td>{{$post->status}}</td>
                         <td><span class="glyphicon glyphicon-edit"></span> <a
                                     href="{{url('posts/'.$post->id.'/edit')}}" >{{$post->title}}</a></td>
                         <td>{!! $post->content !!}</td>

                     <td>{{($post->category)? $post->category->title: 'No category'}}</td>


                         <td>{{$post->updated_at->format('d/m/Y h:i:s')}} </td>
                         <td>
                                             {!! Form::open(['url'=>'posts/'.$post->id, 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                                  {!! Form::submit('Delete') !!}
                                              {!! Form::close() !!}
                              </td>
                              <td>{{ Auth::user()->name }}</td>
                              <td> @if(count($post->tags)>0)

                                          @foreach($post->tags as $tag)
                                              <a href="{{url('tag/'.$tag->id)}}">{{$tag->name}}
                                          @endforeach
                                          </nav>
                                      @endif
                                      </td>


                     </tr>
                 @endforeach

                </tbody>
            </table>
            <div class="pagination">
                {!!$posts->render()!!}
            </div>
        @stop

        @section('script')
        <script>

        $('.form-delete').submit(function(){
            return confirm('confirm to delete post');
        });

        </script>

        @stop

