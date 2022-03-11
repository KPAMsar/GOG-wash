<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login</title>

  @include('frontend.auth.head')
  @extends('layouts.app')




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
                <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
              </div>

              <form class="user" action="{{ route('register') }}" method="post">
                @csrf

                <div class="form-group">
                  <input type="text" class="form-control form-control-user  "  value="" name="name" id="" aria-describedby="emailHelp" placeholder="Full Name"  required autofocus>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user    " value="" name="email" id="" aria-describedby="emailHelp" placeholder="Email Address"  required autofocus>


                </div>
                <!-- <div class="form-group">
                  <input type="text" class="form-control form-control-user    " value="" name="Address" id="" aria-describedby="emailHelp" placeholder="Address"  required autofocus>


                </div> -->
                <!-- <div class="form-group">
                  <input type="text" class="form-control form-control-user    " value="" name="phone" id="" aria-describedby="emailHelp" placeholder="Phone Number" required  autofocus>


                </div> -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-user    " name="password" id="" placeholder="Password" required >


                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user    " name="password_confirmation" id="" placeholder="Password" required >


                </div>
                <!-- <div class="form-group">
                  <input type="password" class="form-control form-control-user    " name="confirm_password" id="" placeholder="Confirm Password"  >


                </div> -->
                <div class="form-group">

                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register
                </button>
                <br>
                <div class="text-left">
                <h class="h text-gray-900 mb-4"><a href="client-login">Log in?</a></h>
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
