@extends('app')

@section('content')

    <div class="row"> 

        <div class="col-md-4">
             <h1>{{ $post->title }}</h1>
        </div>

        @if (Auth::check() && Auth::user()->id == $post->user_id)

        <div class="col-md-4 text-center">
           <h1><a href="{{ $post->id }}/edit">{!! Form::button('Update', array('class' => 'btn btn-warning')) !!}</a></h1>
        </div>

        <div class="col-md-4 text-right"> 
            <h1>   
            {!! Form::model($post, ['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) !!}
                <div class="form-group">  
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
            </h1>
        </div>

        @endif 

    </div>

    <hr/>

    <div class="content">
         {!! $post->summary !!}
         <hr/>
         {!! $post->content !!}
    </div>
@stop

@section('footer')
   Created at: {{ $post->created_at }}
   Updated at: {{ $post->updated_at }}
@stop


