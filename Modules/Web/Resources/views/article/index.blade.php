@extends('web::layouts.default')

@section('content')
    <div class="wrap-left pull-left">

        <div class="mod-info-flow">
            @foreach($articles as $item)
            <div class="mod-b mod-art" data-aid="213665">
                <div class="mod-angle">热</div>
                <div class="mod-thumb ">
                    <a class="transition" title="{{ $item['title'] }}" href="{{ url('articles/show', [$item['id']]) }}" target="_blank">
                        <img class="lazy" src="{{$item['cover_url']}}" alt="{{$item['title']}}">
                    </a>
                </div>
                {{--<div class="column-link-box">
                    <a href="#" class="column-link" target="_blank">娱乐淘金</a>
                </div>--}}
                <div class="mob-ctt">
                    <h2><a href="{{ route('articles.show', [$item['id']])  }}" class="transition msubstr-row2" target="_blank">{{$item['title']}}</a></h2>
                    <div class="mob-author">
                        {{--<div class="author-face">
                            <a href="#" target="_blank"><img src="sy-img/59_1502432173.jpg"></a>
                        </div>
                        <a href="#" target="_blank">
                            <span class="author-name ">{{$item->author}}</span>
                        </a>--}}
                        <span class="time">{{$item->published_at}}</span>
                        <i class="icon icon-cmt"></i><em>0</em>
                        <i class="icon icon-fvr"></i><em>{{$item->like_count}}</em>
                    </div>
                    <div class="mob-sub">{{$item['description']}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="get-mod-more js-get-mod-more-list transition" data-cur_page="1" data-last_dateline="1504655833">
            点击加载更多
        </div>
    </div>
    <div class="wrap-right pull-right">
        @include('web::partials.index.index_right')
    </div>
@stop