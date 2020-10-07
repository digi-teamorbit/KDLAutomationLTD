@extends('layouts.main_airport')

<head>
<meta charset="utf-8">
<meta name="description" content="KDL Automation Ltd provides industrial quality home automation systems to offer you quality of life and give you more time to do what you love.">
<meta name="keywords" content="home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming ">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>: High-Quality Home Automation Systems | KDL Automation Ltd</title>

</head>


@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


<!-- banner start -->
<section class="main_slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="{{asset($banner->image)}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="banner_text text-center">
                <?= html_entity_decode($banner->description) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end --> 
<!-- about us sce  -->
<section class="about_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_text wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
          <h2>{{$cms_home1->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_home1->content) ?>
          <a href="{{route('airport_aboutUs')}}" class="btn"> Read More</a> </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_img wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s"> <img src="{{asset($cms_home1->image)}}" class="img-responsive" alt=""> </div>
      </div>
    </div>
  </div>
</section>
<!-- about us sce  --> 
<!-- what we do sec strt -->
<section class="what_we_sec">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-xs-12 col-sm-6 col-md-6 no_pad_left">
        <div class="what_weimg wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s"> <img src="{{asset($cms_home2->image)}}" class="img-responsive" alt=""> </div>
      </div>
      <div class="col-xs-12 col-md-offset-1 col-sm-5 col-md-5">
        <div class="what_wetext wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
          <h2>{{$cms_home2->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_home2->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
      <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
        <div class="white_box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
          <div class="row">
            <div class="">
              @foreach ($what_we_do as $value)
              <div>
                <div class=" col-md-4">
                  <div class="what_div"> <img src="{{asset($value->image)}}" alt="">
                    <h4>{{$value->title}}</h4>
                    <div class="green_line"></div>
                    <?= html_entity_decode($value->short_description) ?>
                  </div>
                </div>
             </div>
             @endforeach
              <!-- <div>
                <div class="col-md-4">
                  <div class="what_div"> <img src="{{asset('airport/images/ww_5.jpg')}}" alt="">
                    <h4>Programming </h4>
                    <div class="green_line"></div>
                    <p>We are experts in programming automation control systems. We ensure that your automated system is programmed to provide you complete control of your home.  </p>
                  </div>
                </div>
              </div> -->
              <!-- <div>
                <div class="col-md-4">
                  <div class="what_div"> <img src="{{asset('airport/images/ww_6.jpg')}}" alt="">
                    <h4>System Optimisation </h4>
                    <div class="green_line"></div>
                    <p>We offer end-to-end system diagnostics and optimisation to ensure that your home automation systems help you remain energy efficient and providing you full control. </p>
                  </div>
                </div>
             </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- what we do sec end --> 
<!-- project section start -->
<section class="project_sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
          <h2>{{$cms_home3->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_home3->content) ?>
        </div>
      </div>
    </div>
    <div class="pj_bg">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="blogslid">
            @foreach ($projects as $project)
            <div>
              <div class="main_pj"><img src="{{asset($project->image)}}" class="img-responsive" alt=""></div>
            </div>
            @endforeach
            <!-- <div>
              <div class="main_pj"><img src="{{asset('airport/images/pj_1.jpg')}}" class="img-responsive" alt=""></div>
            </div> -->
            <!-- <div>
              <div class="main_pj"><img src="{{asset('airport/images/pj_1.jpg')}}" class="img-responsive" alt=""></div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- project section end --> 
<!-- title sec start  -->
<section class="titel_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>{{$cms_home4->name}}</h2>
        <div class="green_line"></div>
        <?= html_entity_decode($cms_home4->content) ?>
      </div>
    </div>
  </div>
</section>
<!-- title sec end  -->
<!-- contact us sec star -->
<section class="contact-us" style="background: url({{asset($cms_home5->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="contact-main wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <div class="row">
            <div class="main_heading text-center">
              <h2>{{$cms_home5->name}}</h2>
              <div class="green_line"></div>
            </div>
            <div class="contact-form home">
              <div class="row">
                <form method="post" action="{{ route('contactSubmit') }}">
                  @csrf
                  <div class="col-md-6">
                    <div class="name form-group">
                      <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-danger @enderror" placeholder="Your First name" required>
                      @error('first_name')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('first_name') }}</p>
                                  @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="name form-group">
                      <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-danger @enderror" placeholder="Your Last name" required>
                      @error('last_name')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('last_name') }}</p>
                                  @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="details form-group">
                      <input type="text" id="email" name="email" class="form-control @error('email') is-danger @enderror" placeholder="Your Email Address" required>
                      @error('email')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                                  @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="details form-group">
                      <textarea id="message" name="message" rows="8" class="form-control @error('message') is-danger @enderror" placeholder="Comment" required></textarea>
                      @error('message')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
                                  @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="buton">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact us sec end-->

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

<script>
  
$(function () {
$('.blogslid_2').slick({
  arrows: false,
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

    });



</script>
@endsection