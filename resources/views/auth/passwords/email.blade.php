




<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login</title>

  @include('_includes.head')

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="p-5">
              <div class="text-center">
              <div class="card-header">{{ __('Reset Password') }}</div>
              </div>

              <form class="user" action="{{ route('password.email') }}" method="post">
                @csrf
                @if (session()->has('error'))
                  <div class="alert alert-danger alert-dismissible">
                    <span>{{ session('error' )}}</span>
                    <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif

                <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn " style="background-color:#063464  ; color:white;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                </div><br><br><br>




              </form>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  @include('_includes.foot')

</body>

</html>
