<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



  <!-- Divider -->
  <hr class="sidebar-divider my-0">



  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Nav Item - User -->


  <!-- Nav Item - Home -->
  <li class="nav-item ">

    <a class="nav-link" href="{{ route('client.dashboard') }}">
   <i class="fa fa-home" aria-hidden="true"></i>
      <span ><h class="dashboard">Home</h></span></a>
  </li>



    <!-- Nav Item - Account -->
  <li class="nav-item ">

<a class="nav-link" href="{{route('client.account')}}">
  <i class="fa fa-users" aria-hidden="true"></i>
  <span ><h class="dashboard">Account</h></span></a>
</li>


  <!-- Nav Item - Request -->
<li class="nav-item ">

<a class="nav-link" href="{{ route('client.profile') }}">
<i class="fas fa-user"" aria-hidden="true"></i>
  <span ><h class="dashboard">Profile </h></span></a>
</li>

 <!-- Nav Item - Transactions -->
 <li class="nav-item ">

<a class="nav-link" href="{{route('client.sendrequest')}}">
  <i class="fa fa-paper-plane" aria-hidden="true"></i>
  <span ><h class="dashboard">Request</h></span></a>
</li>

 <!-- Nav Item - Transactions -->
 <li class="nav-item ">

<a class="nav-link" href="{{route('client.laundry-cart')}}">
  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
  <span ><h class="dashboard">Cart</h></span></a>
</li>


 <!-- Nav Item - Transactions -->
 <li class="nav-item ">

<a class="nav-link" href="#">
 <i class="fa fa-money" aria-hidden="true"></i>
  <span ><h class="dashboard">Transactions</h></span></a>
</li>
 <!-- Nav Item - Transactions -->
 <li class="nav-item ">

<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa fa-power-off"></i>
  <span ><h class="dashboard">Logout</h></span></a>
</li>

<br><br>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
