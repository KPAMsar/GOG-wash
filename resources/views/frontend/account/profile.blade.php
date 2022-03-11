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
            <h5 class="dashboard-wel text-center" >Profile</h5>

        </div>
    </div>

	<div class="row">
		<div class="col-xl-1 col-md- ">

		</div>
		<div class="col-xl-9 col-md-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">


						</div>

                        <div class="text-center">
                        <img src="assets/images/logo/kpam.jpg" class="rounded profile-img" alt="...">
                        </div>

                                    <div class="col-md-8">
                                    <div class="card-body">



                                    </div>
                                    </div>

                                </div>
                        </div>

                        <div class="card" style="width: 45rem;">
                        <div class="card-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-sm-6">
                                    <h5 class="dashboard-wel">Data </h5>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                    <a href="#" class="btn btn-primary">Update profile</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9 col-sm-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <h5 class="profile-wel">First Name: Kpamsar Daniel</h5></li>
                            <li class="list-group-item"><h5 class="profile-wel">Lastname:Shija</h5></li>
                            <li class="list-group-item"><h5 class="profile-wel">Email:Kpamsarshija@gmail.com</h5></li>
                            <li class="list-group-item"><h5 class="profile-wel"><h5 class="profile-wel">Phone number:09093389742</h5></li>
                            <li class="list-group-item"><h5 class="profile-wel"><h5 class="profile-wel">Address:No.149, Captain Downs Road,<br>Gboko.Benue State.</h5></li>
                            <li class="list-group-item"><h5 class="profile-wel"> <h5 class="profile-wel">Referal Code:GOG001</h5></li>
                        </ul>
                         </div>

                        <br>
                        </div>











</div>











    </div>




@endsection
