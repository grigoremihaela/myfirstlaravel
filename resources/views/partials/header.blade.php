@section('header')

<header role="banner" class="hero" >
    <div class="container">
        <a href="#" class="branding"><img src="/img/logo.png" alt="My First Laravel"></a>
        <div id="hero-color">
            <h2>Easy way to launch your startup: <strong>Simple and powerful</strong></h2>
        </div>
        @yield('login')
        @yield('register')
<!--
        <span id="hero-color" class="scrolldown">Scroll down to explore <br><i class="fa fa-chevron-down"></i></span>
-->    
    </div>
</header> <!-- hero -->
@show