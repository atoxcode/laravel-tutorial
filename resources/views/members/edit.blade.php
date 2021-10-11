@extends('layouts.app')

@section('content')
<h1>Edit member</h1>

<form action="/members/{{$members->id}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <!--
            {{old('name') ? old('name') : $members->name}}
            digunakan untuk mengatasi form yang telah diisi tidak hilang ketika form lain error.
        -->
        <input type="text" class="form-control" id="name" name="name" value="{{old('name') ? old('name') : $members->name}}">
    </div>
    <br>
    <div class="form-group">
        <label for="hobby">Hobbies</label>
        <textarea class="form-control" id="hobby" name="hobby" rows="3" value="">
        {{old('hobby') ? old('hobby') : $members->hobby}}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>

</form>
@endsection