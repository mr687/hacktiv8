@extends('layout')

@section('content')
<h1>Laravel 8 CRUD - Edit User</h1>

@include('users/partials/flash_msg')

<div class="mt-4">
  <form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" value="{{ $user->name }}" required="">
    </div>
    <div class="form-group mb-3">
      <label for="email">E-mail Address</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}" required="">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection