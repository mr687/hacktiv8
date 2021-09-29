<a href="{{ route('users.show', $user) }}" class="btn btn-info">Show</a>
<a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>
<form action="{{ route('users.destroy', $user) }}" class="d-inline-block" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">Delete</button>
</form>