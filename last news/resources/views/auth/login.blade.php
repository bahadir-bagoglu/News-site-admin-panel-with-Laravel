
@extends('layouts.app')

@section('content')


<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Son</b>DAKİKA</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Giriş Yapmak için Oturum açın </p>
  
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Şifre">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Beni Hatırla
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="social-auth-links text-center mb-3">
          <p>- Veya -</p>
          <a href="https://www.facebook.com/" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> 
            Facebook'u kullanarak Oturum açın
          </a>
          <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Ftab%3Dkk&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> 
            Google'u kullanarak Oturum açın
          </a>
        </div>
        <!-- /.social-auth-links -->
  
        <p class="mb-1">
          <a href="{{ route('password.request') }}">
            Şifremi Unuttum</a>
        </p>
        <p class="mb-0">
          <a href="{{ route('register') }}" class="text-center">Kayıt Ol</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>



@endsection
