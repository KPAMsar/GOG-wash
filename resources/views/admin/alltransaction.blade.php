@extends('_layouts.tables')

@section('title', 'Transaction')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
			{{ session('success') }}
			<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

    <div>
            <h5 class="dashboard-wel text-center" >Transaction Summary</h5>
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
                        <!-- <a href="{{ route('admin.admin_staff_show') }}" class="btn btn-sm btn-primary">Add</a> -->
                    </div>
                    </div>

                    <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                <thead>
                      <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Reference Number</th>
                        <th>Amount(NGN)</th>
                        <th>Payment Status</th>
                        <th>Mode of payment</th>
                        <th>Date</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach($alltransaction_summary as $transaction)
                        <tr>
                                <td>{{$transaction -> id}}</td>
                                <td>{{$transaction -> email}}</td>
                                <td>{{$transaction -> reference_no}}</td>
                                <td>{{$transaction -> amount/ 100}}</td>
                                <td>{{$transaction -> payment_staus}}</td>
                                <td>{{$transaction -> mode_of_payment}}</td>
                                <td>{{$transaction -> created_at}}</td>
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
