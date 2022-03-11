@extends('_layouts.app')

@section('title', 'Add Customer')

@section('content')

	<div class="col-md-6 mx-auto">
		<div class="card shadow">
		<form action="{{ route('customers.create') }}" method="post">
			@csrf
			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0"> Details</h6>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value=""   required placeholder="Enter First Name" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
                <div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value=""   required placeholder="Enter Last Name" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Email Address</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value=""  required placeholder="Enter Email" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Address</label>
					<textarea class="form-control @error('address') is-invalid @enderror" name="address" value=""   required placeholder="Enter Address"></textarea>

					@error('address')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>


				<div class="form-group">
					<label>Phone no.</label>
					<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="" placeholder="Enter Phone number" required>

					@error('phone')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <!-- <div class="form-group">
					<label>Referal Code</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="referal_code" value="" placeholder="Enter Referal Code" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div> -->

			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">save</button>
				<a href="{{ url('/customers') }}" class="btn btn-secondary">Cancel</a>
			</div>
		</form>
		</div>
	</div>

@endsection
