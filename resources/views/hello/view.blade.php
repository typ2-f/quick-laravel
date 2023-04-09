@extends('layouts.base')
@section('title', '速習Laravel')
@section('main')

    {{ $msg }}
    <div>現在の日時：{{ date('Y年m月d日 h:i:s') }}</div>
@endsection
