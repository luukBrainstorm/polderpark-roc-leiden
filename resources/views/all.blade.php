<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View all posts</title>
</head>
<body>
<a href="insert">Insert post</a><br />
{{Route::currentRouteName()}}
@if(app('request')->input('success'))
    <p>Thenks</p>
    @endif
@foreach ($posts as $post)
    <p>Title: {{ $post->title }} <br /> content: {{ $post->content }} <br /> <a href="post/{{ $post->id }}">Read more</a></p>
@endforeach
</body>
</html>