<?php $segment = Request::segments();?>

<header>
  <div class="menuSec">
    <div class="container">
      <div class="col-md-2 col-sm-2 col-xs-6"> <a href="{{route('airport_index')}}"><img src="{{asset($logo->img_path)}}" alt="img"/></a> </div>
      <div class="col-md-offset-1 col-md-8 hidden-sm hidden-xs">
        <ul id="menu">
          <li><a href="{{route('airport_index')}}" class="{{request()->routeIs('airport_index') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{route('airport_aboutUs')}}" class="{{request()->routeIs('airport_aboutUs') ? 'active' : '' }}"> About US</a></li>
          <li><a href="{{route('airport_projects')}}" class="{{request()->routeIs('airport_projects') ? 'active' : '' }}">Projects </a></li>
          <li><a href="{{route('airport_whatWeDo')}}" class="{{request()->routeIs('airport_whatWeDo') ? 'active' : '' }}"> What we do</a></li>
          <li><a href="{{route('airport_contactUs')}}" class="{{request()->routeIs('airport_contactUs') ? 'active' : '' }}">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>