@extends('layouts.default')

@section('content')	
	<div class="welcome">
		<h1>All users</h1>
		@if(isset($users) && !empty($users))
			<ul>
				@foreach ($users as $user)
					<li>{{ link_to("/users/{$user->username}",$user->username) }}</li>
				@endforeach
			</ul>
		@else
			<p>No users at the moment.</p>
		@endif			
	</div>
@stop