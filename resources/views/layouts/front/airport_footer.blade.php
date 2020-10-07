<?php $footercms = DB::table('pages')->where('id', 6)->first(); ?>

<!-- Begin: FOOTER -->

<div class="footerSec">
  <div class="container">
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>information</h5>
        <ul class="linkList">
          <li><a href="{{route('airport_index')}}">Home</a></li>
          <li><a href="{{route('airport_aboutUs')}}">About Us</a></li>
          <li><a href="javascript:void(0)">Services Offered</a></li>
          <li><a href="javascript:void(0)">Job Seekers</a></li>
          <li><a href="javascript:void(0)">School Administrators</a></li>
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="{{route('airport_contactUs')}}">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>Quick Links</h5>
        <ul class="linkList">
          <li><a href="javascript:void(0)">Lorem Ipsum</a></li>
          <li><a href="javascript:void(0)">Dolor Sit Amet</a></li>
          <li><a href="javascript:void(0)">Consectetuer Elite</a></li>
          <li><a href="javascript:void(0)">Adipscing Dummy</a></li>
          <li><a href="javascript:void(0)">Lorem Ipsum</a></li>
          <li><a href="javascript:void(0)">Dolor Sit Amet</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>Help</h5>
        <ul class="linkList">
          <li><a href="javascript:void(0)">Lorem Ipsum</a></li>
          <li><a href="javascript:void(0)">Dolor Sit Amet</a></li>
          <li><a href="javascript:void(0)">Consectetuer Elite</a></li>
          <li><a href="javascript:void(0)">Adipscing Dummy</a></li>
          <li><a href="javascript:void(0)">Lorem Ipsum</a></li>
          <li><a href="javascript:void(0)">Dolor Sit Amet</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot info">
        <h5>contact Info</h5>
        <ul class="linkList">
          <li><a href="javascript:void(0)"><span>Address :</span>{{App\Http\Traits\HelperTrait::returnFlag(519) }}</a></li>
          <li><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><span>Phone : </span>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
          <li><a href="javascript:void(0)"><span>Hours : </span>{{App\Http\Traits\HelperTrait::returnFlag(1967) }}</a></li>
        </ul>
        <div class="social_icon">
          <ul class="list-inline">
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1964) }}" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1968) }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="foot_img"><img src="{{asset('airport/images/f-logo.png')}}" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
  <div class="copy_right text-center">
    <div class="container">
      <p> {{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
    </div>
  </div>
</div>

<!-- END Footer -->  

