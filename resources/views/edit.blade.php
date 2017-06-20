<!doctype html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<form action="/post/edit/{{ $post->id }}/save" method="POST">
    <input type="text" value="{{ $post->title }}" name="title" />
    <textarea name="content">{{ $post->bericht }}</textarea>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="submit" />
</form>
</body>
</html>