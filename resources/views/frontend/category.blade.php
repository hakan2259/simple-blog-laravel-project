@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header -->

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="page-header-breadcrumb">
                            <li><a href="{{route('pagehome')}}">Anasayfa</a></li>
                            <li>{{$category->name}}</li>
                        </ul>
                        <h1></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->


    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">

                        @foreach($post as $pst)
                        <!-- post -->
                            <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img" href="{{route('post',[$pst->getCategory->slug,$pst->slug])}}"><img
                                            src="{{asset('front/')}}/img/{{$pst->image}}"
                                            alt="{{$pst->image}}"></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-2"
                                               href="{{route('category',[$pst->getCategory->slug,$pst->slug])}}">{{$pst->getCategory->name}}</a>
                                            <span class="post-date">{{$pst->created_at->diffForHumans()}}</span>
                                        </div>
                                        <h3 class="post-title"><a href="{{route('post',[$pst->getCategory->slug,$pst->slug])}}">{{$pst->title}}</a></h3>
                                        <p>{{Str::limit($pst->content,75)}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            {{$post->links()}}
                        <!-- /post -->


                        <!-- ad -->
                        <div class="col-md-12">
                            <div class="section-row">
                                <a href="#">
                                    <img class="img-responsive center-block" src="{{asset('front/')}}/img/ad-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- ad -->



                    </div>

                <div class="col-md-4">


                  @include('frontend.widgets.categoryWidget')


                </div>




                </div>

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->




@endsection
