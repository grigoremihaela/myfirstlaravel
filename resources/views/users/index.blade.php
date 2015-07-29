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
						<img src="/img/person-4.jpg" alt="" class="user-avatar">
						<div class="testimonial-auth">
							<span class="meta">
								<strong><a href="users/{{ $user->id }}">{{ $user->name }} (auth)</a></strong>,
								<em>Project manager <a href="#">{{ $user->email }}</a></em>
							</span>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>
                @else
					<div class="testimonial">
						<img src="/img/person-1.jpg" alt="" class="user-avatar">
						<div class="testimonial-content">
							<span class="meta">
								<strong> <a href="users/{{ $user->id }}">{{ $user->name }}</a></strong>,
								<em>Designer<a href="#">{{ $user->email }}</a></em>
							</span>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>				
                @endif

{!! Form::model($user, ['method' => 'DELETE', 'action' => ['UsersController@destroy', $user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}
        
            @endforeach			
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .fullwidth-block -->
@stop