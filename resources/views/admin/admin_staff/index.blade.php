@extends('_layouts.tables')

@section('title', '')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
			{{ session('success') }}
			<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

    <div>
            <h5 class="dashboard-wel text-center" >Admin Staff</h5>
    </div>

        <div class="container">
        <div class="row">
		<div class=" col-sm-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">
                            <div class="row">
                            <div>

                    <div class=" py-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="dashboard-wel text-center" ></h5>
                    </div>
                        <a href="{{ route('admin.admin_staff_show') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    </div>

                    <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Action</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach($data as $staff)
                    <tr>
                        <td>{{$staff -> id}}</td>
                        <td>{{$staff -> firstname}}</td>
                        <td>{{$staff -> lastname}}</td>
                        <td>{{$staff -> email}}</td>

                        <td><a href="{{url('admin/edit-customers/'.$staff->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{url('admin/delete-customers/'.$staff->id)}}"> <button  class="btn btn-sm btn-danger">

                        <i class="fa fa-trash"></i>
                        </button>
                        </a>

						</td>
                    </tr>
                    @endforeach



                </tbody>

            </table>
                    </div>




        <script>
                $(document).ready(function() {
                $("#table_id").dataTable();
                } );
        </script>

	</div>
        </div>



  </div>
</div>
</div>
            </div>





<br><br><br><br>



@endsection
