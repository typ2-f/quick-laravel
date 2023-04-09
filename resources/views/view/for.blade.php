@extends('layouts.base')
@section('title', 'for')
@section('main')
    @for ($i = 1; $i <= 6; $i++)
        <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
    @endfor
@endsection
