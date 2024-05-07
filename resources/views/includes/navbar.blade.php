<!--Header-Upper-->
<div class="header-upper">
    <div class="auto-container clearfix">
            
        <div class="pull-left logo-outer">
            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/LOGO-BARU-PUTIH.png') }}" alt="" title="" style="width: 20vh !important;"></a></div>
        </div>
        
        <div class="pull-right upper-right clearfix">
            
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->routeIs('home*') ? 'current' : '' }}"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="{{ request()->routeIs('about*') ? 'current' : '' }}"><a href="{{ route('about') }}">Tentang</a></li>
                            <li class="{{ request()->routeIs('partner*') ? 'current' : '' }}"><a href="{{ route('partner') }}">Daftar Instansi</a></li>
                            <li class="{{ request()->routeIs('product*') ? 'current' : '' }}"><a href="{{ route('product') }}">Produk Baik</a></li>
                            <li class="{{ request()->routeIs('media*') ? 'current' : '' }}"><a href="{{ route('media.index') }}">Media</a></li>
                            <li class="{{ request()->routeIs('agenda*') ? 'current' : '' }}"><a href="{{ route('agenda.index') }}">Agenda</a></li>
                            <li class="dropdown {{ request()->routeIs('register') ? 'current' : '' }}"><a href="#">Akun</a>
                                <ul>
                                    <li><a href="https://app-livinglab.sumedangkab.go.id/">Login Akun</a></li>
                                    <li><a href="https://app-livinglab.sumedangkab.go.id/register/create">Registrasi Akun</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <!-- Main Menu End-->
                {{-- <div class="outer-box">
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div> --}}
            </div>
            
        </div>
            
    </div>
</div>
<!--End Header Upper-->