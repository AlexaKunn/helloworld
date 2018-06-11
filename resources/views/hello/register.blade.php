@extends('app')
@section('heading','Registration')
@section('subheading','Create an account here')
@section('content')
@include('partials.alerts')


  <div class="box box-primary">
      <div class="box-header with-border">
          <h3 class="box-title">Fill out fields below:</h3>
      </div>
      <div class="box-body">
        {!! Form::open(['url' => 'register/create']) !!}

          <div class="form-group" >
             {{ Form::label('first_name', 'First Name : ', array('class' => 'control-label')) }}
             {{ Form::text('first_name', Request::old('first_name'), array('class' => 'field form-control','id' => 'first_name')) }}
          </div>

          <div class="form-group">
             {{ Form::label('last_name', 'Last Name : ', array('class' => 'control-label')) }}
             {{ Form::text('last_name', Request::old('last_name'), array('class' => 'field form-control','id' => 'last_name')) }}
          </div>

          <div class="form-group">
           {{ Form::label('address_1', 'Address 1 : ', array('class' => 'control-label')) }}
           {{ Form::text('address_1', Request::old('address_1'), array('class' => 'field form-control','id' => 'address_1')) }}
          </div>

          <div class="form-group">
           {{ Form::label('address_2', 'Address 2 : ', array('class' => 'control-label')) }}
           {{ Form::text('address_2', Request::old('address_2'), array('class' => 'field form-control','id' => 'address_2')) }}
          </div>

          <div class="form-group">
           {{ Form::label('city', 'City : ', array('class' => 'control-label')) }}
           {{ Form::text('city', Request::old('city'), array('class' => 'field form-control','id' => 'city')) }}
          </div>

          <div class="form-group">
           {{ Form::label('state', 'State : ', array('class' => 'control-label')) }}
           {{ Form::select('state', States::whereCountryCode('US')->pluck('name','iso_3166_2'),Request::old('state'), array('class' => 'field form-control','id' => 'state')) }}
          </div>

          <div class="form-group">
           {{ Form::label('zip', 'Zip : ', array('class' => 'control-label')) }}
           {{ Form::text('zip', Request::old('zip'), array('class' => 'field form-control','id' => 'zip')) }}
          </div>

          <div class="form-group">
           {{ Form::label('country', 'Country : ', array('class' => 'control-label')) }}
           {{ Form::text('country', 'USA', array('class' => 'field form-control','id' => 'country','readonly' => true)) }}
          </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Register</button>
        </div>

        {!! Form::close() !!}

      </div>
  </div>






@endsection
