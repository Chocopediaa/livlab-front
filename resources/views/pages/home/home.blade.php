@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Beranda
@endsection

@section('content')
    <!--Main Slider-->
    <section class="main-slider">
                    
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>  
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('assets/images/main-slider/header2.jpg') }}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/main-slider/header2.jpg') }}"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-60','-100','-100','-85']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;"
                    >
                        <h2>{{ $header->heading }}</h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['80','35','25','10']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                        <div class="text">{{ $header->sub_heading }}</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['170','130','130','110']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                        <div class="btns-box">
                            <a href="{{ $header->link }}" class="theme-btn btn-style-one">{{ $header->label_button }}</a> <a href="{{ route('about') }}" class="theme-btn btn-style-two">Selengkapnya</a>
                        </div>
                    </div>
                    
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Layanan</h2>
                <div class="title">Apa Yang Kami Dapat Berikan</div>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-telemarketer"></span>
                        </div>
                        <h3><a href="{{ route('product') }}">Learning From the Past</a></h3>
                       
                        <div class="text">Guru yang terbaik adalah pengalaman di masalalu.</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-1"></span>
                        </div>
                        <h3><a href="javascript:void(0)">Understanding the Present</a></h3>
                       
                        <div class="text">Karena masa depan adalah milik mereka yang memahami hari ini</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-building-1"></span>
                        </div>
                        <h3><a href="{{ route('media.index') }}">Preparing For the Future</a></h3>
                
                        <div class="text">Bersama kita lebih siap menghadapi perubahan masa depan</div>
                    </div>
                </div>
                
            </div>
            
            {{-- <div class="text-center">
                <a href="services.html" class="theme-btn btn-style-three">View All Services</a>
            </div> --}}
            
        </div>
    </section>
    <!--End Services Section-->

    <!--Services Section Two-->
    {{-- <section class="services-section-two grey-bg">
        <div class="auto-container">
            <div class="clearfix">
            
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-telemarketer"></span>
                        </div>
                        <h3><a href="services-single.html">We are Professional</a></h3>
                        <div class="designation">Consultant</div>
                        <div class="text">How all this mistaken idea of denouncing pleasure & praising pain was born.</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-1"></span>
                        </div>
                        <h3><a href="services-single.html">Licensed & Certified</a></h3>
                        <div class="designation">Company</div>
                        <div class="text">The great explorer of the truth, the master builder of all human happiness.</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-building-1"></span>
                        </div>
                        <h3><a href="services-single.html">Number 1 Company</a></h3>
                        <div class="designation">In Region</div>
                        <div class="text"> Again is there anyone who loves or pursues or desires to obtain pain of itself.</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}
    <!--End Services Section Two-->

    <!--Clients Section-->
    <section class="clients-section" style="background-image:url({{ asset('assets/images/background/1.jpg') }})">
        <div class="auto-container">
            <h2>Digital Services Living lab dibangun dan dikembangkan oleh <span class="theme_color">{{ $total_instansi }}</span> Kota/Kabupaten & Instansi</h2>
            <div class="text">Mari bergabung menjadi bagian untuk mewujudkan Indonesia World Class Goverment</div>
            <!--Sponsors Box-->
            <div class="sponsors-box">
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

    <!--About Section-->
    <div class="about-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Tentang Digital Services Living Lab</h2>
                <div class="title">Inovasi Tanpa Batas</div>
                <div class="separator"></div>
            </div>
            <div class="inner-container clearfix">
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
                        <div class="text">
                           {!! $profil->desc !!}
                        </div>
                        <div class="blockquote-box">
                            <div class="inner">
                                <div class="quote-icon">
                                    <span class="icon flaticon-left-quote"></span>
                                </div>
                                <div class="quote-text">{{ $profil->kutipan }}</div>
                                <div class="author">- {{ $profil->pengutip }}</div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="theme-btn btn-style-three">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About Section-->

    <!--Project Section-->
    <section class="project-section">
        
        <!--Porfolio Tabs-->
        <div class="project-tab">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title clearfix">
                    <div class="pull-left">
                        <h2>Produk Baik</h2>
                        <div class="title">Daftar Produk Baik yang telah dibuat dari setiap Kota/Kabupaten dan Provinsi</div>
                        <div class="separator"></div>
                    </div>
                    <div class="tab-btns-box pull-right">
                        <!--Tabs Header-->
                        <div class="tabs-header">
                            <ul class="product-tab-btns clearfix">
                                <li class="p-tab-btn active-btn" data-tab="#p-tab-1">Semua</li>
                                <li class="p-tab-btn" data-tab="#p-tab-2">G2G </li>
                                <li class="p-tab-btn" data-tab="#p-tab-3">G2C </li>
                                <li class="p-tab-btn" data-tab="#p-tab-4">G2E</li>
                                <li class="p-tab-btn" data-tab="#p-tab-5">G2B</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Tabs Content-->  
            <div class="p-tabs-content">
                <!--Portfolio Tab / Active Tab-->
                <div class="p-tab active-tab" id="p-tab-1">
                    <div class="project-carousel owl-theme owl-carousel">
                        
                        @foreach ($produk as $item)
                            <div class="gallery-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->thumbnail }}" alt="" style="height: 20vh !important;object-fit:cover;border-radius: 10px;" />
                                        <div class="overlay-box">
                                            <div class="lower-box">
                                                <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                                <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-2">
                    <div class="project-carousel owl-theme owl-carousel">
                        
                        @foreach ($produk_gtg as $item)
                            <div class="gallery-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->thumbnail }}" alt="" style="height: 20vh !important;object-fit:cover;" />
                                        <div class="overlay-box">
                                            <div class="lower-box">
                                                <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                                <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-3">
                    <div class="project-carousel owl-theme owl-carousel">
                        
                        @foreach ($produk_gtc as $item)
                            <div class="gallery-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->thumbnail }}" alt="" style="height: 20vh !important;object-fit:cover;" />
                                        <div class="overlay-box">
                                            <div class="lower-box">
                                                <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                                <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-4">
                    <div class="project-carousel owl-theme owl-carousel">
                        
                        @foreach ($produk_gte as $item)
                            <div class="gallery-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->thumbnail }}" alt="" style="height: 20vh !important;object-fit:cover;" />
                                        <div class="overlay-box">
                                            <div class="lower-box">
                                                <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                                <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-5">
                    <div class="project-carousel owl-theme owl-carousel">
                        
                        @foreach ($produk_gtb as $item)
                            <div class="gallery-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->thumbnail }}" alt="" style="height: 20vh !important;object-fit:cover;" />
                                        <div class="overlay-box">
                                            <div class="lower-box">
                                                <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                                <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
    <!--End Project Section-->

    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url({{ asset('assets/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="sec-title light centered">
                <h2>Testimoni Mitra</h2>
                <div class="title">Apa pendapat mereka tentang kita?</div>
                <div class="separator"></div>
            </div>
            <div class="outer-container two-item-carousel owl-carousel owl-theme">
                
                <!--Testimonial Block-->
                @foreach ($testimoni as $item)
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="{{ $item->gambar }}" alt="" />
                            </div>
                            <h3>{{ $item->nama }}</h3>
                            <div class="designation">{{ $item->jabatan }}</div>
                            <div class="text">{!! $item->isi !!}</div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

    <!--News Section-->
    {{-- <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Artikel Living Lab</h2>
                        <div class="title">Saling berbagi pengetahuan</div>
                        <div class="separator"></div>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('artikel.index') }}" class="theme-btn btn-style-four">Artikel Lainnya</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="title">Info Artikel</div>
                            <ul>
                                <li>Pemda Sumedang</li>
                                <li>Produk Baik</li>
                            </ul>
                        </div>
                        <div class="middle-box">
                            <h3><a href="javascript:void(0)">Sumedang Mengeluarkan Sistem Sumedang LRT Untuk....</a></h3>
                            <div class="text">Sumedang LRT merupakan Lorem ipsum, dolor sit amet consectetur adipisicing....</div>
                        </div>
                        <div class="lower-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/resource/artikel-1.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <a class="read-more" href="javascript:void(0)"><span class="icon flaticon-arrow-pointing-to-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="title">Info Artikel</div>
                            <ul>
                                <li>Pemda Sumedang</li>
                                <li>Produk Baik</li>
                            </ul>
                        </div>
                        <div class="middle-box">
                            <h3><a href="javascript:void(0)">Tim Digital Service Living Lab memberikan arahan kepada.....</a></h3>
                            <div class="text">Baru saja. merupakan Lorem ipsum, dolor sit amet consectetur adipisicing....</div>
                        </div>
                        <div class="lower-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/resource/artikel-2.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <a class="read-more" href="javascript:void(0)"><span class="icon flaticon-arrow-pointing-to-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="title">Info Artikel</div>
                            <ul>
                                <li>Living Lab</li>
                                <li>Acara</li>
                            </ul>
                        </div>
                        <div class="middle-box">
                            <h3><a href="javascript:void(0)">Festival Inovator 2022 Di Laksanakan....</a></h3>
                            <div class="text">Halo para invovator muda Lorem ipsum dolor sit amet consectetur adipisicing elit....</div>
                        </div>
                        <div class="lower-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/resource/anggrek-3.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <a class="read-more" href="javascript:void(0)"><span class="icon flaticon-arrow-pointing-to-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}
    <!--End News Section-->

    <!--Fluid Section One-->
    {{-- <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <div class="left-box" style="background-image:url({{ asset('assets/images/resource/image-1.jpg') }});"></div>
            <div class="right-box" style="background-image:url({{ asset('assets/images/resource/image-2.png') }})"></div>
            <!--Image Column-->
            <div class="image-column">
                <div class="inner-column clearfix">
                    <div class="content">
                        <div class="row clearfix">
                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                <h2><span class="since">Since 2000,</span> we provide best service for our <span class="theme_color">valuable clients.</span></h2>
                            </div>
                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                <div class="text">Actual teachings of the great sed explorer of the truth, master who builder of human hapiness one but because those who do know how pursue pleasure.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <h2>Make an Appointment</h2>
                    <div class="title">For Any Enquiry</div>
                    <div class="separator"></div>
                    
                    <!-- Appointment Form -->
                    <div class="apointment-form">
                        <!--Call Back Form-->
                        <form method="post" action="contact.html">
                            <div class="row clearfix">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <select class="custom-select-box">
                                        <option>Turnaround Consulting</option>
                                        <option>Consulting One</option>
                                        <option>Consulting Two</option>
                                        <option>Consulting Three</option>
                                        <option>Consulting Four</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>
            
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Here</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Fluid Section One-->

    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Accordian Column-->
                <div class="accordian-column col-md-6 col-sm-12 col-xs-12">
                    
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                        
                        <!--Block-->
                        @foreach ($faq as $item)
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-down"></span></div>{{ $item->pertanyaan }}</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">{!! $item->jawaban !!}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                    {{-- <a href="#" class="answer">Pertanyaan lainnya <span class="fa fa-caret-right"></span></a> --}}
                </div>
                <!--Counter Column-->
                <div class="counter-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">Living Lab Statistik Menampilkan Data Yang Lengkap.</div>
                        
                        <!--Fact Counter-->
                        <div class="fact-counter">
                            <div class="row clearfix">
                                
                                <!--Column-->
                                <a href="{{url('produk-baik')}}">
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <span class="icon flaticon-idea"></span>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="1500" data-stop="{{ $total_produk }}"></span>
                                            </div>
                                            <h4 class="counter-title">Total Produk Baik</h4>
                                        </div>
                                    </div>
                                </a>
                        
                                <!--Column-->
                                <a href="{{url('mentor')}}">
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <span class="icon flaticon-telemarketer"></span>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="1500" data-stop="{{ $total_mentor }}">0</span>
                                            </div>
                                            <h4 class="counter-title">Mentor Penilian</h4>
                                        </div>
                                    </div>
                                </a>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <span class="icon flaticon-smiling-emoticon-square-face"></span>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2500" data-stop="{{ $total_testimoni }}">0</span>
                                        </div>
                                        <h4 class="counter-title">Testimoni Baik</h4>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <a href="{{url('daftar-instansi')}}">
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <span class="icon flaticon-medal"></span>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="4000" data-stop="{{ $total_instansi }}">0</span>
                                            </div>
                                            <h4 class="counter-title">Instansi Terdaftar</h4>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Default Section-->
@endsection