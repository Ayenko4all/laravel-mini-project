@extends('layouts.app')

@section('title')
Customer list
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Customer List</h1>
    <p><a href="{{ url('customers/create') }}">Add New Customer</a></p>
  </div>
</div>

@foreach($customers as $customer)

<div class="row">
  <div class="col-2"> {{ $customer->id }}</div>
  <div class=" col-4">
    <a href=" {{ url('/customers/' . $customer->id ) }}">{{ $customer->name }}</a>
  </div>
  <div class="col-4">{{ $customer->company->name }}</div>
  <div class="col-2">{{ $customer->active }}</div>
</div>

@endforeach


@endsection