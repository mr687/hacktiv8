@extends('layout')

@section('content')
    <h1>Laravel 8 CRUD - Detail User</h1>

    @include('users/partials/flash_msg')

    <div class="mt-4">
      <div>
        <label>User ID</label>
        <h1>{{ $user->id }}</h1>
      </div>

      <div class="mb-3">
        <label>Name</label>
        <h1>{{ $user->name }}</h1>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <h1>{{ $user->email }}</h1>
      </div>

      <div>
        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('users.destroy', $user) }}" class="d-inline-block" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
      </div>
    </div>
@endsection