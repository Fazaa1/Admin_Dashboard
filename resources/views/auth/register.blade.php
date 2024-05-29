@extends('template.master')


@section('Content')
@section('title-page', 'Form')



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
<!-- /.register-box -->

@endsection

