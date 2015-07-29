<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include ('partials.nav')
    @include('partials.header')
    <div class="container">
        @include ('flash::message')
        @yield('content')
    </div>
    @yield('users')
    @yield('faq')
    @include('partials.footer')
    @include('partials.foot')
</body>

</html>




        





               