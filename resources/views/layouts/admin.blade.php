    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF8">
        <title>{{ $title or "Blog-Laravel" }}</title>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
    <div class="container header">
        <div class="row header">
            <div class="col-lg-12">

            <nav class="navbar navbar-default" role="navigation">
     <a class="navbar-brand" href="{{url('/')}}">Blog-Laravel</a>
                @section('nav')
                 <ul class="nav navbar-nav">
                    <li><a href="">bonjour {{ Auth::user()->name }}</a></li>
                      <li> <a href="{{url('auth/logout')}}">logout</a></li>
                         @if(!Auth::guest())
                                           <li>     <a href="{{url('dashboard/index')}}">dashboard</a></li>

                   <li> <a href="{{url('posts/create')}}">Ajouter un post</a></li>
     <li><a href="{{url('student')}}">CRUD student</a></li>
           <li><a href="{{url('posts')}}">CRUD post</a></li>
                                                @endif
                    </nav>
                @show
            </div>
            <div class="col-lg-4 col-xs-offset-4">
                <blockquote>
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                </blockquote>
            </div>
        </div>
    </div>
    <!-- header-->
    <div class="container content">
        <div class="row content">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="container footer text-right">
        <div class="row footer">
            @section('footer')
            @show
        </div>
    </div>
    @yield('script')
    <!-- content -->
    </body>
    </html>
