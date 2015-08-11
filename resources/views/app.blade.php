<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    @include ('partials.nav')
    
    <div class="container">
        @yield('login')
        @yield('register')
        @include ('flash::message')
        @yield('github')
        @yield('content')
        @yield('users')
        @yield('faq')
      
    </div>
    @include('partials.footer')
    @include('partials.foot')
</body>

</html>




        





               