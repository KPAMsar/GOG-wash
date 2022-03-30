
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

                        <div class="text-center laundry_data">
                        <!-- <img src="assets/images/logo/kpam.jpg" class="rounded profile-img" alt="..."> -->
                        </div>

                                    <div class="col-md-8">
                                    <div class="card-body">



                                    </div>
                                    </div>

                                </div>
                        </div>

                        <div class="card " style="width: 45rem;">
                        <div class="card-header">
                            <div>

                            <table class="table " >
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Price </th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- @php $total= 0; @endphp -->
                                        @foreach($data as $item)
                                        <form id="quantity" class="laundry_items" action="{{url('add-to-cart/'.$item->id)}}" method="post">
                                            @csrf
                                            <tr>
                                            <td scope="row"   value="{{$item->item}}"  >
                                                {{$item->id}}
                                            </td>

                                            <td class="item_id" name="item_id">{{$item->item}}</td>
                                            <input type="hidden" value="{{$item->item}}" name="item_id">
                                            <td>{{$item->price}}</td>
                                            <td>

                                            <div class="input-group text-center mb-3" style="width:130px;">
                                                <button type="button" onclick="decrementItemID_Z9(event)"  class="input-group-text decrement-btn">-</button>


                                                <input type="text" name="item_quantity " class="form-control  qty-input text-center  item_qty" value="1" style="width: 55px;">


                                                <button type="button" onclick="incrementItemID_Z9(event)" class="input-group-text increment-btn">+</button>
                                            </div>
                                            </td>
                                            <td>{{$item->price }} </td>

                                            <td>
                                                <button type="submit"  class="btn btn-success addToCartBtn">Add to Cart</button></a></td>
                                            </tr>
                                            </form>
                                            <!-- @php $total +=$item->price * -->
                                        @endforeach

                                    </tbody>
                            </table>

                            <div>
                            <a href="{{route('client.laundry-cart')}}"><button type="button" class="btn btn-primary">Proceed</button></a>

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


