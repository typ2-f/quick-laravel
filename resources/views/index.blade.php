@extends('layouts.base')
@section('title', 'index')
@section('main')
    <h1>一覧</h1>
    <!--chapter3-->
    <h2>chapter3</h2>
    <ul>
        <li><a href="/hello">hello</a></li>
        <li><a href="/hello/view">view</a></li>
        <li><a href="/hello/list">list</a></li>
    </ul>
    <!--chapter4-->
    <h2>chapter4</h2>
    <ul>
        <li><a href="/view/escape">escape</a></li>
        <li><a href="/view/if">if</a></li>
        <li><a href="/view/isset">isset</a></li>

        <li><a href="/view/comment">comment</a></li>

        <li><a href="/view/unless">unless</a></li>

        <li><a href="/view/switch">switch</a></li>
        <li><a href="/view/while">while</a></li>
        <li><a href="/view/for">for</a></li>
        <li><a href="/view/foreach_assoc">foreach_assoc</a></li>
        <li><a href="/view/foreach_loop">foreach_loop</a></li>
        <li><a href="/view/forelse">forelse</a></li>
        <li><a href="/view/style_class">style_class</a></li>
        <li><a href="/view/checked">checked</a></li>
        <li><a href="/view/master">master</a></li>
        <li><a href="/view/comp">comp</a></li>
        <li><a href="/view/list">list</a></li>
    </ul>
@endsection
