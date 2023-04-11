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
        <li><a href="/view/comment">comment</a></li>
        <li><a href="/view/if">if</a></li>
        <li><a href="/view/unless">unless</a></li>
        <li><a href="/view/isset">isset</a></li>
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
    <!--chapter5-->
    <h2>chapter5</h2>
    <ul>
        <li><a href="/route/param/108">param</a>&lpar;例:id=108&rpar;</li>
        <li><a href="/route/search/example">keywd</a>&lpar;例:example&rpar;可変長パラメーター</li>
        <li><a href="/route/ns">namespace</a></li>
        <li><a href="/route">route</a>&lpar;controller介さずviewを返す&rpar;</li>
        <li><a href="/route/enum_param/lang">enum_param/lang</a></li>
        <li><a href="/route/enum_param/error">enum_param/error</a>&lpar;404 Not Found&rpar;</li>
        <li><a href="/hoge">redirect</a></li>
        <li><a href="/fuga">redirect</a>&lpar;301のステータスコードも添えて&rpar;</li>
    </ul>
    <div>
        <p>リソースルート</p>
        <ul>
            <li><a href="/articles">/articles</a>&lpar;index&rpar;</li>
            <li><a href="/articles/show">/articles/&lbrace;article&rbrace;</a>&lpar;show&rpar;</li>
            <li><a href="/articles/create">/articles/create</a>&lpar;create&rpar;</li>
            <li><a href="/articles">/articles</a>&lpar;POSTでstore&rpar;</li>
            <li><a href="/articles/{articles}/edit">/articles/&lbrace;articles&rbrace;/edit</a>&lpar;edit&rpar;</li>
            <li><a href="/articles">/articles/&lbrace;article&rbrace;</a>&lpar;PUT/PATCHでupdate&rpar;</li>
            <li><a href="/articles">/articles/&lbrace;article&rbrace;</a>&lpar;DELETEでdestroy&rpar;</li>
        </ul>
    </div>
    <!--chapter6-->
    <h2>chapter6</h2>
    <ul>
        <li><a href='ctrl/plain'>plain</a></li>
        <li><a href='ctrl/header'>header</a></li>
        <li><a href='ctrl/outJson'>outJson</a></li>
        <li><a href='ctrl/outFile'>outFile</a></li>
        <li><a href='ctrl/outCsv'>outCsv</a></li>
        <li><a href='ctrl/outImage'>outImage</a></li>
        <li><a href='ctrl/redirectBasic'>redirectBasic</a></li>
        <li><a href='ctrl/index'>index</a></li>
        <li><a href='ctrl/hoge/{id?}'>hoge</a></li>
        <li><a href='ctrl/form/{name?}'>form</a></li>
        <li><a href='ctrl/upload'>upload</a></li>
        <li><a href=post'ctrl/uploadfile'>uploadfile</a></li>
        <li><a href='ctrl/middle'>middle</a></li>
    </ul>
@endsection
