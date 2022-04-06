


@extends('frontend.account.layouts.app')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

@section('title', '')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
			{{ session('success') }}
			<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

    @if(Session::has('fail'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif



    <div>
        <div>
            <h5 class="dashboard-wel">Hi {{ Auth::user()->firstname }}</h5>
            <p class="dashboard-note">How are you doing?</p>
            <br>
        </div>
    </div>

	<div class="row">

		<div class="col-xl-3 col-md-6 mb-4 ">
			<div class="card border-left-primary shadow h-100 py-2  carb-" style=" background-color:var(--gray);">
				<div class="card-body ">
					<div class="row no-gutters align-items-center ">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">

                            <span ><h class="dashboard" style="color:white;"> Cart</h></span>
                            <!-- <h6>Account Balance</h6> -->
                            </div>
                            <div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="dashboard" style="color:white;" >{{$cartcount}}</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-shopping-cart fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 carb-2" style=" background-color:#063464;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">


                            <span ><h class="dashboard" style="color:white;">Total Request</h></span>
                        </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="dashboard" style="color:white;" >{{$count}}</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-paper-plane fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-info shadow h-100 py-2 " style=" background-color:rgba(90, 92, 105, 0.5);" >
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="dashboard" style="color:white;" > GOG POINTS</h></span></div>
                            <div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="dashboard" style="color:white;">{{$gogpoints}}</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-trophy fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>



		</div>


		 <div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4" style=" background-color:#1cc88a;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="dashboard" style="color:white;" >REFERAL CODE</h></span></div>
							<div class="font-weight-bold mb-0 h5 text-gray-800" style="color:white;">
                            <span ><h class="dashboard" style="color:white;">{{$referal_code}}</h></span></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-spinner fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div> <br>
	</div>
        <div>

        </div>

        <div>

        <div class="card">
  <div class="card-header">
    Notice Board
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Hello fom GOG Wash,we want to formally welcome and thank you for signing up, we hope to see you soon!<br>Thank you.</p>
      <footer class="blockquote-footer">Okwupa Timothy <br><cite title="Source Title">CEO GOG Wash</cite></footer>
    </blockquote>
  </div>
</div>
        </div>
        </>



		</div>
	</div>
@endsection

