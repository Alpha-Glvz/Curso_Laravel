@extends('layout/app')

@section('content')
    <h1>Contact 2</h1>
    <p>{{ $name }}</p>

    @if ($name != "Luis")
        Tu nombre no es Luis
    @else
        <h2>Tu nombre es Luis</h2>
    @endif
@endsection