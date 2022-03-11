@extends('_layouts.app')


@section('title', '')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
			{{ session('success') }}
			<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

    <div>
            <h5 class="dashboard-wel">Hi {{ Auth::user()->firstname }},</h5>
            <p class="dashboard-note">Always remeber that hard work pays....</p>
            <br>
    </div>
	<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3"  style="background-color:#36b9cc;" >
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">

                                <span ><h class="main-dashboard"> Laundry Request</h></span></div>
							<div class="font-weight-bold mb-0 h5 text-gray-800"></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
        <br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 carb-2" style=" background-color:#063464;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">

                                <span ><h class="main-dashboard">Confirmed</h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">Rp </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
        <br><br><br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3"style="background-color:var(--gray); ">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">

                                <span ><h class="main-dashboard"> Processed Request</h></span></div>
							<div class="font-weight-bold mb-0 h5 text-gray-800"></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
        <br><br><br>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4"  style=" background-color:#1cc88a;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="main-dashboard"> Delivered</h></span>
                           </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">Rp </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
        <br><br>
	</div>
    <br><br><br>
    <div class="row">

        <br><br><br>

        <br><br><br>

        <br><br><br>

        <br><br><br>
	</div>
@endsection
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>



@stack('js')
