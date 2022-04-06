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
		<div class="col-xl-1 col-md-12 ">

		</div>
		<div class="col-xl-9 col-md-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">


						</div>

                                    <div class="col-md- ">
                                    <div class="card-body">

                                    <div class="card-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12">
                                    <h5 class="dashboard-wel" style="color:#063464;">Data </h5>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                    <a href="{{url('client/edit-profile/'.Auth::user()-> id)}}" class="btn " style="background-color:#063464; color:white;">Update profile</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9 col-sm-6">
                        <ul class="list-group list-group-flush" style="color:#063464;">
                            <li class="list-group-item" <h>First Name:{{Auth::user()->firstname}} </h5></li>
                            <li class="list-group-item"<h">Lastname:{{  Auth::user()->lastname}}</h5></li>
                            <li class="list-group-item"><h>Email:{{Auth::user()->email}}</h></li>
                            <li class="list-group-item"><h>Phone number:{{Auth::user()->phone}}</h5></li>
                            <li class="list-group-item"><h>Address:{{Auth::user()->address}}</h5></li>

                            <li class="list-group-item"><h>Referal code:{{Auth::user()->ref}}</h5></li>
                            <li class="list-group-item"><h>Number of Referals:{{$gogreferalscount}} Referals</h5></li>

                            <li class="list-group-item"><h>Points Earned:{{$gogpoints}}</h5></li>



                            <!-- <li class="list-group-item"><h5 class="profile-wel"> <h5 class="profile-wel">Referal Code:GOG001</h5></li> -->
                        </ul>
                         </div>

                                    </div>
                                    </div>

                                    <div>

                                    </div>

                                </div>
                        </div>












        </div>











    </div>




@endsection

<script>
    let $url = window.location.href;
</script>
