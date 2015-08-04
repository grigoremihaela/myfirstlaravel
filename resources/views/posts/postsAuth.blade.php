@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-10 text-center">
            <h1 class="section-title">Your Posts </h1>
        </div>
        <div class="col-md-2 text-center">
            <h2>
            <a href="{{ url('/posts/create') }}">{!! Form::button('Create a new post here!', array('class' => 'btn btn-success ')) !!}</a>
            </h2>
        </div>
    </div>
    <hr> 
    <div class="row">  
        @foreach ($posts as $post)
            <div class="box">
                <div class="col-lg-12 ">
                    <h2>
                        {!! link_to('/posts/'.$post->slug, $post->title) !!}
                        <br>
                        <small>{{ $post->user->name }} {!! $post->created_at  !!}</small>
                    </h2>          
                </div>
                <div class="col-lg-12">
                    <p>{!! $post->summary !!}</p> 
                </div>
                <div class="col-lg-12 ">
                    {!! link_to('/posts/' . $post->slug) !!} 
                    <hr>
                </div>
            </div>
        @endforeach
    </div>
@stop
       

