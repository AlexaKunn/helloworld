@extends('app')
@section('heading','Confirmation')
@section('subheading','')
@section('content')
@include('partials.alerts')


<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Confirmed!</h4>
                Account has been created.
              </div>





@endsection
