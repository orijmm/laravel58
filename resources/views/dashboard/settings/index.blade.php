@extends('layouts.app')

@section('title', 'Settings')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Settings</h1>
{!! Form::open(['route'=> 'update.setting', 'method'=>'PUT','class' => 'user']) !!}
<div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Basic</h6>
	</div>
  <div class="card-body">
  	<div class="row">
	    <div class="col col-md-12 mb-3">
	      {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Site name', 'required' => 'required']) !!}
	    </div>
    </div>
  </div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Design</h6>
	</div>
  <div class="card-body">
  	<div class="custom-file">
      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
      <label class="custom-file-label" for="validatedCustomFile">LOGO -> Choose file...</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
  </div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Locale</h6>
	</div>
  <div class="card-body">
      <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::select('country',$listCountries,null,['class'=>'form-control', 'placeholder'=>'Select Country', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::select('lang',$listLang,null,['class'=>'form-control', 'placeholder'=>'Select language', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::select('timezones',$listTimezones,null,['class'=>'form-control', 'placeholder'=>'Select time Zone', 'required' => 'required']) !!}
        </div>
      </div>
     <div class="row mt-4">
      <div class="col col-md-3">
        <button type="submit" class="btn btn-success form-control">
          <span class="text">Guardar</span>
        </button>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!} 
@endsection
