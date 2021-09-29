@if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger">{{ $message }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif