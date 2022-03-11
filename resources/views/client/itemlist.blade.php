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
		<div class="col-xl-1 col-md- ">

		</div>
		<div class="col-xl-9 col-md-12 ">
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

                        <div class="card" style="width: 45rem;">
                       <table class="table">
  <thead class="thead-dark">

    <tr>
    <th scope="col">#</th>
      <th scope="col">Item</th>
      <th scope="col">Price[NGN]</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount[NGN]</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $item)
      <script>
            $num=document.getElementById("quantity").value ;
      </script>

      <tr>
      <th scope="row">1</th>
      <td>{{$item->item}}</td>
      <td>{{$item->price}}</td>
      <td><input type="number" id="quantity" " min="0" max="20" step="1"/></td>
      <td>    </td>
      </tr>
      @endforeach



  </tbody>
</table>
                        <br>
                    </div>











        </div>











    </div>




@endsection
<script src="./src/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
