@extends('layouts.app')

@section('content')
<h1>Role Details</h1>
<ul>
	<li>Name: {{$role->name}}</li>
	<li>Permissions: <br>
		@if(!empty($role->permissions()))
	        @foreach($role->getPermissionNames() as $v)
	           <label class="badge badge-success">{{ $v }}</label>
	        @endforeach
	    @endif
	</li>
</ul>
@endsection