@extends('layouts.base')
@section('title', 'checked')
@section('main')
    <input name="name" type="checkbox" @checked($isEnabled) />
@endsection
