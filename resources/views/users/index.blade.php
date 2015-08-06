@extends('app')

@section('users')

<div class="fullwidth-block-gray" data-bg-color="#e6e6e6">
	<div class="container">
		<h2 class="section-title">Customer testimonials</h2>
		<smal class="section-subtitle">All users</smal>
        <div class="row">
            @foreach ($users as $user)
                @if (Auth::check() &&  Auth::user()->id == $user->id)     							
					<div class="testimonial">
					    <img src="{{ $user->avatar }}" alt="" class="user-avatar" style="float:right; height:128px; width:128px" >
						<img src="{{ $user->image }}" alt="" class="user-avatar" style="float:right; height:128px; width:128px" >
						<div class="testimonial-auth">
							<span class="meta">
								<strong>
								  {!! link_to('/users/'.$user->id, $user->name.'(auth)') !!}      		
		                        </strong>, 
		                        <em>Project manager {!! link_to('/users/'.$user->id, $user->email) !!}</em>
							</span>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>
                @else
					<div class="testimonial">
					    <img src="{{ $user->image }}" alt="" class="user-avatar" style="float:right; height:128px; width:128px" >
						<div class="testimonial-content">
							<span class="meta">
								<strong> {!! link_to('/users/'.$user->id, $user->name) !!} </strong>,
								<em>Designer {!! link_to('/users/'.$user->id, $user->email) !!}</em>
							</span>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>				
                @endif
@if (Auth::check() &&  Auth::user()->id == '1') 
    {!! Form::model($user, ['method' => 'DELETE', 'action' => ['UsersController@destroy', $user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@endif        
            @endforeach	
           {!! $users->render() !!} 		
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .fullwidth-block -->
@stop