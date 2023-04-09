@extends('layouts.base')
@section('title', 'foreach_assoc')
@section('main')
    @foreach ($member as $key => $value)
        <li>{{ $key }}：{{ $value }}</li>
    @endforeach
@endsection
