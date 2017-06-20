@extends('includes.layout')
@extends('includes.head')

@section('body')
    @if(app('request')->input('success'))
        <p>Thenks</p>
    @endif

@endsection