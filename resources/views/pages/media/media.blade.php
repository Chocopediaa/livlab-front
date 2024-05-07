@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Media
@endsection

@push('addon-style')
    <style>
        .nama-instansi{
            color: #000 !important;
            font-size: 2vh;
            font-weight: bold;
        }

        .btn-detail{
            color: white;
            background-color: #fc7837;
        }

        .btn-detail:hover{
            color: white;
            background-color: #fb8a52;
        }

        .card{
            border: 2px solid #ecf0f2;
            border-radius: 10px;
            height: 34vh;
            padding: 0vh 2vh;
            /* margin: 2vh 2vh; */
        }

        .nama-instansi:hover{
            color: #000 !important;
        }
    </style>
@endpush

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Media Living Lab</h1>
            <div class="title">Dokumen yang diperlukan</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Media</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Cases Text Section-->
    <section class="cases-text-section">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="row clearfix">
                	
                    <!--Gallery Block Three-->
                    @forelse ($media->data as $item)
                        <a href="{{ route('media.show', $item->slug) }}">
                            <div class="gallery-block-three col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        @if ($item->kategori_media->name == 'Berkas')
                                            <img src="{{ asset('assets/images/resource/File.png') }}" alt="" />
                                        @elseif ($item->kategori_media->name == 'Video')
                                            <img src="{{ asset('assets/images/resource/Video.png') }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="lower-box">
                                        <div class="designation">{{ $item->kategori_media->name }}</div>
                                        <h5 title="{{ $item->nama }}"><a href="{{ route('media.show', $item->slug) }}">{{ Str::limit($item->nama, 35) }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <h4 class="text-center">Tidak ada media</h4>
                    @endforelse
                    
                </div>
            </div>
            <!--Styled Pagination-->
            <div class="styled-pagination text-center">
                @if ($media->current_page)
                        <ul class="clearfix">
                            @if ($media->prev_page_url)
                                <li><a href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/media-semua',url('media_baik'), $media->prev_page_url)}}"><span class="fa fa-angle-left"></span></a></li>
                            @endif
                            @foreach ($media->links as $item)
                                @if ($item->url == null || !is_numeric($item->label))
                                    @continue
                                @endif
                                <li><a @if($item->label == $media->current_page) class="active" href="#!" @else href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/media-semua',url('media_baik'), $item->url)}}" @endif >{{ $item->label }}</a></li>
                            @endforeach
                            @if ($media->next_page_url)
                                <li><a href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/media-semua',url('media_baik'), $media->next_page_url)}}"><span class="fa fa-angle-right"></span></a></li>
                            @endif
                        </ul>
                    @endif
            </div>
            <!--End Styled Pagination-->
        </div>
    </section>
    <!--End Cases Text Section-->
@endsection