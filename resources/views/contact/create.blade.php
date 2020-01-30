@extends('layouts.app')

@section('title','Contact Us')

@section('content')

<h1>Contact Us</h1>
@if(!session()->has('message'))

    <form action="{{ route('contact.store') }}" method="post">
      <div class="form-group pb-3">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name" value="{{ old('name') }}" class="form-control">
        <div class="text-danger">{{$errors->first('name')}}</div>
      </div>

      <div class="form-group pb-3">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control">
        <div class="text-danger">{{$errors->first('email')}}</div>
      </div>

      <div class="form-group pb-3">
        <label for="email">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div class="text-danger">{{$errors->first('message')}}</div>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Send Message</button>

    </form>

@endif

@endsection