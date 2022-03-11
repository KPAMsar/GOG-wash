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
            <p class="dashboard-note">Keep beleiving in yourself....</p>
            <br>
    </div>
	<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3" style="background-color:#36b9cc;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            <span ><h class="main-dashboard">Total Laundry</h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                                <span ><h class="main-dashboard">{{$totalcount}}</h></span>
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
        <br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 carb-2"  style=" background-color:#063464;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <span ><h class="main-dashboard"> Confirmed </h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="main-dashboard">{{$confirmedcount }}</h></span>
                            </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br>
		</div>
        <br><br><br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3 "style="background-color:var(--gray); ">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            <span ><h class="main-dashboard">  Delivered</h></span>
                           </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="main-dashboard">{{$deliveredcount}}</h></span> </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br>
		</div>
        <br><br>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4" style=" background-color:#1cc88a;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="main-dashboard"> Total Users</h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">
                            <span ><h class="main-dashboard">{{$totalusers}}</h></span>
                            </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
        <br>
	</div>
    <br>


    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3" style="background-color:var(--gray);">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            <span ><h class="main-dashboard"> Total Request</h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800"></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br>
		</div>
        <br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 carb-2"  style="  background-color:#1cc88a;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <span ><h class="main-dashboard">Monthly Income</h></span>
                            </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800">Rp </div>
						</div>
						<div class="col-auto">
							<i class="fa fa-money-bill fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br>
		</div>
        <br>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 carb-3 "style="background-color:#36b9cc; ">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1 ">
                            <span ><h class="main-dashboard">  Monthly Income</h></span>
                           </div>
							<div class="font-weight-bold mb-0 h5 text-gray-800"></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-file-invoice fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
            <br>
		</div>
        <br>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 carb-4" style=" background-color:#063464;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <span ><h class="main-dashboard">  Monthly Income</h></span>
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

	</div>
    <br>

</div>
</div>
@endsection
