@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="landing-page" style="background: url({{asset($banner2->image)}}) no-repeat top center/ cover;">
      <div class="container-fluid">
        <div class="landing-pagending-header">
          <div class="landing-header-item">
            <!-- <h1 class=" wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="15s">Coming Soon</h1> -->
            <a href="{{route('home')}}" class="logo-link"><img src="{{asset('images/logo-left.png')}}"></a>
          </div>
        </div>
        <div class="landing-content">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="landing-content-item landing-content-left  wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
                <?= html_entity_decode($banner2->description) ?>
                <a href="{{route('airport_index')}}" class="landing-btn">Enter Site</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="landing-content-item landing-content-right  wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
                <?= html_entity_decode($banner1->description) ?>

                <a href="{{route('home_index')}}" class="landing-btn">Enter Site</a>
              </div>
            </div>
          </div>
        </div>
        <div class="landing-footer">
          <div class="landing-footer-item">
            <h3><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></h3>
            <a href="{{route('home')}}" class="flogo-link"><img src="{{asset('images/logo-right.png')}}"></a>
          </div>
        </div>
      </div>
    </section>

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
            new WOW().init();
        });
    </script>
@endsection