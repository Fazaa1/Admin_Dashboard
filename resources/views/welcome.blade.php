@extends('template.master')


@section('Content')
@section('title-page', 'Form')

    <link href="{{ asset('CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
   
      <!-- Fontfaces CSS-->
      <link href="{{ asset('CoolAdmin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
   
    <link href="{{asset('CoolAdmin/css/theme.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{asset('CoolAdmin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/bootstrap-progressbar/bootstr')}}ap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/wow/animate.css" rel="stylesh')}}eet" media="all">
    <link href="{{asset('CoolAdmin/vendor/css-hamburgers/hamburgers.min')}}.css" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/perfect-scrollbar/perfect-scr')}}ollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->

<div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="input-group mb-3">
              <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" value="{{ @old('name') }}" name="name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @error('name')
                <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ @old('email') }}" name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
              <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
              <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Retype password"  name="password_confirmation">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="number" class="form-control @error('age') is-invalid @enderror" placeholder="Age" value="{{ @old('age') }}" name="age">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-calendar"></span>
                </div>
              </div>
              @error('age')
                <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <textarea class="form-control @error('bio') is-invalid @enderror" rows="3" placeholder="Enter Bio" name="bio">{{ @old('bio') }}</textarea>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-info"></span>
                </div>
              </div>
              @error('bio')
                <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
               @enderror
            </div>
            <div class="input-group mb-3">
              <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" placeholder="Enter alamat" name="alamat">{{ @old('alamat') }}</textarea>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-globe"></span>
                </div>
              </div>
              @error('bio')
                <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
               @enderror
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{asset('CoolAdmin/login.html')}}" class="text-center">Saya Telah memiliki akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

<!-- Jquery JS-->
<script src="{{asset('CoolAdmin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('CoolAdmin/vendor/bootstrap-4.1/poppe')}}r.min.js"></script>
    <script src="{{asset('CoolAdmin/vendor/bootstrap-4.1/boots')}}trap.min.js"></script>
    <script src="{{asset('CoolAdmin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('CoolAdmin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/vendor/animsition/animsiti')}}on.min.js"></s>
    <script src="{{asset('CoolAdmin/vendor/bootstrap-progressb')}}ar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('CoolAdmin/vendor/counter-up/jquery.w')}}aypoints.min.js"></script>
    <script src="{{asset('CoolAdmin/vendor/counter-up/jquery.c')}}ounterup.min.js">
    </script>
    <script src="{{asset('CoolAdmin/vendor/circle-progress/cir')}}cle-progress.min.js"></script>
    <script src="{{asset('CoolAdmin/vendor/perfect-scrollbar/p')}}erfect-scrollbar.js"></script>
    <script src="{{asset('CoolAdmin/vendor/chartjs/Chart.bundl')}}e.min.js"></script>
    <script src="{{asset('CoolAdmin/vendor/select2/select2.min')}}.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('CoolAdmin/js/main.js')}}"></script>
<!-- /.register-box -->

@endsection

