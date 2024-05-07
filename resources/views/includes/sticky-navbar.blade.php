<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="{{ route('home') }}" class="img-responsive"><img src="{{ asset('assets/images/LOGO-BARU.png') }}" alt="" title="" style="width: 40% !important;"></a>
        </div>
        
        <!--Right Col-->
        <div class="right-col pull-right">
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
            </nav><!-- Main Menu End-->
        </div>
        
    </div>
</div>