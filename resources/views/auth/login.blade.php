@include('layouts._include.header')
<div class="login-header">
    <!-- BEGIN LOGO -->
    <div id="logo" class="center">
        <img src="img/logo.png" alt="logo" class="center" />
    </div>
    <!-- END LOGO -->
</div>
<!-- BEGIN LOGIN -->
<div id="login">
  <!-- BEGIN LOGIN FORM -->
  <form id="loginform" class="form-vertical no-padding no-margin"  method="POST" action="{{ route('login') }}">
    {{csrf_field()}}
    <div class="lock">
        <i class="icon-lock"></i>
    </div>
    <div class="control-wrap">
        <h4>Faça o login</h4>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span><input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus/>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-key"></i></span><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                </div>
                <div class="mtop10">
                    <div class="block-hint pull-left small">
                        <input type="checkbox" id=""> Remember Me
                    </div>
                    <div class="block-hint pull-right">
                        <a href="javascript:;" class="" id="forget-password">Esqueceu a senha?</a>
                    </div>
                </div>

                <div class="clearfix space5"></div>
            </div>

        </div>
    </div>

  <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login" />
  </form>
  <!-- END LOGIN FORM -->
  <!-- BEGIN FORGOT PASSWORD FORM -->
  <form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
    <p class="center">Enter your e-mail address below to reset your password.</p>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email"  />
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <input type="button" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
  </form>
  <!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
@include('layouts._include.footer')
