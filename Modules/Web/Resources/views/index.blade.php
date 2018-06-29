@extends('web::layouts.default')

@section('content')
    <div class="wrap-left pull-left">
        <div class="big-pic-box">
            <div class="big-pic">
                <a href="#" target="_blank" class="transition" title="醒醒吧，腾讯、网易称霸的游戏行业，谁都没机会成为第三">
                    <div class="back-img"><img src="sy-img/061708387437.jpg"  alt="醒醒吧，腾讯、网易称霸的游戏行业，谁都没机会成为第三"></div>
                    <div class="big-pic-content">
                        <h1 class="t-h1">醒醒吧，腾讯、网易称霸的游戏行业，谁都没机会成为第三</h1>
                    </div>
                </a>
            </div>
            <div class="big2-pic big2-pic-index big2-pic-index-top">
                <a href="#" class="back-img transition" target="_blank" title="嘘！Facebook 正在上海悄悄寻找办公室">
                    <img class="lazy" src="sy-img/142618969973.jpg" alt="嘘！Facebook 正在上海悄悄寻找办公室">
                </a>
                <a href="#" target="_blank" title="嘘！Facebook 正在上海悄悄寻找办公室">
                    <div class="big2-pic-content">
                        <h2 class="t-h1">嘘！Facebook 正在上海悄悄寻找办公室</h2>
                    </div>
                </a>
            </div>
            <div class="big2-pic big2-pic-index big2-pic-index-bottom">
                <a href="#" class="back-img transition" target="_blank" title="马云在人生最艰难时去了延安，在革命根据地决定建立淘宝">
                    <img class="lazy" src="sy-img/093433055013.jpg" alt="马云在人生最艰难时去了延安，在革命根据地决定建立淘宝">
                </a>
                <a href="#" target="_blank" 马云在人生最艰难时去了延安，在革命根据地决定建立淘宝>
                    <div class="big2-pic-content">
                        <h2 class="t-h1">马云在人生最艰难时去了延安，在革命根据地决定建立淘宝</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="mod-info-flow">
            @foreach($articles as $item)
            <div class="mod-b mod-art" data-aid="213665">
                <div class="mod-angle">热</div>
                <div class="mod-thumb ">
                    <a class="transition" title="{{$item['title']}}" href="#" target="_blank">
                        <img class="lazy" src="{{$item['cover_url']}}" alt="{{$item['title']}}">
                    </a>
                </div>
                {{--<div class="column-link-box">
                    <a href="#" class="column-link" target="_blank">娱乐淘金</a>
                </div>--}}
                <div class="mob-ctt">
                    <h2><a href="#" class="transition msubstr-row2" target="_blank">{{$item['title']}}</a></h2>
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
