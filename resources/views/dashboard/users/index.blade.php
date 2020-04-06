@extends('layouts.app')

@section('title', 'User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Users List</h1>
<div class="card shadow mb-4">
	<div class="card-body">
		<a href="{{route('users.create')}}" class="btn btn-success btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Add User</span>
		</a>
		<div class=" content-table">
			@include('dashboard.users.list')
		</div>
	</div>
</div>
@endsection