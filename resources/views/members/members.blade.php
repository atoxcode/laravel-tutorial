@extends('layouts.app')

@section('content')
<h1>This is a sozolab members page</h1>
<a href="/members/create" class="btn btn-primary">Add new member +</a>
<br><br>
@foreach ($informations as $information)
<div class="card mb-1">
    <div class="card-body">
        <p><strong>Name: {{ $information->name }}</strong></p>
        <p>Hobby: {{ $information->hobby }}</p>
        <a href="/members/{{$information->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
</div>
@endforeach

<div>
    {{ $informations -> links() }}
</div>
@endsection