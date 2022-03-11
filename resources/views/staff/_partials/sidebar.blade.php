<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">

<a class="nav-link" href="{{ route('home') }}">
   <img src="{{url('assets/images/logo/logo2.png')}}"/>
  <span></span></a>
  <br>
</li>



  <!-- Nav Item - Dashboard -->
  <li class="nav-item ">

    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">

  </div>




<!-- Nav Item - Customer -->
  <li class="nav-item ">

    <a class="nav-link" href="{{route('admin.customers')}}">
      <i class="fas fa-fw fa-users"></i>
      <span>Customers</span></a>
  </li>




  <!-- Nav Item - Customer -->
  <li class="nav-item ">

    <a class="nav-link" href="{{route('staff.request')}}">
      <i class="fas fa-fw fa-paper-plane"></i>
      <span>Laundry Request</span></a>
  </li>
    <!-- Nav Item - Customer -->
    <li class="nav-item ">

<a class="nav-link" href="{{route('admin.laundry-items')}}">
  <i class="fas fa-fw fa-boxes"></i>
  <span>Laundry Items</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Customer -->
  <li class="nav-item ">

    <a class="nav-link" href="">
      <i class="fas fa-fw fa-calculator"></i>
      <span>Transactions</span></a>
  </li>


   <!-- Nav Item - Transactions -->
 <li class="nav-item ">

<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa fa-power-off"></i>
  <span>Logout</span></a>
</li>

  @can('isAdmin')
    <!-- Nav Item - Customer -->
    <li class="nav-item ">

      <a class="nav-link" href="">
        <i class="fas fa-fw fa-cog"></i>
        <span>Settings</span></a>
    </li>
  @endcan

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
