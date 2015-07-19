@extends('app')

@section('content')
    <li>{{ $user->name }} </li>
    <li>{{ $user->email}} </li>
    <li>id {{ $user->id}} </li>
    <li>{{ $user->created_at}} </li>
    <li>{{ $user->updated_at}} </li>
@stop