{{-- 
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sansun's Laundry</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/pratama_icon.png') }}">
    <link href="{{ asset('plugins/sweetalert/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
</head>
<body class="h-100">
  <style> body{
    background-image: url('/pictures/login.jpg');

    background-size: cover;
  
  }
  </style>
        
    <div id="preloader">
     
       
        <div class="loader">
        
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
   <div class="login-form-bg h-100" >
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form" ">
                            <div class="card-body pt-5">
                                <div class="text-center">
                                    <h4>Selamat Datang</h4>
                                    @if($message = Session::get('gagal_login'))
                                    <div class="alert alert-danger alert-dismissible fade show" style="margin-top: 15px; margin-bottom: -20px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button> <strong>Peringatan!</strong> {{ $message }}</div>
                                    @endif
                                </div>
                                <form method="POST" action="{{ route('postlogin') }}" class="mt-5 mb-5 login-input" name="form_login">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control 
                                        " placeholder="Username" value="{{ old('telepon') }}">
                                         @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
  
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( document ).on( 'focus', ':input', function(){
                $( this ).attr( 'autocomplete', 'off' );
            });
        });
        
        $(function() {
          $("form[name='form_register']").validate({
            rules: {
              nama: "required",
              username: {
                required: true,
                minlength: 3
              },
              password: {
                required: true,
                minlength: 5
              }
            },
            messages: {
              nama: "<span style='color: red;'>Nama tidak boleh kosong</span>",
              username: "<span style='color: red;'>Username tidak boleh kosong</span>",
              password: "<span style='color: red;'>Password tidak boleh kosong</span>"
            },
            submitHandler: function(form) {
              form.submit();
            }
          });
        });

        $(function() {
          $("form[name='form_login']").validate({
            rules: {
              username: {
                required: true,
                minlength: 3
              },
              password: {
                required: true,
                minlength: 5
              }
            },
            messages: {
              username: "<span style='color: red;'>Username tidak boleh kosong</span>",
              password: "<span style='color: red;'>Password tidak boleh kosong</span>"
            },
            submitHandler: function(form) {
              form.submit();
            }
          });
        });

        $('.avatar-input').change(function() {
          $(this).next('label').text($(this).val());
        });

        @if ($message = Session::get('tersimpan'))
        swal(
            "Berhasil!",
            "{{ $message }}",
            "success"
        )
        @endif
    </script>
</body>
</html> --}}