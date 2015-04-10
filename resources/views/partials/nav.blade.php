             <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                      <ul class="nav navbar-nav">
                     <li {!! Active::isHome()? 'class="active"' : '' !!} ><a href="{{url('/')}}">Home</a></li>
                           @if(count($menus)>0)
                                                 @foreach($menus as $category)
                                                     <li {!! Active::isCategory($category->id)? 'class="active"': '' !!} ><a href="{{url('category/'.$category->id)}}">{{$category->title}}</a></li>
                                                 @endforeach
                                             @endif
                                             @if(!Auth::guest())
                                          <li class="warning"><a href="{{url('dashboard/index')}}">dashboard</a></li>
                                             @endif

                            </ul>

                        </div>
                    </nav>