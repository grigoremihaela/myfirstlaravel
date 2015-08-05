@extends('app')

@section('content')

    <h1>Write a new post</h1>
    <hr/>
    <div class="content">
        {!! Form::open(['url' => 'posts']) !!}
            @include('posts.form', ['submitButtonText' => 'Add Post'])
        {!! Form::close() !!}
    </div>
@stop
