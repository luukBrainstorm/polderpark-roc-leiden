@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                @foreach ($posts as $post)
                    <p>Title: {{ $post->title }} <br/> Bericht: {{ $post->bericht }} <br/> <a href="post/edit/{{ $post->id }}">Edit</a> or <a href="post/delete/{{ $post->id }}">Delete</a>
                    </p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
