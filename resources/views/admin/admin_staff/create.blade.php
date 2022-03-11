@extends('_layouts.app')

@section('title', 'Create Admin Staff')

@section('content')

	<div class="col-md-6 mx-auto">
		<div class="card shadow">
		<form action="{{route('admin.create.admin_staff')}}" method="post">
			@csrf
			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0"> Details</h6>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="" placeholder="Enter First Name" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="" placeholder="Enter Last Name" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Email Address</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="" placeholder="Enter Email" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
                <div class="form-group">
					<label>password</label>
					<input type="password" class="form-control @error('name') is-invalid @enderror" name="password" value="" placeholder="Enter Password" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Confirm password</label>
					<input type="password" class="form-control @error('name') is-invalid @enderror" name="password_confirmation" value="" placeholder="Confirm Password" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>



			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">Create</button>
				<a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
			</div>
		</form>
		</div>
	</div>

@endsection
