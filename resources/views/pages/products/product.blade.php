@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Produk Baik
@endsection

@push('addon-style')
    <style>
        .nama-instansi{
            color: #000 !important;
            font-size: 1.8vh;
        }

        .card{
            border: 2px solid #ecf0f2;
            border-radius: 10px;
            height: 28vh;
            padding: 0vh 1vh;
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
            <h1>Produk Baik</h1>
            <div class="title">Apa yang kami buat</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Produk Baik</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
        	
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Semua</li>
                        <li class="filter" data-role="button" data-filter=".GTG">G2G</li>
                        <li class="filter" data-role="button" data-filter=".GTC">G2C</li>
                        <li class="filter" data-role="button" data-filter=".GTE">G2E</li>
                        <li class="filter" data-role="button" data-filter=".GTB">G2B</li>
					</ul>
                    
                </div>
                
                <div class="filter-list row clearfix">
					<!--Gallery Block Two-->
                    @forelse ($produk->data as $item)
                    <a href="{{ route('product.detail', $item->slug) }}">
                        <div class="gallery-block-two mix all {{ Str::replace('2', 'T', $item->kategori_produk->singkatan) }} col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ $item->thumbnail }}" alt="" style="height: 26vh !important;object-fit:cover; border-radius: 10px;" />
                                    <div class="overlay-box">
                                        <div class="lower-box">
                                            <div class="designation">{{ $item->kategori_produk->singkatan }}</div>
                                            <h3><a href="{{ route('product.detail', $item->slug) }}">{{ $item->nama }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @empty
                        <h4 class="text-center">Tidak ada produk</h4>
                    @endforelse
                    
                </div>
                <!--Styled Pagination-->
                <div class="styled-pagination text-center">
                    @if ($produk->current_page)
                        <ul class="clearfix">
                            @if ($produk->prev_page_url)
                                <li><a href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/produk-semua',url('produk_baik'), $produk->prev_page_url)}}"><span class="fa fa-angle-left"></span></a></li>
                            @endif
                            @foreach ($produk->links as $item)
                                @if ($item->url == null || !is_numeric($item->label))
                                    @continue
                                @endif
                                <li><a @if($item->label == $produk->current_page) class="active" href="#!" @else href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/produk-semua',url('produk_baik'), $item->url)}}" @endif >{{ $item->label }}</a></li>
                            @endforeach
                            @if ($produk->next_page_url)
                                <li><a href="{{Str::replace('https://app-livinglab.sumedangkab.go.id/api/web/produk-semua',url('produk_baik'), $produk->next_page_url)}}"><span class="fa fa-angle-right"></span></a></li>
                            @endif
                        </ul>
                    @endif
                </div>
                <!--End Styled Pagination-->
            </div>
            
        </div>
    </section>
@endsection

@push('prepend-script')
<script src="{{ asset('assets/js/mixitup.js') }}"></script>
@endpush