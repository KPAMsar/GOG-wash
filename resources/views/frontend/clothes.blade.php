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
            <h5 class="dashboard-wel text-center" >Request</h5>

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
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01" class="request-form">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02" class="request-form">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01" class="request-form">Email Address</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02" class="request-form">Phone Number</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01 " class="request-form">Pickup Address</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02" class="request-form">Delivery Address</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03" class="request-form">Additional note</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04" class="request-form">Payment method</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>GOG Account</option>
                            <option>Pay with Cash</option>
                            <option>Pay with Crypto</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="inputZip">Zip</label>
                        <input type="number" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltipUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">fewewrer</span>
                            </div>
                            <input type="number" class="form-control" id="inputZip"><div class="invalid-tooltip">
                            Please choose a unique and valid username.
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">

                        </div>
                    </div>
                </div>
                <!-- <a href="#">SELECT LAUNDRY ITEMS</a> -->
                <br> <br>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                        </label>

                        <div class="invalid-feedback" class="request-form">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <a href=""><button class="btn btn-primary" >Submit form</button></a>
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






@endsection
