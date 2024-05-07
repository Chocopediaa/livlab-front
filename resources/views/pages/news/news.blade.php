@extends('layouts.main')

@section('title')
    Living Lab | Artikel
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Artikel Living Lab</h1>
            <div class="title">Informasi Terbaru</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                	<!--Our Blog-->
                	<div class="blog-grid">
                    	<div class="row clearfix">
						
                        	<!--News Block-->
                            <div class="news-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="title">Info Artikel</div>
                                        <ul>
                                            <li>Pemda Sumedang</li>
                                            <li>Produk Baik</li>
                                        </ul>
                                    </div>
                                    <div class="middle-box">
                                        <h3><a href="blog-single.html">Sumedang Membuat Sistem Lebaran Realtime Untuk Mempermudah....</a></h3>
                                        <div class="text">Mudik adalah kegiatan Lorem ipsum dolor sit amet consectetur adipisicing elit....</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/news-4.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--News Block-->
                            <div class="news-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="title">Info Artikel</div>
                                        <ul>
                                            <li>Pemda Sumedang</li>
                                            <li>Produk Baik</li>
                                        </ul>
                                    </div>
                                    <div class="middle-box">
                                        <h3><a href="blog-single.html">Sumedang Membuat Sistem Lebaran Realtime Untuk Mempermudah....</a></h3>
                                        <div class="text">Mudik adalah kegiatan Lorem ipsum dolor sit amet consectetur adipisicing elit....</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/news-4.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--News Block-->
                            <div class="news-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="title">Info Artikel</div>
                                        <ul>
                                            <li>Pemda Sumedang</li>
                                            <li>Produk Baik</li>
                                        </ul>
                                    </div>
                                    <div class="middle-box">
                                        <h3><a href="blog-single.html">Sumedang Membuat Sistem Lebaran Realtime Untuk Mempermudah....</a></h3>
                                        <div class="text">Mudik adalah kegiatan Lorem ipsum dolor sit amet consectetur adipisicing elit....</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/news-4.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--News Block-->
                            <div class="news-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="title">Info Artikel</div>
                                        <ul>
                                            <li>Pemda Sumedang</li>
                                            <li>Produk Baik</li>
                                        </ul>
                                    </div>
                                    <div class="middle-box">
                                        <h3><a href="blog-single.html">Sumedang Membuat Sistem Lebaran Realtime Untuk Mempermudah....</a></h3>
                                        <div class="text">Mudik adalah kegiatan Lorem ipsum dolor sit amet consectetur adipisicing elit....</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/news-4.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                        <!--Styled Pagination-->
                        <div class="styled-pagination text-center">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fa fa-caret-left"></span></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><span class="fa fa-caret-right"></span></a></li>
                            </ul>
                        </div>
                        <!--End Styled Pagination-->
                        
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar with-border">
						
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Cari Artikel..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Kategori</h2>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Business Growth <span>(6)</span></a></li>
                                <li><a href="#">Finance & Accounting <span>(2)</span></a></li>
                                <li><a href="#">Management <span>(8)</span></a></li>
                                <li><a href="#">Consulting & Idea <span>(5)</span></a></li>
                                <li><a href="#">Organization <span>(3)</span></a></li>
                            </ul>
                        </div>
                        
                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Popular Posts</h2></div>

                            <article class="post">
                            	<figure class="post-thumb"><img src="{{ asset('assets/images/resource/post-thumb-1.jpg') }}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                <div class="text"><a href="blog-single.html">6 ways to keep in control your debtors</a></div>
                                <div class="post-info">April 18, 2017</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><img src="{{ asset('assets/images/resource/post-thumb-2.jpg') }}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                <div class="text"><a href="blog-single.html">What a finance director could add business</a></div>
                                <div class="post-info">February 14, 2017</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><img src="{{ asset('assets/images/resource/post-thumb-3.jpg') }}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                <div class="text"><a href="blog-single.html">Tips for sucess in 2016: Ways to grow your business</a></div>
                                <div class="post-info">January 16, 2017</div>
                            </article>
                            
						</div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
@endsection