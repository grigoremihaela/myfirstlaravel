@extends('app')

@section('content')

    <li>{{ $user->name}} </li>
    <li>{{ $user->email}} </li>
    
    @if (Auth::user()->id == $user->id)
        <li><a href="{{ $user->id }}/edit">Edit your profile</a></li>
    @endif

@stop
