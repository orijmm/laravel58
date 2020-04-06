@extends('layouts.app')

@section('title', 'Create User')

@section('content')

@section('content')
<h1 class="h3 mb-4 text-gray-800">@if($edit) Edit User @else Create user @endif</h1>
<div class="card shadow mb-4">
  <div class="card-body">
    @if($edit)
    {!! Form::model($user,['route'=>['users.update',$user->id], 'method'=>'PUT','class' => 'user']) !!}
    @else
    {!! Form::open(['route'=>'users.store', 'method'=>'POST','class' => 'user']) !!}
    @endif
      <div class="row">
        <div class="col mb-3">
          {!! Form::text('name',null,['class'=>'form-control  form-control-user', 'placeholder'=>'Full Name', 'required' => 'required']) !!}
        </div>
        <div class="col mb-3">
          {!! Form::email('email',null,['class'=>'form-control  form-control-user', 'placeholder'=>'Email', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col mb-3">
          {!! Form::text('phone',null,['class'=>'form-control  form-control-user', 'placeholder'=>'Phone']) !!}
        </div>
        <div class="col mb-3">
          {!! Form::text('address',null,['class'=>'form-control  form-control-user', 'placeholder'=>'Address', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col mb-3">
        {!! Form::select('roles',$roles,($edit)?$user->getRoleNames()->first():null,['class'=>'form-control', 'placeholder'=>'Select Rol', 'required' => 'required']) !!}
      </div>
        <div class="col mb-3">
          {!! Form::text('birthday',null,['class'=>'form-control  form-control-user datepicker', 'placeholder'=>'Birthday']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col mb-3">
          {!! Form::select('active',[1 => 'Active','0' => 'Inactive'],null,['class'=>'form-control', 'placeholder'=>'Select Status', 'required' => 'required']) !!}
        </div>
      </div>
     <div class="row">
      <div class="col col-md-3 mb-3">
        <button type="submit" class="btn btn-success form-control">
          <span class="text">Save</span>
        </button>
      </div>
      <div class="col col-md-3 mb-3">
        <a href="{{route('users.index')}}" class="btn btn-info btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-info-circle"></i>
          </span>
          <span class="text">User List</span>
        </a>
      </div>
    </div>
    {!! Form::close() !!} 
  </div>
</div>
@endsection

@push('scripts')
  <script type="text/javascript">
    $('.datepicker').datepicker({
      format: 'dd-mm-yyyy'
    });
</script>
@endpush