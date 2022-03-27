


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
    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


    </div>


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
                            <span ><h class="dashboard">0</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-calculator fa-2x text-gray-300"></i>
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


                            <span ><h class="dashboard">Total Request</h></span>
                        </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="dashboard">{{$count}}</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bil fa-2x text-gray-300"></i>
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
                            <span ><h class="dashboard"> REFERAL CODE</h></span></div>
                            <div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="dashboard">######</h></span>
                        </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>


            <br>
		</div>
        

		 <div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4" style=" background-color:#1cc88a;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="dashboard"> REFERAL CODE</h></span></div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">5</div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div> <br>
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
        </div>



		</div>
	</div>
@endsection

