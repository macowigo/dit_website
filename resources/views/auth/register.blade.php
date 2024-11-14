@extends('layouts.app')

@section('content')

<div class=" register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>DI</b>T</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><b>New Membership</b></p>

      <form  method="post" id='register-new-user-form'>
      {{ csrf_field() }}
        <div class="input-group mb-1 {{ $errors->has('name') ? 'has-error' : '' }}">
          <input type="text" class="form-control" name="name" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!}
        <div class="input-group mb-1 {{ $errors->has('email') ? 'has-error' : '' }}">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        {!! $errors->first('email', '<p class="help-block"  style="color:red;">:message</p>') !!}
        <div class="input-group mb-1 {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        {!! $errors->first('password', '<p class="help-block"  style="color:red;">:message</p>') !!}
        <div class="input-group mb-1 {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-1 {{ $errors->has('password') ? 'has-error' : '' }}">
          <div class="captcha">
            <span>{!! captcha_img() !!}</span>
          </div>
          <button type="button" class="btn btn-outline-secondary" title="refresh"><i class="fas fa-sync" id="refresh"></i></button>
        </div>

        <div class="input-group mb-1 {{ $errors->has('captcha') ? 'has-error' : '' }}">
          <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
        </div>
        {!! $errors->first('captcha', '<p class="help-block"  style="color:red;">:message</p>') !!}
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:#315c72 !important">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<div class="footer" >
    <!-- <hr> -->
     &copy; 2020  Information System
</div>

</div>
<!-- /.register-page -->
@endsection

@section('js')

@endsection
