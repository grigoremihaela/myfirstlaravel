@extends('app')

@section('content')
    
    <div style="float:right";>
    <a href="{{ url('/posts/create') }}">Create a new post here.</a>
    </div>
    <h1>All Posts</h1>
    <a href="{{ url('/posts') }}">Your posts here.</a>
    <hr/>

    @foreach ($posts as $post)
        <h3>
           <a href="{{ url('/posts', $post->id) }}">
           {{ $post->title }} 
           (created by {{ $post->user->name }})
           </a>
        </h3>
        <div class="container">{!! $post->summary !!}</div>
        <hr/>
    @endforeach

@stop