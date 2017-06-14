@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="insert/data" method="POST" role="form">
                    <br style="clear:both">
                    <div class="form-group">
                        <label>Insert message</label>
                        <input class="form-control" type="text" name="title" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="submit" value="submit" />
                </form>
            </div>
        </div>
    </div>
@endsection
