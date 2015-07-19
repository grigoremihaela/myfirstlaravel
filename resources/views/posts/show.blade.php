@extends('app')

@section('content')

    @include('errors.list')

    @if (Auth::user()->id == $post->user_id)
    <div style="float:right";>
        <a href="{{ $post->id }}/edit">Update this post.</a>
    </div>
    @endif
  

    <h1>{{ $post->title }}</h1>
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


