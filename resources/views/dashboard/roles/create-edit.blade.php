@extends('layouts.app')

@section('title', 'Create Role')

@section('content')
<h1 class="h3 mb-4 text-gray-800">@if($edit) Edit Rol @else Create Rol @endif</h1>
@if($edit)
{!! Form::model($role,['route'=>['roles.update',$role->id], 'method'=>'PUT','class' => 'user']) !!}
@else
{!! Form::open(['route'=>'roles.store', 'method'=>'POST','class' => 'user']) !!}
@endif
  <div class="row">
    <div class="col mb-3">
      {!! Form::text('name',old("name") ? old("name") : (!empty($role)) ? $role->name : null,['class'=>'form-control  form-control-user','placeholder' => 'Name','required' => 'required']) !!}
    </div>
  </div>
  <div class="row">
    <div class="col mb-3">
      <p>Permissions</p>
      @foreach($permission as $value)
        @if($edit)
        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
        {{ $value->name }}
      </label>
       <br/>
      @else
        <label>{{ Form::checkbox('permission[]', $value->id, ($edit) ? true:false, array('class' => 'name')) }}
                {{ $value->name }}
        </label>
            <br/>
        @endif
      @endforeach
    </div>
  </div>
 <div class="row">
  <div class="col col-md-3 mb-3">
    <button type="submit" class="btn btn-success form-control">
      <span class="text">Save</span>
    </button>
  </div>
  <div class="col col-md-3 mb-3">
    <a href="{{route('roles.index')}}" class="btn btn-info btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
      </span>
      <span class="text">Roles List</span>
    </a>
  </div>
</div>
{!! Form::close() !!} 

@endsection
