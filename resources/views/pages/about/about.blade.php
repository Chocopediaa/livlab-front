@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Tentang Living Lab
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Tentang Living Lab</h1>
            <div class="title">Inovasi Tanpa Batas</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li>Tentang</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--About Section-->
    <div class="about-section style-two">
    	<div class="auto-container">
        	
            <div class="row clearfix">
                <!--Carousel Column-->
                <div class="carousel-column col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <div class="slide">
                            <div class="image">
                                <img style="height: 550px !important;object-fit: cover;" src="{{ $profil->foto1 }}" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img style="height: 550px !important;object-fit: cover;" src="{{ $profil->foto2 }}" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img style="height: 550px !important;object-fit: cover;" src="{{ $profil->foto3 }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                    	<h3>{{ $profil->judul }}</h3>
                        <div class="text">{!! $profil->desc !!}</div>
                        <div class="blockquote-box">
                        	<div class="inner">
                            	<div class="quote-icon">
                                	<span class="icon flaticon-left-quote"></span>
                                </div>
                                <div class="quote-text">{{ $profil->kutipan }}</div>
                                <div class="author">- {{ $profil->pengutip }}</div>
                            </div>
                        </div>
                        <div class="signature"><img src="{{ $profil->ttd }}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About Section-->
    
    <!--Services Section Three-->
    <section class="services-section-three grey-bg">
    	<div class="auto-container">
        	<div class="row clearfix">
            	{{-- <!--Coin Column-->
                <div class="coin-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column" style="background-image:url({{ asset('assets/images/resource/services-4.jpg') }})">
                    	<div class="single-item-carousel owl-carousel owl-theme">
                        
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('assets/images/resource/coin.png') }}" alt="" />
                                </div>
                                <div class="text"><span>2020</span> Rank #2 Best Inovator of The Year</div>
                            </div>
                            
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('assets/images/resource/coin.png') }}" alt="" />
                                </div>
                                <div class="text"><span>2021</span> The Best Inovation Thinker</div>
                            </div>
                            
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('assets/images/resource/coin.png') }}" alt="" />
                                </div>
                                <div class="text"><span>2022</span> The Best Goal of Point Investment</div>
                            </div>
                            
                        </div>
                    </div>
                </div> --}}
                <!--Services Column-->
                <div class="services-column col-md-12 col-sm-12 col-xs-12">
                	<div class="row clearfix">
                    	
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                        	<h2>Misi</h2>
                            <div class="separator"></div>
                            <div class="text">{{ $profil->misi }}</div>
                        </div>
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                        	<h2>Visi</h2>
                            <div class="separator"></div>
                            <div class="text">{{ $profil->visi }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section Three-->
    
    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	<div class="sec-title clearfix">
            	<div class="pull-left">
                	<h2>Daftar Mentor</h2>
                    <div class="title">Para Inovator Living Lab</div>
                    <div class="separator"></div>
                </div>
                <div class="pull-right">
                	<a href="{{url('mentor')}}" class="theme-btn btn-style-four">Semua Mentor</a>
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
            	
                <!--Team Block-->
                @foreach ($mentor as $item)
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img width="100" height="300" style="object-fit: cover;border-radius: 10px;" src="{{ $item->foto }}" alt="" />
                            </div>
                            <div class="lower-content-box">
                                <h3>{{ $item->nama }}</h3>
                                <div class="designation">{{ $item->jabatan .' di '. $item->instansi }}</div>
                                {{-- <div class="lower-box">
                                    <div class="email">Richard@Stockton.com</div>
                                </div> --}}
                            </div>
                            {{-- <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="upper-content">
                                        <h3><a href="team.html">Richard Antony</a></h3>
                                        <div class="designation">CEO / Founder</div>
                                        <div class="text">Who loves or pursues desire obtain pain of itself, because it  because occasionally occur which toil and procure.</div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="emailed">Cuthbert@Stockton.com</div>
                                        <ul class="social-icon-one">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!--End Team Section-->
    
    <!--History Section-->
    {{-- <section class="history-section grey-bg">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>Sejarah Living Lab</h2>
                <div class="title">Perjalanan Kami Sejak 2022</div>
                <div class="separator"></div>
            </div>
            <div class="outer-container">
            	<div class="left-line"></div>
                <div class="single-verticle-carousel">
                	<div class="slide">
                        <div class="row clearfix">
                            <!--History Block-->
                            <div class="history-block col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('assets/images/resource/history.jpg') }}" alt="" /></a>
                                        <div class="year">Aug 1984 <span class="dott"></span></div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Got Best Consultant Award</a></h3>
                                        <div class="text">There anyone who loves or pursues or desires to  pain itself, because pain, but because occasionally occur who  pursues or desires to obtain pain of itself.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--History Block-->
                            <div class="history-block-two col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <h3><a href="#">Got Best Consultant Award</a></h3>
                                        <div class="text">There anyone who loves or pursues or desires to  pain itself, because pain, but because occasionally occur who  pursues or desires to obtain pain of itself.</div>
                                    </div>
                                    <div class="image">
                                    	<div class="year">Jun 1984 <span class="dott"></span></div>
                                        <a href="#"><img src="{{ asset('assets/images/resource/history-1.jpg') }}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slide">
                        <div class="row clearfix">
                            <!--History Block-->
                            <div class="history-block col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('assets/images/resource/history.jpg') }}" alt="" /></a>
                                        <div class="year">Aug 1984 <span class="dott"></span></div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Got Best Consultant Award</a></h3>
                                        <div class="text">There anyone who loves or pursues or desires to  pain itself, because pain, but because occasionally occur who  pursues or desires to obtain pain of itself.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--History Block-->
                            <div class="history-block-two col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <h3><a href="#">Got Best Consultant Award</a></h3>
                                        <div class="text">There anyone who loves or pursues or desires to  pain itself, because pain, but because occasionally occur who  pursues or desires to obtain pain of itself.</div>
                                    </div>
                                    <div class="image">
                                    	<div class="year">Jun 1984 <span class="dott"></span></div>
                                        <a href="#"><img src="{{ asset('assets/images/resource/history-1.jpg') }}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="right-line"></div>
            </div>
        </div>
    </section> --}}
    <!--End History Section-->
    
    <!--Industry Section-->
    {{-- <section class="industry-section">
    	<div class="auto-container">
        	<h2>Fitur Living Lab</h2>
            <div class="title">Siap membantu inovator</div>
            <div class="separator"></div>
            <div class="row clearfix">
            	
                <!--Industry Block-->
                <div class="industry-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-donation"></span>
                        </div>
                        <div class="block-title">Terpercaya</div>
                        <h3><a href="#">Tidak Dipungut Biaya</a></h3>
                        <div class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, voluptatum!</div>
                    </div>
                </div>
                
                <!--Industry Block-->
                <div class="industry-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-money-bag"></span>
                        </div>
                        <div class="block-title">Fundamental</div>
                        <h3><a href="#">Banyak Keuntungan</a></h3>
                        <div class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid hic?</div>
                    </div>
                </div>
                
                <!--Industry Block-->
                <div class="industry-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-medical-kit-bag"></span>
                        </div>
                        <div class="block-title">Bantuan</div>
                        <h3><a href="#">Mentor Terbaik</a></h3>
                        <div class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ab!</div>
                    </div>
                </div>
                
                <!--Industry Block-->
                <div class="industry-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-school-bus"></span>
                        </div>
                        <div class="block-title">Transportasi</div>
                        <h3><a href="#">Mobilitas</a></h3>
                        <div class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, autem?</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}
    <!--End Industry Section-->
    
    <!--Certificate Section-->
    {{-- <section class="certificate-section grey-bg">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>Our Certificates</h2>
                <div class="title">What We Achived</div>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
            	<!--Cerficate Block-->
                <div class="cerficate-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('assets/images/resource/certificate-1.png') }}" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3>International Organization for Standardization</h3>
                            <div class="text"> How all this mistaken idea denouncing pleasure and praising pain was born & will complete account of the system.</div>
                        </div>
                    </div>
                </div>
                
                <!--Cerficate Block-->
                <div class="cerficate-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('assets/images/resource/certificate-2.png') }}" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3>National Small <br> Inustries Corporation</h3>
                            <div class="text">Great explorer the truth master-builder human happiness one rejects, dislikes, seds avoids pleasure itselfpleasure.</div>
                        </div>
                    </div>
                </div>
                
                <!--Cerficate Block-->
                <div class="cerficate-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('assets/images/resource/certificate-3.png') }}" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3>System Applications <br> & Products</h3>
                            <div class="text">Pursues or desires to obtain pain of itself, it but because occasionaly circumstances  procure him some great.</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}
    <!--End Certificate Section-->
    
    <!--Clients Section-->
    <section class="clients-section style-two">
    	{{-- <div class="auto-container">
        	<h2>We are trusted by more than <span class="theme_color">10,000</span> clients</h2>
            <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
            <!--Sponsors Box-->
            <div class="sponsors-box style-two">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/9.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/10.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/11.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/12.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/13.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/14.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/9.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/10.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/11.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/12.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/13.png') }}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/14.png') }}" alt=""></a></figure></li>
                    </ul>
                </div>
            </div>
            
        </div> --}}
        <div class="auto-container">
            <h2>Digital Services Living lab dibangun dan dikembangkan oleh <span class="theme_color">{{ $total_instansi }}</span> Kota/Kabupaten & Instansi</h2>
            <div class="text">Mari bergabung menjadi bagian untuk mewujudkan Indonesia World Class Goverment</div>
            <!--Sponsors Box-->
            <div class="sponsors-box style-two  ">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        @foreach ($instansi as $item)
                            <li class="slide-item"><figure class="image-box"><a href="{{ $item->link_web }}"><img src="{{ $item->logo }}" alt="" style="width: 10vh !important;height: 100px !important; object:fit cover;"></a></figure></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
@endsection

@push('prepend-script')
    <script src="{{ asset('assets/js/slick.js') }}"></script>
@endpush