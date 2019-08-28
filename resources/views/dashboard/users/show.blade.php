@extends('layouts.app')

@section('content')
<h1>User Details</h1>
<ul>
	<li>Name: {{$user->name}}</li>
	<li>Email: {{$user->email}}</li>
	<li>Phone: {{$user->phone}}</li>
	<li>Address: {{$user->address}}</li>
	<li>Birthday: {{$user->birthday}}</li>
	<li>Status: {!!$user->activeButton()!!}</li>
	<li>Roles: 
		@if(!empty($user->roles()))
	        @foreach($user->getRoleNames() as $v)
	           <label class="badge badge-success">{{ $v }}</label>
	        @endforeach
	    @endif</li>
</ul>
@endsection