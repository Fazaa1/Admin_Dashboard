
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> CoolAdmin |  Login Page </title>

  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Admin </title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('CoolAdmin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('CoolAdmin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/bootstrap-progressbar/bootstr')}}ap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/wow/animate.css" rel="stylesh')}}eet" media="all">
    <link href="{{asset('CoolAdmin/vendor/css-hamburgers/hamburgers.min')}}.css" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/vendor/perfect-scrollbar/perfect-scr')}}ollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('CoolAdmin/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
      <strong>{{ $message }}</strong>
    </div>
  @endif
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @error('notif')
        <p class="login-box-msg error invalid-feedback" style="display: inline;">{{ $message }}</p>
      @enderror
      <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ @old('email') }}">
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
          <input type="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="{{ route('register.create') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
