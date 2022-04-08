<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->



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

  @if (Auth::user() && Auth::user()->role == '2')

<li class="nav-item ">
  <a class="nav-link" href="{{route('admin.admin_staff')}}">
  <i class="fa fa-user" aria-hidden="true"></i>
  <span>Admin Staff</span></a>
  </li>

@endif







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

    <a class="nav-link" href="{{route('admin.confirmed-request')}}">
      <i class="fas fa-fw fa-check"></i>
      <span>Confirmed Request</span></a>
  </li>

   <!-- Nav Item - Customer -->
   <li class="nav-item ">

<a class="nav-link" href="{{route('admin.delivered-request')}}">
  <i class="fas fa-fw fa-truck"></i>
  <span>Delivered Laundry</span></a>
</li>


@if (Auth::user() && Auth::user()->role == '2')
    <!-- Nav Item - Customer -->
    <li class="nav-item ">

<a class="nav-link" href="{{route('admin.laundry-items')}}">
  <i class="fas fa-fw fa-boxes"></i>
  <span>Update Price </span></a>
</li>


@endif
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Customer -->
  <li class="nav-item ">

    <a class="nav-link" href="{{route('admin.alltransaction')}}">
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
