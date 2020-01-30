@extends('layouts.app')

@section('title')
Add New Customer
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Add New Customer</h1>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <form action="{{ url('/customers') }}" method="POST" class="">

      @include('customers.form')

      <button type="submit" class="btn btn-primary">Add Customer</button>


    </form>
  </div>
</div>

@endsection