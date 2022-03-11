<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login</title>
  @extends('layouts.app')

  @include('frontend.auth.head')


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
                <h1 class="h4 text-gray-900 mb-4">Sign in</h1>
              </div>

              <form class="user" action="{{ route('login1') }}" method="post">
                @csrf
                @if (session()->has('error'))
                  <div class="alert alert-danger alert-dismissible">
                    <span>{{ session('error' )}}</span>
                    <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif
                @if (session()->has('success'))
                  <div class="alert alert-success alert-dismissible">
                    <span>{{session('success')}}</span>
                    <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif

                <div class="form-group">
                  <input type="email" class="form-control form-control-user "  name="email" id=""  placeholder="Email" autofocus>


                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">


                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
                <br>
                <div class="text-left">
                <h class="h text-gray-900 mb-4"><a href="client-register">Create account?</a></h>
              </div>

              @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
              @endif

              <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

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
