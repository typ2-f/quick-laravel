<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
</head>
<body>
<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
<hr />
@section('main')
<p>既定のコンテンツです。</p>
@show
<hr />
<a href="http://127.0.0.1:8000/index">index</a>
<p>Copyright(c) 1998-2022,WINGS Project. All Right Reserved.</p>
</body>
</html>