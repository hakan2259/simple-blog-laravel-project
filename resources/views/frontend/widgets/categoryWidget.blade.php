<!-- ad -->
<div class="aside-widget text-center">
    <a href="#" style="display: inline-block;margin: auto;">
        <img class="img-responsive" src="{{asset('front/')}}/img/ad-1.jpg" alt="">
    </a>
</div>

<!-- /ad -->
<div class="section-title">
    <h2>En Çok Okunanlar</h2>
</div>

@foreach($mostread as $read)
    <div class="post post-widget">
        <a class="post-img" href="{{route('post',[$read->getCategory->slug,$read->slug])}}}"><img
                src="{{asset('front/')}}/img/{{$read->image}}"
                alt=""></a>
        <div class="post-body">
            <h3 class="post-title"><a
                    href="{{route('post',[$read->getCategory->slug,$read->slug])}}">{{$read->title}}</a></h3>
        </div>
    </div>
@endforeach


<!-- /post widget -->
<!-- ad -->
<div class="aside-widget text-center">
    <a href="#" style="display: inline-block;margin: auto;">
        <img class="img-responsive" src="{{asset('front/')}}/img/ad-1.jpg" alt="">
    </a>
</div>
<!-- /ad -->


<!-- post widget -->

<div class="section-title">
    <h2>Öne Çıkan Gönderiler</h2>
</div>
@foreach($onecikan as $ocikan)
    <div class="post post-thumb">
        <a class="post-img" href="{{route('post',[$ocikan->getCategory->slug,$ocikan->slug])}}"><img
                src="{{asset('front/')}}/img/{{$ocikan->image}}"
                alt="{{$ocikan->image}}"></a>
        <div class="post-body">
            <div class="post-meta">
                <a class="post-category cat-3"
                   href="{{route('category',$ocikan->getCategory->slug)}}">{{$ocikan->getCategory->name}}</a>
                <span class="post-date">{{$ocikan->created_at->diffForHumans()}}</span>
            </div>
            <h3 class="post-title"><a
                    href="{{route('post',[$ocikan->getCategory->slug,$ocikan->slug])}}">{{$ocikan->title}}</a>
            </h3>
        </div>
    </div>
@endforeach



<!-- /post widget -->



<!-- tags -->

<div class="section-title">
    <h2 style="margin-top: 25px">Kategori Bulutu</h2>
</div>
<div class="tags-widget" style="margin-bottom: 10px;">
    <ul>
        @foreach($categories as $category)
            <li><a href="{{route('category',$category->slug)}}">{{$category->name}}</a></li>
        @endforeach

    </ul>
</div>

<!-- /tags -->
<!-- ad -->

<a href="#" style="display: inline-block;margin: auto;">
    <img class="img-responsive" src="{{asset('front/')}}/img/ad-1.jpg" alt="">
</a>

<!-- /ad -->





