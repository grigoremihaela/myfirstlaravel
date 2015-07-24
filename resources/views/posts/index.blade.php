@extends('app')

@section('allPosts')

  <div class="row">  
      <div class="span6 pull-right">
         <a href="{{ url('/posts/create') }}">Create a new post here.</a>
      </div>   
      <h1>All Posts</h1>
      <hr/> 
  </div> 

  @foreach ($posts as $post)
  <div class="box">

      <div class="col-lg-12 text-center">
        <h2>
           <a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
           <br>
           <small>{{ $post->user->name }} {!! $post->created_at  !!}</small>
        </h2>          
      </div>

      <div class="col-lg-12">
          <p>{!! $post->summary !!}</p> 
      </div>

      <div class="col-lg-12 text-center">
          {!! link_to('/posts/' . $post->id) !!} 
          <hr>
      </div>

  </div>
  @endforeach

  <div class="col-lg-12 text-center">
      Auth user:  {!! Auth::user() !!}
  </div>

@stop
       
      
    
      
        
        
     
     
        

