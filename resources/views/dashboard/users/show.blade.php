@extends('layouts.app')

@section('title', 'User details')

@section('content')
<h1 class="h3 mb-4 text-gray-800">User Details</h1>
<div class="card shadow mb-4">
  <div class="card-body">
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
  </div>
</div>

@endsection