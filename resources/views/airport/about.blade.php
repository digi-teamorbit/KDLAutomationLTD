@extends('layouts.main_airport')

<head>
<meta name="description" content="KDL Automation Ltd is a home automation company with in-depth knowledge of industrial and commercial automation systems.">
<meta name="keywords" content=": home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming  ">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>About Us | KDL Automation Ltd</title>

</head>


@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- inner banner start -->
<section class="inner_banner" style="background: url({{asset($inner_banner1->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
        <div class="baner_text inn text-center">
          <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">{{$inner_banner1->title}}</h1>
          <?= html_entity_decode($inner_banner1->description) ?>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- inner banner end -->
<!-- project section start -->
<section class="project_sec about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
          <h2>{{$cms_about->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_about->content) ?>
        </div>
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