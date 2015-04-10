@extends('layouts.admin')

@section('nav')
    @parent
    <nav><a href="{{url('student/create')}}">Ajouter un étudiant</a></nav>
@stop

@section('content')
    <div class="pagination">
        {!!$students->render()!!}
    </div>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>Status</th>
            <th>Voir</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>bio</th>
            <th>publish at</th>
            <th>date</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <!--Faites un foreach ici des students-->
        <tr>
       @foreach($students as $student)
             <tr class="{{($student->status=='publish')? 'success' : 'info'}}">
                 <td>{{$student->status}}</td>
                 <td><a href="{{url('student/'.$student->id)}}"><span
                                 class="glyphicon glyphicon-eye-open"></span></a></td>
                 <td><span class="glyphicon glyphicon-edit"></span> <a
                             href="{{url('student/'.$student->id.'/edit')}}">{{$student->firstname}}</a></td>
                 <td>{{$student->name}}</td>
                 <td>{{$student->bio}}</td>
                 <td>{{$student->publish_at}}</td>
                 <td>{{$student->created_at->format('d/m/Y h:i:s')}} </td>
                 <td>
                    {!! Form::open(['url'=>'student/'.$student->id, 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                         {!! Form::submit('Delete') !!}
                     {!! Form::close() !!}
     </td>

             </tr>
         @endforeach

        </tbody>
    </table>
    <div class="pagination">
        {!!$students->render()!!}
    </div>
@stop

@section('script')
<script>

$('.form-delete').submit(function(){
    return confirm('confirm to delete post');
});

</script>

@stop

