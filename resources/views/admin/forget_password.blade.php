<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>newsTemplate | Forgot Password (v2)</title>

  @include('admin.layout.style')

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>news</b>Template</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form action="{{ route('admin_forget_password_submit') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <p class="text-danger text-xs">{{ $message }}</p>
        @enderror
        @if (session()->get('error'))
          <div class="text-center text-danger mb-2">{{ session()->get('error') }}</div>
        @endif
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn bg-orange btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="{{ route('admin_login') }}">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@include('admin.layout.scripts')
</body>
</html>
