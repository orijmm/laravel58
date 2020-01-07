@extends('layouts.app')

@section('title', 'Permissions Details')

@section('content')
<h1>Permission Details</h1>
<ul>
	<li>Name: {{$permission->name}}</li>
	<li>Permissions: <br>
		@if(!empty($permission->permissions()))
	        @foreach($permission->getPermissionNames() as $v)
	           <label class="badge badge-success">{{ $v }}</label>
	        @endforeach
	    @endif
	</li>
</ul>
@endsection