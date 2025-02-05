<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sansun's Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/pratama_icon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="preloader">
        <div class="loader">
           
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ url('/dashboard') }}">
                    <b class="logo-abbr"><img src="{{ asset('icons/pratama_icon_w.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('icons/pratama_text.png') }}" width="110" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('icons/sandy.png') }}" width="110" alt="">
                    </span>
                </a>
            </div>
        </div>
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    {{-- <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control search_page_input" placeholder="Cari" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control search_page_input" placeholder="Search">
                            </form>
                        </div>
                    </div> --}}
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <img src="/pictures/sandi2.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li><a href="{{ url('/logout') }}"><i class="icon-key"></i> <span>Keluar</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar ">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="{{ url('/dashboard') }}" aria-expanded="false">
                            <i class="fa fa-tachometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="nav-label">Kelola Data</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-th-large menu-icon"></i><span class="nav-text">Kelola Data</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/kelola_user') }}">Kelola user</a></li>
                            <li><a href="{{ url('/kelola_paket') }}">Kelola Paket</a></li>
                            
                        </ul>
                    </li>
                  
                    
                    <li class="nav-label">Layanan Laundry</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-tasks menu-icon"></i> <span class="nav-text">Layanan Laundry</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="{{ url('/riwayat_tranksaksi') }}">Riwayat Tranksaksi</a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-label">Laporan</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-file-text menu-icon"></i> <span class="nav-text">Laporan</span>
                        </a>
                        <ul aria-expanded="false">
                        
                            <li><a href="{{ url('/laporan') }}">Laporan Transaksi</a></li>
                        </ul>
                    </li>
                    
                  
                </ul>
            </div>
        </div>
        <div class="content-body isi-konten">
            @yield('konten')
        </div>
        <div class="content-body search-konten" hidden="">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center judul_pencarian"></h4>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="list-group isi_cari_halaman">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">Sandy</a> 2023</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('plugins/datamaps/datamaps.world.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
</body>

</html>