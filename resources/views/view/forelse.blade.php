@extends('layouts.base')
@section('title', 'forelse')
@section('main')
    <table class="table">
        <tr>
            <th>書名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
            <th></th>
        </tr>
        @forelse ($records as $record)
            <tr>
                <td>{{ $record->title }}</td>
                <td>{{ $record->price }}円</td>
                <td>{{ $record->publisher }}</td>
                <td>{{ $record->published }}</td>
            </tr>
        @empty
            <p>データは存在しません。</p>
        @endforelse
    </table>
@endsection
