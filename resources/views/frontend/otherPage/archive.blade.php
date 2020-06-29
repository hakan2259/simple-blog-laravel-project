@extends('frontend.layouts.master')

@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('pagehome')}}">Anasayfa</a></li>
                        <li>Arşiv</li>
                    </ul>
                    <h1>Arşiv</h1>
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
                    <h1>H1 Typography heading.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h2>H2 Typography heading.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h3>H3 Typography heading.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h4>H4 Typography heading.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <ul class="list-style">
                        <li><p>Vix mollis admodum ei, vis legimus voluptatum ut.</p></li>
                        <li><p>Cu cum alia vide malis. Vel aliquid facilis adolescens.</p></li>
                        <li><p>Laudem rationibus vim id. Te per illum ornatus.</p></li>
                    </ul>

                    <ol class="list-style">
                        <li><p>Vix mollis admodum ei, vis legimus voluptatum ut.</p></li>
                        <li><p>Cu cum alia vide malis. Vel aliquid facilis adolescens.</p></li>
                        <li><p>Laudem rationibus vim id. Te per illum ornatus.</p></li>
                    </ol>
                </div>
                <!-- aside -->
                <div class="col-md-4">
                    @include('frontend.widgets.categoryWidget')
                </div>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->



@endsection
