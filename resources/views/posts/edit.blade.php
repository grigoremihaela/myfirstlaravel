@extends('app')

@section('content')

    <h1>Edit: {!! $post->title !!}</h1>
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
        @include('posts.form', ['submitButtonText' => 'Update Post'])
    {!! Form::close() !!}
@stop