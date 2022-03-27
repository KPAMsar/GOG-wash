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

                        <div class="card" style="width: 45rem;">
                        <div class="card-header">
                            <div class="container">
                                <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal(NGN)</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    @foreach($data as $item)
                                    <tbody>
                                        <tr>

                                        <th scope="row">
                                        <li><span class="fa-li"><i class="fa-solid fa-check-square"></i></span></li>
                                        </th>
                                        <td>{{$item->item_id}}</td>
                                        <td>
                                        <div class="input-group text-center mb-3" style="width:130px;">
                                            <button type="button" onclick="decrementItemID_Z9(event)"  class="input-group-text decrement-btn">-</button>


                                            <input type="text" name="item_quantity " class="form-control  qty-input text-center  item_qty" value="1" style="width: 55px;">


                                            <button type="button" onclick="incrementItemID_Z9(event)" class="input-group-text increment-btn">+</button>
                                        </div>

                                        </td>
                                        <td>{{$item->item_id }}</td>
                                        <td><button  class="btn btn-sm btn-danger">

                                        <a href="{{url('client/delete-laundry-item/'.$item->id)}}">

                                            <i class="fa fa-trash btn-danger"></i>

                                            </a>
                                        </td>

                                        </tr>

                                    </tbody>

                                    @endforeach

                                    <div>
                                    <!-- <tr><th scope="col">SUB-TOTAL</th></tr>
                                    <tr><th scope="col">VAT</th></tr> -->
                                    <hr>
                                        <tr><th scope="col">TOTAL</th></tr>

                                    <hr>

                                    </div>

                                </table>
                                <a href="{{route('client.checkout')}}"><button type="button" class="btn btn-primary">Proceed</button></a>


                                </div>
                            </div>

                        <br>
                    </div>




        </div>











    </div>




@endsection
