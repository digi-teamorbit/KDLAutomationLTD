@extends('layouts.main_airport')

<head>

<meta name="description" content="Get in touch with us and find about the exiting ways KDL Automation can transform your home.">
<meta name="keywords" content=": home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming  ">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title> Contact Us | KDL Automation Ltd</title>

</head>

@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- inner banner start -->
<section class="inner_banner" style="background: url({{asset($inner_banner4->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
        <div class="baner_text inn text-center">
          <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">{{$inner_banner4->title}}</h1>
          <?= html_entity_decode($inner_banner4->description) ?>
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
          <h2>{{$cms_contact->name}}</h2>
          <div class="green_line"></div>
          <?= html_entity_decode($cms_contact->content) ?>
        </div>
      </div>
    </div>
    <div class="cnct_page">
      <div class="row">
        <div class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
          <div class="col-md-8 col-sm-8">
            <div class="row">
              <div class="contact-form con">
                <div class="row">
                  <form method="post" action="{{ route('contactSubmit') }}">
                    @csrf
                    <div class="col-md-6">
                      <div class="name form-group">
                        <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-danger @enderror" placeholder="Your First name" required="">
                         @error('first_name')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('first_name') }}</p>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="name form-group">
                        <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-danger @enderror" placeholder="Your Last name" required="">
                         @error('last_name')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('last_name') }}</p>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="details form-group">
                        <input type="text" id="email" name="email" class="form-control @error('email') is-danger @enderror" placeholder="Your Email Address" required="">
                         @error('email')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="phone form-group">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Contact No">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="details form-group">
                        <textarea id="message" name="message" rows="8" class="form-control @error('message') is-danger @enderror" placeholder="Comment" required=""></textarea>
                         @error('message')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="buton">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="row">
              <div class="contact-info">
                <div class="col-md-3">
                  <div class="cicle-icon">
                    <img src="{{asset('airport/images/location-icon.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="contact_text">
                    <h2>Mailing Address:</h2>
                    <p>{{App\Http\Traits\HelperTrait::returnFlag(519) }}
                    ​</p>
                  </div>
                </div>
              </div>
              <div class="contact-info">
                <div class="col-md-3">
                  <div class="cicle-icon">
                    <img src="{{asset('airport/images/phone.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="contact_text">
                    <h2>Phone</h2>
                    <p><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></p>
                  </div>
                </div>
              </div>
              <div class="contact-info">
                <div class="col-md-3">
                  <div class="cicle-icon">
                    <img src="{{asset('airport/images/email-icon.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="contact_text">
                    <h2>Email At</h2>
                    <p><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}" class="email-text">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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