<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Myfirstlaravel</title>
    <!-- Style 
    <link href="/css/app.css" rel="stylesheet">  
    -->
    {!! HTML::style('css/app.css') !!}
    <!-- Fonts 
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    -->
    {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
    <!--font-awesome
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    -->
     {!! HTML::style('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css') !!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include ('partials.nav')
    <header role="banner" class="hero" >
                <div class="container">
                    <a href="#" class="branding"><img src="/img/laravel-l-slant.png" alt="My First Laravel"></a>
                    <div id="hero-color">
                        <h2>Easy way to launch your startup: <strong>Simple and powerful</strong></h2>
                    </div>
                    @yield('login')
                    <span id="hero-color" class="scrolldown">Scroll down to explore <br><i class="fa fa-chevron-down"></i></span>
                </div>
    </header> <!-- hero -->

<div class="container">
    @include ('flash::message')
    @yield('homePage')
    @yield('allPosts')
    @yield('authPosts')       
    @yield('content')
</div>
    @yield('users')
    @yield('footer')

    <footer class="footer" role="contentinfo">
                <div class="container text-center">

                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>

                    <p class="text-center"><small>Copyright &copy; My First laravel</small></p>
                    
                </div>
    </footer>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
    //     $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    
</body>
</html>
