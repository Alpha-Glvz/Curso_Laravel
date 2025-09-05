@extends('layout/app')

@section('content')
    <h1>Contact 1</h1>
    <p>{{ $name }}</p>

    @if ($name != "Angel")
        Tu nombre es Angel
    @else
        <h2>Tu nombre no es Angel</h2>
    @endif
@endsection