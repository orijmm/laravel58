@extends('layouts.app')

@section('title', 'Permissions')

@section('content')
<a href="{{route('permissions.create')}}" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus"></i>
	</span>
	<span class="text">Add Permission</span>
</a>
{!! Form::open(['route' => 'permissions.save']) !!}
<div class="content-table">
@include('dashboard.permissions.list')
</div>
<button class="btn btn-success" type="submit"><i class="fa fa-edit"></i> Update</button>
@endsection