@extends('web::layouts.master')

@section('content')
    <h1>Hello World</h1>
    @foreach($category as $value)
        <a href="">{{$value['name']}}</a>
    @endforeach

    <p>
        This view is loaded from module: {!! config('web.name') !!}
    </p>
@stop
