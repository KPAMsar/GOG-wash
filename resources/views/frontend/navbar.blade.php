<nav class="navbar navbar-expand-xl navbar-sticky" id="primary-menu"><a class="navbar-brand" href="index-2.html"><img class="logo logo-dark" src="assets/images/logo/logo1.png" alt="Medisch Logo" /><img class="logo logo-mobile" src="assets/images/logo/logo.png" alt="Medisch Logo" /></a>
<div class="module-holder module-holder-phone">


<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
</div>
<div class="collapse navbar-collapse" id="navbarContent">
<ul class="navbar-nav mx-auto">
<li class="nav-item has-dropdown active" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Home</span></a>

</li>
<li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>About Us</span></a>
<ul class="dropdown-menu">

<li class="nav-item"><a id="how_it_works"><span>how it works</span></a></li>


<li class="nav-item"><a href="page-locations.html"><span>Address</span></a></li>
<!-- <li class="nav-item"><a href="page-gallery.html"><span>our gallery</span></a></li> -->

</ul>
</li>

<li class="nav-item has-dropdown mega-dropdown" data-hover=""><a class="dropdown-toggle" href="page-services.html" data-toggle="dropdown"><span>services</span></a>
<ul class="dropdown-menu">
<li>
<div class="row">
<div class="col col-md-6">
<h5 class="menu-head">services we offer</h5>
<ul>
<li class="nav-item"><a href="service-commercial-disinfection.html"><span>Commercial Disinfection</span></a></li>
<li class="nav-item"><a href="service-project-cleaning.html"><span>Project Based Cleaning</span></a></li>
<li class="nav-item"><a href="service-commercial-cleaning.html"><span>Commercial Cleaning</span></a></li>
<li class="nav-item"><a href="service-disinfection-cleaning.html"><span>Disinfection Cleaning</span></a></li>
<li class="nav-item"><a href="service-coronavirus-cleaning.html"><span>Coronavirus Cleaning</span></a></li>
<li class="nav-item"><a href="service-janitorial-services.html"><span>Janitorial Services</span></a></li>
</ul>
</div>
<div class="col col-md-6">
<h5 class="menu-head">industries we serve</h5>
<ul>
<li class="nav-item"><a href="industry-manufacturing-facilities.html"><span>Manufacturing Facilities</span></a></li>
<li class="nav-item"><a href="industry-government-buildings.html"><span>Government buildings</span></a></li>
<li class="nav-item"><a href="industry-educational-facilities.html"><span>Educational Facilities</span></a></li>
<li class="nav-item"><a href="industry-financial-Institutions.html"><span>Financial Institutions</span></a></li>
<li class="nav-item"><a href="industry-medical-facilities.html"><span>Medical Facilities</span></a></li>
<li class="nav-item"><a href="industry-office-buildings.html"><span>Office Buildings</span></a></li>
</ul>
</div>
</div>
</li>
</ul>
</li>
<li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>pricing</span></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="page-pricing.html"><span>Our Pricing</span></a></li>
<li class="nav-item"><a href="page-pricing-offers.html"><span>special offers</span></a></li>
<li class="nav-item"><a href="page-request-estimate.html"><span>Laundry Request</span></a></li>
</ul>
</li>


<li class="nav-item" id="contact" data-hover=""><a href="page-contact.html"><span>Contact Us</span></a></li>
</ul>
<div class="module-holder">

<div class="module module-search">

</div>


<div class="module-contact">

    @if(Auth::check()){
        
    }
    @else{
        <a class="btn btn--secondary" href="page-request-estimate.html">Laundry Request</a>
    }
    @endif


    
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a class="btn btn--secondary" href="page-request-estimate.html">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
    @endif
   
</div>
<div class="module module-cart">
<div class="module-icon module-icon-cart">

</div>
<div class="module-cart-warp">

</div>
</div>
</div>

</div>

</nav>
