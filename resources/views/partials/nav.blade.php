@section('nav')

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {!! link_to('/', 'Myfirstlaravel', 'class="navbar-brand"') !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>{!! link_to('/posts', 'All Posts') !!}</li>
            <li>{!! link_to('/posts/postsAuth', 'Your Posts') !!}</li>
            <li>{!! link_to('/posts/'.$latest->slug, 'Latest post:'.$latest->title) !!}</li>
            <li>{!! link_to('/users', 'Users') !!}</li>
            <li>{!! link_to('/faq', 'FAQ') !!}</li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Social Login<span class="caret"></span>
                    </a>
                    
                    <ul class="dropdown-menu" role="menu">                        
        <li><a href="/auth/facebook" class="facebook"><i class="fa fa-facebook"></i>Login Facebook</a></li>
        <li><a href="/auth/twitter" class="twitter"><i class="fa fa-twitter"></i>Login Twitter</a></li>
        <li><a href="/auth/facebook" class="google-plus"><i class="fa fa-google-plus"></i>Login Google Plus</a></li>
        <li><a href="/auth/github" class="github"><i class="fa fa-github"></i>Login Github</a></li>       
<!--        
                        <li>{!! link_to('auth/github', 'Login Github') !!}</li>
                        <li>{!! link_to('auth/facebook', 'Login Facebook') !!}</li>
                        <li>{!! link_to('auth/twitter', 'Login Twitter') !!}</li>
-->
                    </ul>
                </li>

                <li>{!! link_to('/auth/login', 'Login') !!}</li>
                <li>{!! link_to('/auth/register', 'Register') !!}</li>
            @else
                <li><a href="/users/{{ Auth::user()->id }}/edit" >Your profile</a></li>
                <li><img class="img-responsive img-left" src="/img/english-flag.png" alt=""></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
@show