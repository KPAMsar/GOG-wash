
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
            <h5 class="dashboard-wel text-center" > GOG POINTS</h5>

        </div>
    </div>

	<div class="row ">
		<div class="col-xl-1 col-md- ">

		</div>
		<div class="col-xl-9 col-md-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">
                            <div>
                                <form action="{{route('paywithpoints')}}" method="POST">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <p class="card-text"style=" color:#063456;">AVAILABLE GOG POINTS</p>
                                        <h class="dashboard-wel" style="font-size:4em; color:#063456;"> {{$gogpoints}}</h>

                                            </div>
                                            <div class="col-md-6">
                                                @php

                                                @endphp
                                            <p class="card-text">AVAILABLE GOG POINTS</p>
                                            <a href="{{route('gogpoints.show')}}" class="btn " style="background-color:#063464; color:white;">PAY WITH POINTS</a>
                                            </div>
                                        </div>
                                    </div>


                                </form>

                            </div>

						</div>


                        <br>
</div>    </div>


        </div>



    </div>




@endsection
@section('cartitems--handler')
<script src="js/cartitems--handler.js">

</script>
@if(Session::has('success'))
<script>
    swal('successful')
</script>
@endif
<br><br>
@endsection


