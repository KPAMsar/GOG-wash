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
            <h5 class="dashboard-wel text-center" >LAUNDRY CART</h5>

        </div>
    </div>

	<div class="row">
		<div class="col-xl-1 col-md- ">

		</div>
		<div class="col-xl-10 col-md-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">


						</div>

                        <div class="text-center">
                        <!-- <img src="assets/images/logo/kpam.jpg" class="rounded profile-img" alt="..."> -->
                        </div>

                                    <div class="col-md-8">
                                    <div class="card-body">



                                    </div>
                                    </div>

                                </div>
                        </div>

                        <div class="card" style="width: 65rem;">
                        <div class="card-header">
                            <div class="container">
                                <div class="row">

                                <div class="col-md-8">

                                     <form>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                            <label for="validationServer01">First name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Last name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                            <label for="validationServerUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                </div>
                                                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                                <div class="invalid-feedback">
                                                Please choose a username.
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">City</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                            <label for="validationServer04">State</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                            <label for="validationServer05">Zip</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                </div>
                                <div class="col-md-2">
                                <!-- <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center">Laundry Items</h5>
                                    <ul class="list-group list-group-flush">
                                        @foreach($data as $item)
                                        <li class="list-group-item">{{$item->item_id}}</li>
                                        @endforeach
                                    </ul>
                                    </div>
                                </div> -->
                                <table class="table table-borderless">
                                    <thead>


                                        <tr>
                                        <th scope="col">Items</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                        <td>{{$item->item_id}}</td>
                                        <td>{{$item->item_qty}}</td>
                                        <td>{{$item->price}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div>

                        <br>
                    </div>
        </div>

    </div>

@endsection
