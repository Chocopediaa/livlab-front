@extends('layouts.main')

@section('title')
    Living Lab | Detail Produk Baik
@endsection

@push('addon-style')
    <style>
        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }

        .demo{
            color: #fc7837;
            font-size: 16px;
        }

        .demo:hover{
            color: #ff874c;
        }

        .judul{
            color: #3e4494;
            font-size: 16px;
        }
    </style>
@endpush

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Detail Produk</h1>
            <div class="title">Inovasi Terbaik dari Kami</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('product') }}">Produk Baik</a></li>
                        <li>{{ $produk->nama }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Cases Single Section-->
    <section class="cases-single-section">
    	<div class="auto-container">
        	<div class="inner-container">
            
            	<!--Cases Gallery-->
                <div class="cases-gallery">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-8 col-sm-8 col-xs-12">
                            <div class="image">
                                <img src="{{ $produk->foto1 }}" alt="" />
                            </div>
                        </div>
                        <div class="image-column col-md-4 col-sm-4 col-xs-12">
                            <div class="image">
                                <img src="{{ $produk->foto2}}" alt="" />
                            </div>
                            <div class="image">
                                <img src="{{ $produk->foto3 }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Cases Gallery-->
                
                <!--Content Section-->
                <div class="content-section">
                    <div class="row clearfix">
                        <div class="info-column col-md-4 col-sm-12 col-xs-12">
                            <div class="info-inner">
                            	{{-- <ul>
                                	<li><span>Pembuat</span>Tahungoding</li>
                                    <li><span>Live demo</span><a href="https://lebaran.sumedangkab.go.id/">https://lebaran.sumedangkab.go.id/</a></li>
                                    <li><span>Category</span>Finance & Marketing</li>
                                    <li><span>Date</span>21 August, 2017</li>
                                    <li><span>Tags</span>Financial Services</li>
                                </ul> --}}
                                <table class="table table-borderless" style="width: 100%;">
                                    <tr>
                                        <td class="judul">Pembuat</td>
                                        <td>:</td>
                                        <td>{{ $produk->pembuat }}</td>
                                    </tr>
                                    <tr>
                                        <td class="judul">Demo</td>
                                        <td>:</td>
                                        <td><a href="{{ $produk->link_demo }}" class="demo" style="word-break:break-all;">{{ $produk->link_demo }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="judul">Kategori</td>
                                        <td>:</td>
                                        <td>{{ $produk->kategori_produk->singkatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="judul">Tanggal Dibuat</td>
                                        <td>:</td>
                                        <td>{{ \Carbon\Carbon::parse($produk->tanggal_dibuat)->format('d F Y') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="title-column col-md-8 col-sm-12 col-xs-12">
                            <h2>{{ $produk->nama }}</h2>
                            <div class="designation">{{ $produk->kategori_produk->name }}</div>
                            <div class="text">{!! $produk->desc !!}</div>
                            <a href="{{ $produk->link_demo }}" class="theme-btn launch-btn btn-style-one">Lihat Demo</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Cases Single Section-->
@endsection