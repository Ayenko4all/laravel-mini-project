@extends('layouts.app')

@section('title')
Details for {{ $customer->name }}
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Details for {{ $customer->name }}</h1>
    <p><a href="{{ url('/customers/' . $customer->id) }}/edit">Edit</a></p>

    <form action="{{ route('customers.destroy', ['customer' => $customer] ) }}" method="post">
      @method('DELETE')
      @csrf

      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <p><strong>Name </strong> {{ $customer->name }}</p>
    <p><strong>Email </strong> {{ $customer->email }}</p>
    <p><strong>Company </strong> {{ $customer->company->name }}</p>
  </div>
</div>

@endsection