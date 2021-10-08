@extends('layout')

@section('content')
  <h1>Laravel 8 CRUD - User Management</h1>

  @include('users/partials/flash_msg')

  <div class="text-end mb-3">
    <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($users) < 1)
        <tr>
          <td colspan="4" class="text-center">No Users</td>
        </tr>
      @else
        @foreach($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>@include('users/partials/actions', ['user' => $user])</td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>
  {{ $users->links() }}
@endsection