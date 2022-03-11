@extends('frontend.account.layouts.app')

@section('title', '')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
			{{ session('success') }}
			<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif


    <div>
        <div>
            <h5 class="dashboard-wel">Hi name</h5>
            <p class="dashboard-note">How are you doing?</p>
            <br>
        </div>
    </div>

	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2 carb-1" ">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">

                            <span ><h class="dashboard"> Balance</h></span>
                            <!-- <h6>Account Balance</h6> -->
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">5</div>
						</div>
						<div class="col-auto">
							<i class="fa fa-calculator fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 carb-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">


                            <span ><h class="dashboard">Total Request</h></span>
                        </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">Rp 55</div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bil fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="">
            <div class="card border-left-info shadow h-100 py-2 carb-3">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1"><span ><h class="dashboard">Fund Account</h></span></div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">5</div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            </a>

            <br><br><br>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4">
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
		</div>
	</div>


        <!-- <div class="card w-80">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
                </div>
        </div> -->


        <!-- Recent activities -->
        <div>

        <div class="card">
  <div class="card-header">
    Last Transaction
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
        </div>
        </div>



		</div>
	</div>
@endsection
