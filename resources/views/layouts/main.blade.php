<?php $banner1 = DB::table('banners')->where('id',1)->first(); ?>

<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="description" content="KDL Automation Ltd offers the very best automation system for your home that can be easily controlled from intuitive touch-screen panels or your smart device.">
        <meta name="keywords" content="home automation systems, best automation system, automation system installation, automation system optimisation, automation system programming ">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Admin">
        <meta name="author" content="Admin">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset(!empty($favicon->img_path)?$favicon->img_path:'')}}">
        <!-- <title>{{ config('app.name') }}</title> -->
        <title>Home</title>
        <!-- ============================================================== -->
        <!-- All CSS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts.front.css')
        @yield('css')

    </head>
    <body class="effects" id="effects" style="background: url({{asset($banner1->image)}}) no-repeat top center/ cover;">
      

       
		
		
		 
	

		
        @yield('content')
        
        <!-- ============================================================== -->
        <!-- All SCRIPTS ANS JS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts/front.scripts')
        @yield('js')

    </body>
</html>