@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Detial Agenda 
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
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Detail Media Living Lab</h1>
            <div class="title">Informasi Yang Kamu Butuhkan</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{  route('home') }}">Home</a></li>
                        <li><a href="{{ route('agenda.index') }}">Agenda</a></li>
                        <li>{{ $agenda->nama }}</li>
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
                	<!--Our Classic-->
                	<div class="blog-classic">
                    	
                        <!--News Block-->
                        <div class="news-block style-two">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="title">Info Agenda</div>
                                    @php
                                        $tanggal_mulai = \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d F Y');
                                        $tanggal_akhir = \Carbon\Carbon::parse($agenda->tanggal_akhir)->format('d F Y');
                                        $deskripsi = strip_tags($agenda->deskripsi);
                                    @endphp
                                    <ul>
                                        <li><b>PenyelTidakra :</b> {{ $agenda->creator }}</li>
                                        <li>{{ Str::upper($agenda->jenis) }}</li>
                                        <li>
                                            @if ($tanggal_mulai == $tanggal_akhir)
                                                {{ $tanggal_mulai }}
                                            @else
                                                {{ $tanggal_mulai . ' - ' . $tanggal_akhir }}
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="image">
                                        <img src="{{ url($agenda->poster) }}" alt="" />
                                    </div>
                                </div>
                                <div class="middle-box">
                                    <h3>{{ $agenda->nama }}</h3>
                                    <div class="text">
                                        {!! $agenda->deskripsi !!}
                                        {{-- <img src="{{ url($agenda->poster) }}" class="img-responsive" alt=""> --}}
                                    </div>
                                    <div class="tombol">
                                        <a href="{{ $agenda->link }}" target="_blank"><button class="btn btn-lg btn-pratinjau">Pratinjau</button></a>
                                        {{-- <button class="btn btn-lg btn-simpan">Simpan</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar with-border">
						
                        <!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div> --}}
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Jenis Agenda</h2>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Online</a></li>  
                                <li><a href="#">Offline</a></li>  
                            </ul>
                        </div>
                        
                        <!-- Popular Posts -->
                        {{-- <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Media Terbaru</h2></div>

                            @foreach ($media_baru as $item)
                                @if ($item->id == $media->id)
                                    @continue
                                @endif
                                <article class="post">
                                    <figure class="post-thumb" style="height: 80px;">
                                        @if ($item->kategori_media->name == 'Berkas')
                                            <img src="{{ asset('assets/images/resource/File.png') }}" alt="" style="height: 100%;object-fit:cover;">
                                        @elseif ($item->kategori_media->name == 'Video')
                                            <img src="{{ asset('assets/images/resource/Video.png') }}" alt="" style="height: 100%;object-fit:cover;">
                                        @endif
                                    </figure>
                                    <div class="text"><a href="{{ route('media.show', $item->slug) }}">{{ $item->nama }}</div>
                                    <div class="post-info">{{ \Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</div>
                                </article>
                            @endforeach
                            
						</div> --}}
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
@endsection