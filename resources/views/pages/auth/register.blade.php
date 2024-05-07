@extends('layouts.main')

@section('title')
    Living Lab | Registrasi Akun
@endsection

@push('addon-style')
    <style>
        .tombol{
            margin-bottom: 2vh;
        }

        .btn-pratinjau{
            color: white;
            background-color: #3e4494;
            border: 1px #3e4494 !important;
            border-radius: 0px !important;
            margin-right: 1vh;
        }

        .btn-pratinjau:hover{
            color: white;
            background-color: #4f549c;
        }

        .btn-simpan{
            color: white;
            background-color: #fc7837;
            border: 1px #fc7837 !important;
            border-radius: 0px !important;
        }

        .btn-simpan:hover{
            color: white;
            background-color: #ff8a50;
        }
    </style>
@endpush

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/3.jpg') }});">
        <div class="auto-container">
            <h1>Registrasi Akun</h1>
            <div class="title">Jadilah Inovator Bersama Kami</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{  route('home') }}">Home</a></li>
                        <li><a href="{{ route('register') }}">Registrasi Akun</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                {{-- <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Login Now</h2>
                        <div class="separator"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-one">Login Now</button>
                                </div>
                                <div class="form-group social-links-two pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                                </div>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div> --}}
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Daftarkan Akun Anda Disini</h2>
                        <div class="separator"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Nama Instansi *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Email Instansi *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Password *">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-one">Daftar disini</button>
                                </div>
                                {{-- <div class="form-group submit-text pull-right">
                                	* You must be a free registered to submit content.
                                </div> --}}
                            </div>
                            
                        </form>
                    </div>
                    
                </div>

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Video Cara Registrasi Living Lab</h2>
                        <div class="separator"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0KROgbD0kfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--End Register Section-->
@endsection