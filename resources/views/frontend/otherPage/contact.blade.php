@extends('frontend.layouts.master')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('pagehome')}}">Anasayfa</a></li>
                        <li>İletişim</li>
                    </ul>
                    <h1>İletişim</h1>
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
                <div class="col-md-6">
                    <div class="section-row">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        @if($errors->any())
                         <div class="alert alert-warning">
                             <ul>
                                 @foreach($errors->all() as $err)
                                     <li>
                                         {{$err}}
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                        @endif
                        <h3>İletişim Bilgileri</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="list-style">
                            <li><p><strong>Email:</strong> <a href="#">Webmag@email.com</a></p></li>
                            <li><p><strong>Phone:</strong> 213-520-7376</p></li>
                            <li><p><strong>Address:</strong> 3770 Oliver Street</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="section-row">
                        <h3>Mesaj Gönder</h3>
                        <form method="post" action="{{route('contact.post')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>İsminiz</span>
                                        <input class="input" type="text" value="{{old('name')}}" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Email</span>
                                        <input class="input" type="email" value="{{old('email')}}" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Konu Başlığı</span>
                                        <input class="input" type="text" value="{{old('subject')}}" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span>Mesajınız</span>
                                        <textarea class="input" name="message" value="{{old('message')}}" required></textarea>
                                    </div>
                                    <button class="primary-button">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
