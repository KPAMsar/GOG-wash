

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
            <h5 class="dashboard-wel text-center" >Account</h5>

        </div>
    </div>




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
            <h5 class="dashboard-wel text-center" >Account</h5>

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
                            <div class="row">
  <div class="col-sm-12">

  </div>
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <!-- <p class="card-text">AVAILABLE GOG POINTS</p> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <p class="card-text">AVAILABLE GOG POINTS</p>
               <h class="dashboard-wel"> 600</h>

                </div>
                <div class="col-md-6">
                <p class="card-text">AVAILABLE GOG POINTS</p>
                <a href="{{route('gogpoints.show')}}" class="btn " style="background-color:#063464; color:white;">Withdraw Points</a>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>

</div>

  </div>
</div>




		</div>






    </div>


<br><br><br><br>



@endsection





		</div>






    </div>


<br><br><br><br>



@endsection
