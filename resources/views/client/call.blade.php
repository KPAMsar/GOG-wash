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
            <form class="needs-validation" action="{{route('client.placerequest')}}" method="post">
                <div class="form-row">







                <br>


                <!-- <a href=""><button class="btn btn-primary" >Proceed</button></a> -->
                <a type="submit" class="btn btn-success">Next</a>
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
