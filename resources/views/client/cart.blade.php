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
        <div class="card" style="width: 45rem;">
                        <div class="card-header">
                            <div class="container">
                                <div class="row table-responsive">
                                <table class="table table-hover">
                                    <thead style="background-color:#063464; color:white;">
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

                                    @if($data->count()> 0   )

                                    <a href="{{route('client.checkout')}}"><button type="button" class="btn" style="background-color:#063464; color:white;">Proceed</button></a>

                                    @else

                                    <tr><th scope="col">No items in the laundry cart</th></tr>
                                    @endif

                                    <div>
                                    <!-- <tr><th scope="col">SUB-TOTAL</th></tr>
                                    <tr><th scope="col">VAT</th></tr> -->
                                    <hr>


                                    <hr>

                                    </div>

                                </table>


                                </div>
                            </div>

                        <br>
                    </div>




        </div>










    </div>




@endsection
