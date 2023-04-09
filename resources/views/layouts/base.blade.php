<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
</head>

<body>
    <a href="http://127.0.0.1:8000/index"><img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" /></a>
    <hr />
    @section('main')
        <p>既定のコンテンツです。</p>
    @show
    <hr />

    <p>Copyright(c) 1998-2022,WINGS Project. All Right Reserved.</p>
</body>

</html>
