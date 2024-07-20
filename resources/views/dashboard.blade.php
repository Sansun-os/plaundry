@extends('template')
@section('css')
@section('konten')

 <div class="row mt-4 mx-3">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">User</h3>
                    <div class="d-inline-block">
                          <h2 class="text-white">{{ $user }}</h2>
                        <p class="text-white mb-0">Jumlah User</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-user"></i></span>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Paket</h3>
                    <div class="d-inline-block">
                         <h2 class="text-white">{{ $paket }}</h2>
                        <p class="text-white mb-0">Jumlah Paket</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-9">
                <div class="card-body">
                    <h3 class="card-title text-white">Tranksaksi</h3>
                    <div class="d-inline-block">
                       <h2 class="text-white">{{ $tranksaksi }}</h2>
                        <p class="text-white mb-0">Jumlah Tranksaksi</p>
                        
                    </div>
                    
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-8">
                <div class="card-body">
                    <h3 class="card-title text-white">Laporan</h3>
                    <div class="d-inline-block">
                         <h2 class="text-white">{{ $tranksaksi }}</h2>
                        <p class="text-white mb-0">Jumlah Laporan</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-building-o"></i></span>
                </div>
            </div>
        </div>
    </div>

@endsection


