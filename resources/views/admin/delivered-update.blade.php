@extends('_layouts.app')

@section('title', '')

@section('content')

	<div class="col-md-10 mx-auto">
		<div class="card shadow">
		<form action="{{url('delivered-comfirmation/'.$data->id)}}" method="post">
			@csrf
            @method('PUT')
			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0"> Details</h6>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data ->firstname}} {{$data -> lastname}}" placeholder="Enter Name" autofocus readonly>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Transaction ID</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{$data ->request_id}}" placeholder="Enter Email" autofocus readonly>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Email Address</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{$data ->email}}" placeholder="Enter Email" autofocus readonly>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Address</label>
					<textarea class="form-control @error('address') is-invalid @enderror" name="address" value="{{$data->address}}" placeholder=""></textarea>

					@error('address')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>


				<div class="form-group">
					<label>Phone no.</label>
					<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$data ->phone}}" placeholder="Enter Phone number">

					@error('phone')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>



			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">Delivered</button>
				<a href="{{ route('admin.customers') }}" class="btn btn-secondary">return</a>
			</div>
		</form>
		</div>
	</div>

@endsection
