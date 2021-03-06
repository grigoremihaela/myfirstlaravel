@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-10 text-center">
            <h1 class="section-title">All  Posts </h1>
        </div>
        <div class="col-md-2 text-center">
            <h2>
            <a href="{{ url('/posts/create') }}">{!! Form::button('Create a new post here!', array('class' => 'btn btn-success ')) !!}</a>
            </h2>
        </div>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="box">
                <div class="col-lg-12  ">
                    <h2>
                    {!! link_to('/posts/'.$post->slug, $post->title) !!}                
                    <br>
                    <small>{!! $post->id !!}. {{ $post->user->name }} {!! $post->updated_at  !!} </small>
                    </h2>          
                </div>
                <div class="col-lg-12">
                    <p>{!! $post->summary !!}</p> 
                </div>
<!-- .react -->
                <div class="row">
                    {!! React::component('HelloWorld', []) !!}  
    <!--                 <div class="comments" id="{{ $post->id }}"></div>  -->
                </div>
<!-- .react -->
                <div class="col-lg-12 ">
                    {!! link_to('/posts/' . $post->slug) !!} 
                    <hr>
                </div>
            </div>
        @endforeach
        {!! $posts->render() !!} 
    </div> <!-- .row -->
@stop
       
      
    
      
        
        
     
     
        

