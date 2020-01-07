@extends('layouts.app')

@section('title', 'User')

@section('content')
<a href="{{route('users.create')}}" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus"></i>
	</span>
	<span class="text">Add User</span>
</a>
<div class=" content-table">
@include('dashboard.users.list')
</div>
@endsection