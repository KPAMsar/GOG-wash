



<!DOCTYPE html>
<html lang="en">

<head>

  <title>Register</title>

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
                <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
              </div>

              <form class="user" action="{{ route('register') }}" method="post">
                @csrf
                @if (session()->has('error'))
                  <div class="alert alert-danger alert-dismissible">
                    <span>{{ session('error' )}}</span>
                    <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif
                <div class="form-group">
                  <input type="text" class="form-control form-control-user"  value="" name="firstname" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="First Name" autofocus required>

                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user"  value="" name="lastname" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Last Name" autofocus required>

                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user " value="" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" autofocus>

                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="exampleInputPassword" placeholder="Password">

                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password_confirmation" id="exampleInputPassword" placeholder="Confirm Password">

                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color:#063464; color:white;">
                  Sign up
                </button>


                <br><br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                        <p><a href="{{route('login')}}" style="color:#063464;">Log in</a></p>
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
