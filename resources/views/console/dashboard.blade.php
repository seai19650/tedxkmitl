@extends('layouts.gentelella')

@section('header')
<!-- Bootstrap -->
<link href="production/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="production/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="production/vendors/nprogress/nprogress.css" rel="stylesheet">



<!-- Custom Theme Style -->
<link href="production/build/css/custom.css" rel="stylesheet">
<link href="css/console/bulma.css" rel="stylesheet">
<link href="css/console/custom.css" rel="stylesheet">
@endsection('header')

@section('content')
<!-- page content -->
<div class="right_col" role="main">

  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Registrations</span>
      <div class="count green">{{ $stat['total'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Invites</span>
      <div class="count">{{ $stat['invite'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Paid</span>
      <div class="count">{{ $stat['paid'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Male</span>
      <div class="count">{{ $stat['male'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Female</span>
      <div class="count">{{ $stat['female'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Day left </span>
      <div class="count">{{ $stat['dayleft'] }}</div>
    </div>
  </div>
  <!-- end top tiles -->



</div>
<!-- /page content -->
@endsection('content')

@section('script')
<!-- jQuery -->
<script src="production/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="production/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="production/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="production/vendors/nprogress/nprogress.js"></script>


<!-- Custom Theme Scripts -->
<script src="production/build/js/custom.min.js"></script>
<script src="js/console/custom.js"></script>
@endsection('script')
