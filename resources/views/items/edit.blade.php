@extends('_layouts.app')

@section('title', 'Create Admin Staff')

@section('content')

	<div class="col-md-6 mx-auto">
		<div class="card shadow">
		<form action="{{url('admin/edit-item/'.$data->id)}}" method="put">
			@csrf
            @method('PUT')
			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0"> Details</h6>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Item</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="item" value="" placeholder="Enter Item" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="price" value="" placeholder="Enter Normal Price" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
					<label>Express-Laundry</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="express_laundry" value="" placeholder="Enter Expreess Laundry Price" autofocus>

					@error('name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>





			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">Update</button>
				<a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
			</div>
		</form>
		</div>
	</div>

@endsection
