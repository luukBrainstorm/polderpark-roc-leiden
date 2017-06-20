@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @foreach ($posts as $post)
                        <p>Title: {{ $post->title }} <br/> content: {{ $post->content }} <br/> <a href="post/{{ $post->id }}">Read more</a>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
