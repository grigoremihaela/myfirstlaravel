@extends('app')

@section('content')
        <h1> {{ $name }} </h1>
        @foreach ($users as $user)
            @if (Auth::user()->id == $user->id)
                <li><a href="users/{{ $user->id }}"><b>{{ $user->name }}: {{ $user->email }}</b></a></li>
            @else
            <li><a href="users/{{ $user->id }}">{{ $user->name }}: {{ $user->email }}</a></li>
            @endif
        @endforeach
@stop

