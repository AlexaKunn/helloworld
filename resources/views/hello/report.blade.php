@extends('app')
@section('heading','Accounts')
@section('subheading','Here are the existing accounts')
@section('content')
@include('partials.alerts')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Admin Report</h3>
    </div>
    <div class="box-body">

      <table class="table" id="user_table">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address 1</th>
            <th scope="col">Address 2</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Zip</th>
            <th scope="col">Country</th>
            <th scope="col">Date</th>

          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td scope="row">{{ $user->first_name }}</td>
            <td> {{ $user->last_name}}</td>
            <td>{{ $user->address_1 }}</td>
            <td>{{ $user->address_2 }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->zip }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->created_at }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

 </div>
</div>



@endsection
