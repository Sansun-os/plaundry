@extends('template')
@section('css')

@section('konten')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('/kelola_pengguna') }}">Kelola Pengguna</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal fade" id="lihatModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
     @if ($message = Session::get('success'))
           <div class="alert alert-secondary" role="alert">
            {{ $message }}
            </div> 
        @endif
        @if ($message = Session::get('danger'))
           <div class="alert alert-danger" role="alert">
            {{ $message }}
            </div> 
        @endif
            
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
           
         <div class=" mb-4 position-absolute top-0 end-0 mt-2" style="" >
    <form action="/kelola_user" method="GET">
    <i class="mdi mdi-magnify h-25"></i><input type="search" name="search" id="inputPassword6" class="rounded border border-0 w-75 " style="height: 30px; "  aria-describedby="passwordHelpInline">
    </form>
  </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4 class="card-title">Daftar User</h4>
                    	<form action="{{ url('/tambahuser') }}">
                    <button type="submit" class="btn font-weight-bold btn-sm btn-primary mb-2">
  Tambah User<span class="btn-icon-right"><i class="fa fa-plus"></i></span>
</button>
</form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered border border-danger zero-configuration">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($datauser as $index => $sandy)
                                <tr>
                                    <th class="align-middle text-center">{{ $index + $datauser->firstItem() }}</th>
                                    <th class=" text-center">{{ $sandy->nama }}</th>
                                    <td class="text-center">{{ $sandy->alamat }}</td>
                                    <td class="text-center">{{ $sandy->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $sandy->telepon }}</td>
                                    <td style="text-align: center;">
                                    	<div class="dropdown custom-dropdown">
                                             <a href="/tampildata/{{ $sandy->id }}"> <i class="fa fa-pencil-square-o"></i></a>
                                            
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <form action="{{ url('delete/'.$sandy->id) }}" method="get" class="d-inline" onsubmit="return confirm('yakin mau dihapus?')">
                                        @csrf
                                    <button >
                                        <i class="fa fa-trash c-primary" style="font-size: 16px;"></i>
                                    </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         {{ $datauser->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAH USER</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="border-radius: 10px">
         <form action="/insertdata" method="POST" >
            @csrf
        <div class="form-group" style="border-radius: 10px">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control input-group-sm" style="border-radius: 8px" >
            @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
         <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" style="border-radius: 8px" >
             @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
         <div class="form-group">
            <label for="">Jenis Kelamin</label>
    <select class="form-select " aria-label=".form-select-sm example" name="jenis_kelamin">
  <option selected>Jenis Kelamin</option>
  <option value="laki_laki">Laki Laki</option>
  <option value="perempuan">Perempuan</option>
 
</select>

</select>
        </div>
         <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telepon" class="form-control" style="border-radius: 8px" >
             @error('telepon')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
       
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>

  
</div>
@endsection
