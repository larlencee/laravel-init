@extends('web::layouts.master')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($productions as $value)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">{{$value->title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <small class="text-muted"><span class="rmd">¥</span><span class="price">{{$value->price}}</span></small>
                                <small class="text-muted">90人喜欢</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation">
                {{ $productions->appends(['category_id' => request()->input('category_id')])->links() }}
            <nav>
        </div>
    </div>
   {{-- <h1>Hello World</h1>

    @foreach($categories as $value)
        {{$value->name}}
    @endforeach

    <p>
        This view is loaded from module: {!! config('web.name') !!}
    </p>

    @foreach($productions as $value)
        {{$value->title}}
    @endforeach--}}

@stop
