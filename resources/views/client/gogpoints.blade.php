
@section('content')

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
                        <div class="col-sm-9">
                        <form action="" method="post">
                                    @csrf

                                    <div class="card-header py-3">
                                        <h6 class="font-weight-bold text-primary m-0"> Details</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{Auth::user()->firstname}}" placeholder="Enter First Name" autofocus readonly>

                                            @error('name')
                                                <span class="invalid-feedback">hh</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{Auth::user()->lastname}}" placeholder="Enter Last Name" autofocus readonly>

                                            @error('name')
                                                <span class="invalid-feedback">hh</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" placeholder="Enter Email" autofocus readonly>

                                            @error('name')
                                                <span class="invalid-feedback">hh</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="phonenumber" value="{{$data ?? '' ?? '' ->request_id}}" placeholder="Enter Phone Number" autofocus >

                                            @error('name')
                                                <span class="invalid-feedback">hh</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="bank" value="{{$data ?? '' ?? '' ->request_id}}" placeholder="Enter Name of Bank" autofocus >

                                            @error('name')
                                                <span class="invalid-feedback">hh</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Account Number</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="account" value="{{$data ?? '' ?? '' ->email}}" placeholder="Enter Account Number" autofocus >

                                            @error('name')
                                                <span class="invalid-feedback">hhh</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>GOG Points</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="points" value="{{$data ?? '' ?? '' ->email}}" placeholder="Enter GOG Points" autofocus >

                                            @error('name')
                                                <span class="invalid-feedback">hhh</span>
                                            @enderror
                                        </div>





                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('gogpoints.request')}}"> <button class="btn" style="background-color:#063464; color:white;" type="submit">Request </button></a>

                                        <a href="{{ route('client.dashboard') }}" class="btn btn-secondary" ">return</a>
                                    </div>
                                </form>
                        </div>


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br><br><br>
      @endsection
   </div>
</div>
<br><br><br><br>
@endsection
