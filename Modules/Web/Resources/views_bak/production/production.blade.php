@extends('web::layouts.master')

@section('content')
    <div class="category-box">
        <ul class="">
            @foreach($categories as $value)
                <li><a href="{{ url("productions?category_id=" . $value['id'])}}">{{$value['name']}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="index-production-div">
        <ul class="index-production-ul">
            @foreach($productions as $value)
                <li>
                    <dl>
                        <dt>
                            <a target="_blank" class="img-h" href=""><img src="{{$value->image_url ?? 'images/test.jpg'}}"></a>
                            <span class="diy">定制</span>
                        </dt>
                        <dd><a href="" class="production-title">{{$value->title}}</a></dd>
                        <dd>
                            <span class="rmd">¥</span><span class="production-price">{{$value->price}}</span>
                            <span class="production-like">{{$value->like_count ?? 0}}人喜欢</span>
                        </dd>
                    </dl>
                </li>
            @endforeach
        </ul>
    </div>

@stop
