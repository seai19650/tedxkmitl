@extends('layouts.gentelella')

@section('header')
<meta name="csrf_token" content="{{ csrf_token() }}"/>
<meta charset="utf-8" http-equiv="content-Type" content="text/html">
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

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Age graph<small>Male:Female</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>


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
<!-- Chart.js -->
<script src="production/vendors/Chart.js/dist/Chart.min.js"></script>


<!-- Custom Theme Scripts -->
<script src="production/build/js/custom.js"></script>
<script src="js/console/custom.js"></script>
<script src="js/console/chart.js"></script>
<script type="text/javascript">
  function disable_scroll() {
      // disable scrolling
      $('html').css({
          overflow: 'hidden',
          height: '100%'
      });
  }

  // disable_scroll();
</script>
@endsection('script')
