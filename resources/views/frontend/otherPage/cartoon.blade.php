@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('pagehome')}}">Anasayfa</a></li>
                        <li>Haftanın Karikatürleri</li>
                    </ul>
                    <h1>Haftanın Karikatürleri</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img src="{{asset('front/')}}/img/post-1.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="category.html">Css</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img src="{{asset('front/')}}/img/post-1.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="category.html">Css</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <div class="col-md-4">

                    @include('frontend.widgets.categoryWidget')
                </div>
            </div>
        </div>
    </div>

@endsection
