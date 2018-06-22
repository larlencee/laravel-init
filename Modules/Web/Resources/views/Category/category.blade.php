@extends('web::layouts.master')

@section('content')
    <div class="category-box">
        <ul class="">
            @foreach($category as $value)
                <li><a href="">{{$value['name']}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="index-production-div">
        <ul class="index-production-ul">
            @foreach($category as $value)
                <li>
                    <dl>
                        <dt>
                            <a target="_blank" class="img-h" href=""><img src="./images/test.jpg"></a>
                            <span class="diy">定制</span>
                        </dt>
                        <dd><a href="" class="production-title">商品名称测试</a></dd>
                        <dd>
                            <span class="rmd">¥</span><span class="production-price">1999</span>
                            <span class="production-like">10人喜欢</span>
                        </dd>
                    </dl>
                </li>
            @endforeach
        </ul>
    </div>

@stop
