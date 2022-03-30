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
            <h5 class="dashboard-wel text-center" >LAUNDRY ORDER</h5>

        </div>
    </div>

    <div class="card" style="width: 65rem;">
                        <div class="card-header">
                            <div class="container">
                                <div class="row">

                                <div class="col-md-8">

                                     <form method="post" action="{{route('q')}}"  >
                                     @csrf
                                     <div class="form-row">


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">First Name</label>
                                            <input type="text" class="form-control " name="firstname" value="{{Auth::user()->firstname}}" id="validationServer03" placeholder="City" readonly>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">Last Name</label>
                                            <input type="text" class="form-control " name="lastname" value="{{Auth::user()->lastname}}"id="validationServer03" placeholder="City" readonly>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">Email</label>
                                            <input type="email" class="form-control "  name="email" id="validationServer03" value="{{Auth::user()->email}}"  placeholder="City" readonly>
                                            <div class="invalid-feedback">
                                                Please provide a valid email.
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">Phone Number</label>
                                            <input type="text" class="form-control " name="phone" id="validationServer03" placeholder="Enter your phone number" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid number.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationServer03">Address</label>
                                            <input type="text" class="form-control "  name="address" id="validationServer03" placeholder="Enter your address" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-3">

                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            </div>
                                        </div>
                                        <br>

                                        <br>

                                        <br>
                                </div>

                                <div class="col-md-4 card">
                                <div style="padding-top:10px;">
                                    <h5 class="dashboard-wel text-center" >ORDER DETAILS</h5>

                                </div>
                                    <div >

                                    <table class="table table-borderless ">
                                    <thead>


                                        <tr>
                                        <th scope="col">Items</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        </tr>

                                    </thead>
                                    @php  $total = 0; @endphp
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                        <td>{{$item->laundrys->item}}</td>
                                        <td>{{$item->item_qty}}</td>
                                        <td>{{$item->laundrys->price}}</td>
                                        </tr>
                                        @php  $total += $item->laundrys->price  * $item->item_qty ; @endphp
                                    @endforeach
                                    </tbody>
                                    <hr>
                                    <tr>
                                        <th scope="col">Total:{{    $total}}(NGN)</th>
                                    </tr>
                                </table>
                                    </div>


                                    <br>
                                <div>
                                    <button class="btn btn-primary" type="submit">Checkout</button>
                                </div>

                                </form>
                            </div>


                        <br>

                    </div>
        </div>

    </div>



@endsection
