<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{asset('public/backend/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/backend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/backend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('public/backend/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">



    @include('admin/header')
    @include('admin/menu')
    @yield('layout')
    @include('admin/footer')



  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('public/backend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery.ui.touch-punch.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('public/backend/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('public/backend/lib/common-scripts.js')}}"></script>
  <script src="{{asset('public/backend/lib/orgchart.js')}}"></script>
  <script src="{{asset('public/backend/lib/contract.js')}}"></script>
  
  <!--script for this page-->

</body>

</html>
