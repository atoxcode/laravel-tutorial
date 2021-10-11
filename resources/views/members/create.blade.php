@extends('layouts.app')

@section('content')
<h1>Add new member</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/members" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <br>
    <div class="form-group">
        <label for="hobby">Hobbies</label>
        <textarea class="form-control" id="hobby" name="hobby" rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection