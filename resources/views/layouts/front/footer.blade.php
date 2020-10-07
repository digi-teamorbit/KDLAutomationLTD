<?php $footercms = DB::table('pages')->where('id', 6)->first(); ?>

<!-- Begin: FOOTER -->

<!-- END Footer -->  

<div class="footerSec">
  <div class="container">
    <div class="col-md-3 col-sm-3 col-xs-12"> <img src="{{asset('images/logo.jpg')}}" alt="img" class="footerLogo"/>
      <p>Lorem ipsum dolor sit amet, 
        
        consectetur adipiscing elit, sed 
        
        do eiusmod tempor incididunt ut </p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <h5>Quick Links</h5>
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#">Our Story</a></li>
        <li><a href="#">Get Started</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <h5>Services</h5>
      <ul>
        <li><a href="#">Lorem Ipsum has been</a></li>
        <li><a href="#">Lorem Ipsum has been</a></li>
        <li><a href="#">Lorem Ipsum has been</a></li>
        <li><a href="#">Lorem Ipsum has been</a></li>
        <li><a href="#">Lorem Ipsum has been</a></li>
        <li><a href="#">Lorem Ipsum has been</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <h5>Contact Us</h5>
      <ul class="infoList">
        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Lorem Ipsum has been the industry's standard </li>
       
        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59) }}"> {{ App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>

        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Info@demolinks.com">Info@demolinks.com</a></li>

      </ul>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <h5>Join Our Newsletter</h5>
      <p>Lorem Ipsum has been the industry's standard </p>
      <div class="formSec">
        
        <form method="POST" action="{{url('newsletter-submit')}}">
        @csrf
        <div class="col-md-8 col-sm-8 col-xs-8 noPadding">
          <input type="email" placeholder="Enter Your Email" name="email" />
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 noPadding">
          <input type="submit" value=""/>
        </div>
      
</form>

      </div>
      <ul class="list-inline">
        <li class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2s"><a 
        href="{{ App\Http\Traits\HelperTrait::returnFlag(1963) }}">
        <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
       
        <li class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="2s"><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960)}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s"><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1964) }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="copyrightSec">
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    
      <p>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
    

    </div>
  </div>
</div>

<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="type keyword(s) here" />
    <button type="submit" class="btn btn-green">Search</button>
  </form>
</div>