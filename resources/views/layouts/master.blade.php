
<html>
    <head>
        <title>Student</title>
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>
 
        <div class="container navigation">
            <div class="row navigation">
        @include('partials.nav')

            </div>
        </div><!-- navigation -->
        <div class="container header">
            <div class="row header">
                <div class="col-xs-4">
                    <h1><a href="#">Article</a></h1>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <blockquote>

                    </blockquote>
                </div>
            </div>
        </div><!-- header-->
        <div class="container content">
            <div class="row content">
                <div class="col-xs-8">
                    @yield('content')
                </div>
                <div class="col-xs-4">
                    @section('sidebar')
                    <ul>
                    @if(!empty($students))

                    @foreach($students as $student)
                    <li>nom:{{$student ->firstname}}, prénom {{$student->name}}
                    <br/>
                    formation: {{$student -> type}}
                    </li>

                    @endforeach
                    </ul>
                    @else
                    <p>désole pas d'étudiant pour l'intant dans la base</p>
                    @endif

                    @show
                </div>
            </div>
        </div>
    </body>
</html>