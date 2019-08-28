@extends('layouts.app')

@section('content')
<a href="{{route('users.create')}}" class="btn btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-plus"></i>
	</span>
	<span class="text">Agregar usuario</span>
</a>
@include('dashboard.users.list')

@endsection