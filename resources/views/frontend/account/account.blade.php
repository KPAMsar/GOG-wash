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
            <h5 class="dashboard-wel text-center" >Account</h5>
            
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
                            <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">BALANCE</h5>
        <p class="dashboard-wel">NGN 5000</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Click to fund account</p>
        <a href="#" class="btn btn-primary">Fund Account</a>
      </div>
    </div>
  </div>
</div>
                          
						</div>

                        
 
  
  </div>
</div>
                   
            

            
		</div>

       

     
 

    </div>
        
<br><br><br><br>



@endsection
