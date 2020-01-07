@extends('layouts.app')

@section('title', 'Roles')


@section('content')
<a href="{{route('roles.create')}}" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus"></i>
	</span>
	<span class="text">Add Role</span>
</a>
<div class="content-table">
	@include('dashboard.roles.list')
</div>
@endsection
