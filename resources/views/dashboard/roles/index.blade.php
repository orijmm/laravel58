@extends('layouts.app')

@section('content')
<a href="{{route('roles.create')}}" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus"></i>
	</span>
	<span class="text">Agregar Rol</span>
</a>
@include('dashboard.roles.list')

@endsection