<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "To-Do List")</title>
    <link href="{{asset("public/assets/css/bootstrap.css")}}" rel="stylesheet">
</head>
<body>
<div>
    @yield("content")
</div>
<script src="{{asset("public/assets/js/bootstrap.js")}}"></script>
</body>
</html>
