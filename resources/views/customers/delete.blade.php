@extends('_layouts.app')

@section('title', 'Delete Customer')

@section('content')

	<div class="col-md-10 mx-auto">
		<div class="card shadow">
		<form  action="{{url('admin/delete-customers/'.$data->id)}}" method="DELETE">
			@csrf

			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0"> Details</h6>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data ->id}}" placeholder="Enter Name" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Email Address</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{$data ->email}}" placeholder="Enter Email" autofocus>

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

                <div class="form-group">
					<label>Referal Code</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="referal_code" value="{{$data ->referal_code}}" placeholder="Enter Referal Code" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

			</div>
			<div class="card-footer">
				<button class="btn btn-danger" type="submit">Delete</button>
                <a href="{{url('delete-customers/'.$data->id)}}"> <button  class="btn btn-sm btn-danger">

                                    <i class="fa fa-trash"></i>
                                    </button>
                                </a>

				<a href="{{ route('admin.customers') }}" class="btn btn-secondary">Cancel</a>
			</div>
		</form>
		</div>
	</div>

@endsection
