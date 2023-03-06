<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>newsTemplate | Reset Password (v2)</title>

  @include('admin.layout.style')

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>news</b>Template</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Reset Password.</p>
      <form action="{{ route('admin_reset_password_submit') }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $token }}" name="token">
        <input type="hidden" value="{{ $email }}" name="email">

        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <p class="text-danger text-xs">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('retype_password') is-invalid @enderror" placeholder="Retype Password" name="retype_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('retype_password')
          <p class="text-danger text-xs">{{ $message }}</p>
        @enderror
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn bg-orange btn-block">Update Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@include('admin.layout.scripts')
</body>
</html>
