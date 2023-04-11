@extends('layouts.base')
@section('title', 'フォームの基本')
@section('main')

    <form method="POST" action="/ctrl/result">
        @csrf
        <label id="name">名前：</label>
        <input id="name" name="name" type="text" value="{{ old('name', '') }}" />
        <input type="submit" value="送信" />
    </form>
    @if (session('alert'))
        <div class="alert">{{ session('alert') }}</div>
    @else
        <div>{{ $result }}</div>
    @endif

@endsection
