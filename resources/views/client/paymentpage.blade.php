
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


						</div>
                                    <div class="col-md-8">
                                    <div class="card-body">



                                    </div>
                                    </div>

                                </div>
                        </div>

                        <div class="card " style="width: 45rem;">
                        <div class="card-header">

                            <div  class=""style="">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <div class="row" style="margin-bottom:40px;">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                <div style="text-align:center;">
                                                    You are about to make a lundry payment   of
                                                    ₦ 2,950
                                                </div>
                                            </p>
                                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="currency" value="NGN">
                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}


                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                            <p>


                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                                </button>

                            <button class="btn btn-success btn-lg btn-block" type="button" onclick="window.location.href='{{route('client.paywithcash')}}'" value="Pay Now!">
                                                    <i class="fa fa-plus-circle fa-lg"></i> Pay with cash!
                            </button>

                            <button class="btn btn-success btn-lg btn-block" type="button" onclick="window.location.href='{{route('client.paywithcrypto')}}'" value="Pay Now!">
                                                    <i class="fa fa-plus-circle fa-lg"></i> Pay with Crypto!
                            </button>


                            </form>

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


