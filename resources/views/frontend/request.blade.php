@include('frontend.header')

<h2 class="hero-title text-center" style="padding-top:40px;"> Laundry Request</h2>

<section class="pricing-request" id="pricing-request">
<div class="container">
<div class="row">
<div class="col-12 col-lg-4 order-1">

<div class="sidebar sidebar-pricing">

<div class="widget widget-reservation bg-overlay bg-overlay-theme-light">
<div class="bg-section"><img src="assets/images/blog/sidebar/reservation.jpg" alt="img" /></div>
<div class="card-badge"> <img src="assets/images/sidebar/badge.png" alt="Badge" /></div>
<div class="widget-content">
<div class="heading heading-5 heading-light-2">
<p class="heading-subtitle">Cleaning Excellence!</p>
<h2 class="heading-title">Expanded !</h2>
<p class="heading-desc">The processes and systems we put in place provide high quality service with a focus on safety.</p>
</div>
</div>
</div>


<div class="widget widget-download">
<div class="widget-title">
<h3>For Complaints</h3>
</div>
<div class="widget-content">
<ul class="list-unstyled">
<li><a href="javascript:void(0)">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18">
<g>
<g>
<g>
<path class="shp0" d="M2.12 2L2.93 1L14.93 1L15.87 2L2.12 2ZM9 14.5L3.5 9L7 9L7 7L11 7L11 9L14.5 9L9 14.5ZM17.54 2.23L16.15 0.55C15.88 0.21 15.47 0 15 0L3 0C2.53 0 2.12 0.21 1.84 0.55L0.46 2.23C0.17 2.57 0 3.02 0 3.5L0 16C0 17.1 0.9 18 2 18L16 18C17.1 18 18 17.1 18 16L18 3.5C18 3.02 17.83 2.57 17.54 2.23Z"></path>
</g>
</g>
</g>
</svg><span>company report 2022</span></a></li>
<li class="inversed"><a href="javascript:void(0)">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18">
<g>
<g>
<g>
<path class="shp0" d="M2.12 2L2.93 1L14.93 1L15.87 2L2.12 2ZM9 14.5L3.5 9L7 9L7 7L11 7L11 9L14.5 9L9 14.5ZM17.54 2.23L16.15 0.55C15.88 0.21 15.47 0 15 0L3 0C2.53 0 2.12 0.21 1.84 0.55L0.46 2.23C0.17 2.57 0 3.02 0 3.5L0 16C0 17.1 0.9 18 2 18L16 18C17.1 18 18 17.1 18 16L18 3.5C18 3.02 17.83 2.57 17.54 2.23Z"></path>
</g>
</g>
</g>
</svg><span>company brochure</span></a></li>
</ul>
</div>
</div>

</div>

</div>
<div class="col-12 col-lg-8 order-0 order-lg-2">
<div class="contact-card contact-card-2">
<div class="contact-body">
<h3 class="card-heading">Complete Your Request</h3>
<p class="card-desc">For a cleaning that meets your highest standards, you need a dedicated team of trained specialists with all supplies needed to thoroughly clean your home.</p>
<form class="contactForm" method="post" action="https://demo.zytheme.com/sanera/assets/php/contact.php">



<div class="block-info">
<p class="card-desc">Kindly provide your personal informations  below to enable us reach you:</p>
<div class="row">
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-name">Name *</label>
<input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="Enter your name" required="required" />
</div>
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-phone">Phone *</label>
<input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="Your phone number" required="required" />
</div>
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-email">Email *</label>
<input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="Enter your email" required="required" />
</div>
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-email">Address(Where to pickup laundry)*</label>
<input class="form-control" type="text" id="contact-address" name="address" placeholder="Your pick up address" required="required" />
</div>
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-email">Address(Where to pickup laundry)*</label>
<input class="form-control" type="text" id="contact-address" name="address" placeholder="Your pick up address" required="required" />
</div>
<div class="col-12 col-md-6">
<label class="form-label required" for="contact-city">City *</label>
<input class="form-control" type="text" id="contact-city" name="contact-city" placeholder="Your" required="required" />
</div>



<div class="col-12">
<label class="form-label" for="contact-message">Additional Details </label>
<textarea class="form-control" name="contact-message" id="contact-message" cols="30" rows="2" placeholder="Text here" required=""></textarea>
</div>
</div>

</div>

<button class="btn btn--alternative w-100">submit request <i class="icon-arrow-right"></i></button>
<div class="contact-result"></div>
</form>
</div>

</div>

</div>
</div>

</div>

</section>

@extends('frontend.footer')
