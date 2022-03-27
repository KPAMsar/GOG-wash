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
            <h5 class="dashboard-wel text-center" >laundry Request</h5>


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
            <form class="needs-validation" method="post" action="{{route('client.create.request')}}"  >
            @csrf

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01" class="request-form">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="firstname" value="{{Auth::user()->firstname}}" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02" class="request-form">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" name="lastname" value="{{Auth::user()->lastname}}" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01" class="request-form">Email Address</label>
                        <input type="text" class="form-control" id="validationCustom01" name="email" value="{{Auth::user()->email}}" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02" class="request-form">Phone Number</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="phone" value="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01 " class="request-form">Home Address </label>
                        <input type="text" class="form-control" id="validationCustom01" name="phone" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>

                <div class="form-row">

                    <div class="col-md-3 mb-3">

                        </div>
                    </div>
                </div>
                <!-- <a href="#">SELECT LAUNDRY ITEMS</a> -->
                <br>

                <table class="table">

                <thead class="" style=" background-color:#063464;" >
                    <tr>
                    <th scope="col" style=" color:white;" >#</th>
                    <th scope="col" style=" color:white;">Item</th>
                    <th scope="col" style=" color:white;">Price</th>
                    <th scope="col" style=" color:white;">Action</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($data as $item)


                    <tr>
                    <th scope="row">•</th>
                    <td>{{$item ->item}}</td>
                    <td>{{$item ->price}}</td>
                    <td>


                         <div class="form-check">
                        <input class="form-check-input" value="item:{{$item->item}}, price: {{$item->price}}"  name="items[]" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Add to  cart
                        </label>
                    </div>
                </td>

                    </tr>

                @endforeach
                </tbody>
                </table>

                <br>


                <div>
                <input class="form-control" type="text" placeholder="Add Other Items " >

                </div>
                <br>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Confirm your details and place a request
                        </label>

                        <div class="invalid-feedback" class="request-form">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                        <button type="submit" class="btn btn-primary" name="items[]" style="background-color:#063464;" > Home      </button>

                        </div>
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" name="items[]" style="background-color:#063464;" >Proceed</button>

                        </div>
                    </div>
                </div>

            </form>
                    <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                            }, false);
                        });
                        }, false);
                    })();
                    </script>
            </div>
            </div>
         </div>
      </div>
   </div>
</div>




<br>

@endsection
