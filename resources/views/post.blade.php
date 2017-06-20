<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post1</title>
</head>
<body>
<p>Title: {{ $post->title }} <br /> content: {{ $post->content }} <br /> <a href="delete/{{ $post->id }}">Delete</a> of
    <a href="edit/{{ $post->id }}">Edit</a></p>
</body>
</html>