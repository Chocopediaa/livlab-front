@extends('layouts.main')

@section('title')
    Digital Services Living Lab | Mentor Living Lab
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/header2.jpg') }});">
        <div class="auto-container">
            <h1>Mentor Living Lab</h1>
            <div class="title">Inovasi Tanpa Batas</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li>Mentor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	<div class="sec-title clearfix">
            	<div class="pull-left">
                	<h2>Daftar Mentor</h2>
                    <div class="separator"></div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach ($mentor as $item)
                    <div class="col-md-3" style="margin-bottom: 30px!important">
                        <div class="card">
                            <div class="card-body">
                                <img height="300" style="object-fit: cover;border-radius: 10px;" src="{{ $item->foto }}" alt="" />
                                <div class="lower-content-box text-center" style="margin: 10px auto">
                                    <h4>{{ $item->nama }}</h4>
                                    <div style="color: #fc7837">{{ $item->jabatan .' di '. $item->instansi }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
@endsection

@push('prepend-script')
    <script src="{{ asset('assets/js/slick.js') }}"></script>
@endpush