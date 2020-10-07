<?php $segment = Request::segments();?>

<header>
  <div class="menuSec">
    <div class="container">
      <div class="col-md-2 col-sm-2 col-xs-6"> <a href="{{route('home_index')}}"><img src="{{asset($logo1->img_path)}}" alt="img"/></a> </div>
      <div class="col-md-offset-1 col-md-8 hidden-sm hidden-xs">
        <ul id="menu">
          <li><a href="{{route('home_index')}}" class="{{request()->routeIs('home_index') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{route('home_aboutUs')}}" class="{{request()->routeIs('home_aboutUs') ? 'active' : '' }}"> About US</a></li>
          <li><a href="{{route('home_projects')}}" class="{{request()->routeIs('home_projects') ? 'active' : '' }}">Projects </a></li>
          <li><a href="{{route('home_whatWeDo')}}" class="{{request()->routeIs('home_whatWeDo') ? 'active' : '' }}"> What we do</a></li>
          <li><a href="{{route('home_contactUs')}}" class="{{request()->routeIs('home_contactUs') ? 'active' : '' }}">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>