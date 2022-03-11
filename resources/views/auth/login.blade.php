



<!DOCTYPE html>
<html lang="en">

<head>
    
    
    
<link href="{{ url('assets/sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>Login</title>

  @include('_includes.head')

</head>

<body class="bg-gradient-primary">
<!-- <div class="row justify-content-center">

<img src="{{url('assets/images/logo/logo2.png')}}" style="width:15%; height:15%;">
</div> -->


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
              </div>

              <form class="user" action="{{ route('login') }}" method="post">
                @csrf
                @if (session()->has('error'))
                  <div class="alert alert-danger alert-dismissible">
                    <span>{{ session('error' )}}</span>
                    <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif
                <div class="form-group">
                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" autofocus>

                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="exampleInputPassword" placeholder="Password">

                  @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>
                <button type="submit" style="background-color:#063464; color:white;" class="btn  btn-user btn-block">
                  Login
                </button><br><br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                        <p><a href="{{route('register')}}" style="color:#063464;">Sign up?</a></p>
                        </div>
                        <div class="col-6">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#063464;">
                                        {{ __('Forgot  Password?') }}
                                    </a>
                        @endif
                        </div>
                    </div>
                </div>


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
