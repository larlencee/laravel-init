<div class="right-ad-box"></div>



{{--<div class="ad-wrap">
    <div class="ad-title">广告</div>
</div>--}}
{{--<div class="placeholder"></div>--}}
<!--传言-->
<!--传言部分开始-->
{{--<div id="rumor_center"></div>--}}
{{--<div class="box-moder moder-rumors-list">
    <h3>传言</h3>
    <span class="span-mark"></span>
    <div class="big2-pic pull-right">
        <a href="#" class="back-img" target="_blank">
            <img class="lazy" src="sy-img/105108838520.jpg" alt="">
        </a>
        <a href="https://chuanyan.huxiu.com/rumor/detail/684.html" target="_blank">
            <div class="big2-pic-content">
                <h2 class="t-h1">传苹果和亚马逊正在竞购“007”品牌特许经营权</h2>
            </div>
            <div class="clear"></div>
        </a>
    </div>
    <div class="clear"></div>
    <ul class="rumorlist">
        <li>
            <div class="icon-clock"><img src="images/clock.jpg"/></div>
            <p class="rumor-time">09月07日 08:00</p>
            <p class="rumor-detail"><a href="#" target="_blank">美媒报道称，苹果和亚马逊正在竞购“007”詹姆斯·邦德品牌的特...</a></p>
        </li>
    </ul>
    <div class="rumor-more">
        <p><a href="#" target="_blank">详情>></a></p>
    </div>
</div>--}}

<div class="box-moder moder-project-list promote-box">
    <h3>热门排行</h3>
    <span class="span-mark"></span>
    <ul>
        @foreach($hotArticles as $item)
            <li><span class="">{{$loop->index + 1}} . </span><a href="#" target="_blank">{{$item['title']}}</a></li>
            @endforeach
    </ul>
</div>
<div class="placeholder"></div>

<div class="box-moder hot-article">
    <h3>7日最热</h3>
    <span class="span-mark"></span>
    <ul>
        @foreach($hotArticles as $item)
        <li>
            <div class="hot-article-img">
                <a href="#" target="_blank" title="{{$item['title']}}">
                    <img src="{{$item['cover_url']}}">
                </a>
            </div>
            <a href="#" class="transition" target="_blank">{{$item['title']}}</a>
        </li>
        @endforeach

    </ul>
</div>
<div class="placeholder"></div>
