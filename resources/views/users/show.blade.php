@extends('app')

@section('content')

    <div class="container">
        <h2 class="section-title">Profile of user</h2>      
        <div class="row">
            <div class="col-lg-12 " >
                <div class="pricing ">
                    <div class="pricing-header">                                      
                        <div class="price">
                           <span class="num">{{ $user->name}}:
                                @if(($user->image))
                                    <img src="{{ $user->image }}" alt="" class="user-avatar" style="float:right; height:128px; width:128px" >
                                @endif
                                @if(($user->avatar))
                                    <img src="{{ $user->avatar }}" alt="" class="user-avatar" style="float:right; height:128px; width:128px" >
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pricing-checklist">
                        <ul>
                            <li class="check" >Name: {{ $user->name}} </li>
                            <li class="check">Email: {{ $user->email}} </li>
                            @if (Auth::check() && Auth::user()->id == $user->id)                                              
                                <li class="check">
                                    {!! link_to('/users/'.$user->id.'/edit', 'Edit your profile') !!}
                                </li>
                            @endif                                 
                        </ul>
                    </div>                                    
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
@stop
