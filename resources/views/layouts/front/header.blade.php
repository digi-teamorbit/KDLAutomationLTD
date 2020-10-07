<?php $segment = Request::segments();?>

<div class="topSec">
  <div class="container">
    <div class="col-md-4 col-sm-6 col-xs-6"> <a href="{{ url('/') }}" class="logoImg"><img src="{{ asset($logo->img_path) }}" alt="img" /></a> </div>
    <div class="col-md-8 col-sm-9 col-xs-12 text-right">
      <ul class="list-inline">
        <li><i class="fa fa-envelope" aria-hidden="true"></i> Email Us: {{ App\Http\Traits\HelperTrait::returnFlag(218) }}</li>
        
        <li><i class="fa fa-phone" aria-hidden="true"></i> Call Us:  {{ App\Http\Traits\HelperTrait::returnFlag(59) }}</li>
        <li>
        <a href="{{ App\Http\Traits\HelperTrait::returnFlag(1963) }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>
      </ul>
      <div class="menuSec">
        <ul id="menu">
          <li><a href="{{url('/') }}">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>

          <li><a href="#search" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-search" aria-hidden="true"></i></a></li>

          <li><a href="{{ url('signin') }}" ><i class="fa fa-user" aria-hidden="true"></i></a></li>

        </ul>
      </div>
    </div>
  </div>
</div>