@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Daftar Instansi
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
            <h1>Daftar Instansi</h1>
            <div class="title">Bersama berinovasi</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Daftar Instansi</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Services Section-->
    <section class="services-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            	
                <!--Services Block-->
                @foreach ($instansi as $item)
                    <div class="services-block col-md-2 col-sm-4 col-xs-6 " >
                        <a href="{{ $item->link_web }}" target="_blank">
                            <div class="card">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ $item->logo }}" alt="" style="width: 10vh !important;height: 150px !important; object-fit cover;margin: auto;" />
                                    </div>
                                    <div class="lower-box text-center">
                                        <h3 style="line-height: unset !important;"><span class="nama-instansi">{{ Str::remove('Pemerintah', $item->nama_instansi) }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </section>
    <!--End Services Section-->
@endsection