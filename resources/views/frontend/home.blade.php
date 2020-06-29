@extends('frontend.layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- post -->

                @foreach($manset as $value)
                    <div class="col-md-6">
                        <div class="post post-thumb">
                            <a class="post-img" href="{{route('post',[$value->getCategory->slug,$value->slug])}}"><img
                                    src="{{asset('front/')}}/img/{{$value->image}}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2"
                                       href="{{route('category',$value->getCategory->slug)}}">{{$value->getCategory->name}}</a>
                                    <span class="post-date">{{$value->created_at->diffForHumans()}}</span>
                                </div>
                                <h3 class="post-title"><a
                                        href="{{route('post',[$value->getCategory->slug,$value->slug])}}">{{$value->title}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- /post -->


            </div>
            <!-- /row -->


            <!-- row -->
            <div class="row">
                <div class="col-md-8">


                    <div class="clearfix visible-md visible-lg"></div>

                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Yayın Akışı</h2>
                        </div>
                    </div>
                @foreach($posts as $post)
                    <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="{{route('post',[$post->getCategory->slug,$post->slug])}}"><img
                                        src="{{asset('front/')}}/img/{{$post->image}}"
                                        alt="{{$post->image}}"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2"
                                           href="{{route('category',$post->getCategory->slug)}}">{{$post->getCategory->name}}</a>
                                        <span class="post-date">{{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="{{route('post',[$post->getCategory->slug,$post->slug])}}">{{$post->title}}</a>
                                    </h3>
                                    <p>{{Str::limit($post->content,75)}}</p>
                                </div>
                            </div>
                        </div>
                @endforeach

                {{$posts->links()}}

                <!-- /post -->


                </div>

                <div class="col-md-4">
                    <!-- post widget -->
                    @include('frontend.widgets.categoryWidget')
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->


@endsection
