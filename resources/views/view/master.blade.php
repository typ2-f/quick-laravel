@extends('layouts.base')
@section('title', 'master')
@section('main')
    @parent
    <p>{{ $msg }}</p>
@endsection
