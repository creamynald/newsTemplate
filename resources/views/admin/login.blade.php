<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>newTemplate | Log in</title>

  @include('admin.layout.style')

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>news</b>Template</a>
    </div>
    <div class="card-body">
      
      @if (session()->get('error'))
        <div class="text-center text-danger mb-2">{{ session()->get('error') }}</div>
      @else (session()->get('success'))
        <div class="text-center text-success mb-2">{{ session()->get('success') }}</div>
      @endif

      <form action="{{ route('admin_login_submit') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <p class="text-danger text-xs">{{ $message }}</p>
        @enderror
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn bg-orange btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('admin_forget_password') }}">I forgot my password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

@include('admin.layout.scripts')
</body>
</html>
