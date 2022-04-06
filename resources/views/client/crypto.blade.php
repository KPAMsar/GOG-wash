
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
            <h5 class="dashboard-wel text-center" >Select Laundry Items</h5>

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

                                <form action="{{route('paywithcrypto')}}" method="POST">
                                    @csrf
                                    Send your crpto here and call for confirmation.<br>
                                    Bitcoin address:
                                    <br><br><button class="btn btn-primary" style="background-color:#063464; color:white;" onclick="" type="submit">Accept</button>

                                </form>
                            </div>

						</div>

                                </div>
                        </div>


                        <br>
                    </div>











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
@endsection


