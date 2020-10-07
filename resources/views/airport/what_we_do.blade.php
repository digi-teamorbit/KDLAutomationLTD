@extends('layouts.main_airport')

<head>
<meta name="description" content="KDL Automation Ltd offers the very best automation system for your home that can be easily controlled from intuitive touch-screen panels or your smart device.">
<meta name="keywords" content="home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming ">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>What We Do</title>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- inner banner start -->
<section class="inner_banner" style="background: url({{asset($inner_banner3->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
        <div class="baner_text inn text-center">
          <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">{{$inner_banner3->title}}</h1>
          <?= html_entity_decode($inner_banner3->description) ?>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- inner banner end -->
<!-- project section start -->
<section class="project_sec about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
          <h2>{{$cms_whatWeDo->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_whatWeDo->content) ?>
        </div>
      </div>
    </div>
      <div class="wwd_sec">
        <div class="row">
          @foreach ($what_we_do as $value)
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="what_div"> <img src="{{asset($value->image)}}" alt="">
              <h4>{{$value->title}}</h4>
              <div class="green_line"></div>
              <?= html_entity_decode($truncated = Str::limit($value->short_description, 167)) ?>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="what_div"> <img src="{{asset('airport/images/ww_5.jpg')}}" alt="">
              <h4>Programming </h4>
              <div class="green_line"></div>
              <p>We are experts in programming automation control systems. We ensure that your automated system is programmed to provide you complete control of your home.  </p>
            </div>
          </div> -->
          <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="what_div"> <img src="{{asset('airport/images/ww_6.jpg')}}" alt="">
              <h4>System Optimisation </h4>
              <div class="green_line"></div>
              <p>We offer end-to-end system diagnostics and optimisation to ensure that your home automation systems help you remain energy efficient and providing you full control. </p>
            </div>
          </div> -->
        </div>       
         <!-- <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <div class="what_div"> <img src="{{asset('airport/images/ww_2.jpg')}}" alt="">
                    <h4>Electrical Installation 
                      </h4>
                    <div class="green_line"></div>
                    <p>Our licensed electricians can handle almost every aspect of electrical work needed to provide you a reliable home automation infrastructure. </p>
                  </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <div class="what_div"> <img src="{{asset('airport/images/ww_3.jpg')}}" alt="">
                    <h4>IT Installation </h4>
                    <div class="green_line"></div>
                    <p>We have a specialised team that integrates IT in your home to enable single-point control of various devices installed. </p>
                  </div>
          </div>

        </div> -->

      </div>
    </div>
  </div>
</section>


<!-- project section end --> 

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>


@endsection