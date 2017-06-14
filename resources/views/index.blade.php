@extends('includes.layout')

@section('body')
    @if(app('request')->input('success'))
        <p>Thenks</p>
    @endif
    @foreach ($posts as $post)
        <p>Title: {{ $post->title }} <br/> content: {{ $post->content }} <br/> <a href="post/{{ $post->id }}">Read more</a>
        </p>
    @endforeach
@endsection