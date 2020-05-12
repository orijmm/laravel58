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
	      {!! Form::text('name',settings()->get('name'),['class'=>'form-control', 'placeholder'=>'Site name', 'required' => 'required']) !!}
	    </div>
    </div>
  </div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Design</h6>
	</div>
  <div class="card-body">
  	@if(!is_null(config('sitesettings.logo')))
      <img src="{{settings()->get('logo')}}" alt="..." class="rounded float-left img-thumbnail">
    @endif
    <div class="custom-file">
      <input type="file" disabled="disabled" name="logo" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">LOGO -> Choose file...</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
  </div>
</div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::text('location',settings()->get('location'),['class'=>'form-control', 'placeholder'=>'Address', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::text('phones',settings()->get('phones'),['class'=>'form-control', 'placeholder'=>'Phones', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::email('email',settings()->get('email'),['class'=>'form-control', 'placeholder'=>'Email', 'required' => 'required']) !!}
        </div>
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
          {!! Form::select('country',$listCountries,settings()->get('country'),['class'=>'form-control', 'placeholder'=>'Select Country', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::select('locale',$listLang,settings()->get('locale'),['class'=>'form-control', 'placeholder'=>'Select language', 'required' => 'required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="col col-md-12 mb-3">
          {!! Form::select('timezone',$listTimezones,settings()->get('timezone'),['class'=>'form-control', 'placeholder'=>'Select time Zone', 'required' => 'required']) !!}
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
