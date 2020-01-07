@extends('layouts.app')

@section('title', 'Create Permission')

@section('content')
<h1 class="h3 mb-4 text-gray-800">@if($edit) Edit Permission @else Create Permission @endif</h1>
@if($edit)
{!! Form::model($permission,['route'=>['permissions.update',$permission->id], 'method'=>'PUT','class' => 'user']) !!}
@else
{!! Form::open(['route'=>'permissions.store', 'method'=>'POST','class' => 'user']) !!}
@endif
  <div class="row">
    <div class="col mb-3">
      {!! Form::text('name',old("name") ? old("name") : (!empty($role)) ? $role->name : null,['class'=>'form-control  form-control-user','placeholder' => 'Name','required' => 'required']) !!}
    </div>
  </div>
 <div class="row">
  <div class="col col-md-3 mb-3">
    <button type="submit" class="btn btn-success form-control">
      <span class="text">Save</span>
    </button>
  </div>
  <div class="col col-md-3 mb-3">
    <a href="{{route('permissions.index')}}" class="btn btn-info btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
      </span>
      <span class="text">Permissions List</span>
    </a>
  </div>
</div>
{!! Form::close() !!} 

@endsection
