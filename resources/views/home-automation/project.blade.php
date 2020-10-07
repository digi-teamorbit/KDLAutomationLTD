@extends('layouts.main_home')

<head>
<meta name="description" content="KDL Automation Ltd offers the very best automation system for your home that can be easily controlled from intuitive touch-screen panels or your smart device.">
<meta name="keywords" content=": home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming  ">
<meta name="description" content="Take a look at some of KDL Automation amazing home automation projects that have been completed recently.">
<meta name="keywords" content=": home automation systems, best automation system, automation system installation, automation system optimization, automation system programming ">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Our Projects | KDL Automation Ltd</title>

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
<section class="inner_banner" style="background: url({{asset($inner_banner2->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
        <div class="baner_text inn text-center">
          <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">{{$inner_banner2->title}}</h1>
          <?= html_entity_decode($inner_banner2->description) ?>
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
          <h2>{{$cms_projects->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_projects->content) ?>
        </div>
      </div>
    </div>
  </div>
 <div class="project_page">
   <div class="container">
      <div class="row">
        @foreach ($projects as $project)
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="inner_pro wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <img src="{{asset($project->image)}}" class="img-responsive" alt="">
             <h3>{{$project->title}}</h3>
             <div class="green_line"></div>
             <?= html_entity_decode($truncated = Str::limit($project->short_description, 252)) ?>
          </div>
        </div>  
        @endforeach  
        <!-- <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="inner_pro wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <img src="{{asset('home/images/pro_1.jpg')}}" class="img-responsive" alt="">
             <h3>Title GOes Here</h3>
             <div class="green_line"></div>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          </div>
        </div> -->
      </div>    
      <!-- <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="inner_pro wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <img src="{{asset('home/images/pro_1.jpg')}}" class="img-responsive" alt="">
             <h3>Title GOes Here</h3>
             <div class="green_line"></div>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          </div>
        </div>    
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="inner_pro wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <img src="{{asset('home/images/pro_1.jpg')}}" class="img-responsive" alt="">
             <h3>Title GOes Here</h3>
             <div class="green_line"></div>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          </div>
        </div>
      </div> -->
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