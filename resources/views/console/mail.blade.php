@extends('layouts.gentelella')

@section('style')
<style type="text/css">

</style>
@endsection

@section('header')
<!-- Bootstrap -->
<link href="production/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="production/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="production/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="production/build/css/custom.min.css" rel="stylesheet">
<link href="css/console/bulma.css" rel="stylesheet">
<link href="css/console/custom.css" rel="stylesheet">
@endsection('header')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Plain Page</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Plain Page</h2>
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
              Add content to the page ...
          </div>
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
<!-- Custom Theme Scripts -->
<script src="production/build/js/custom.min.js"></script>
<script src="js/console/custom.js"></script>
@endsection('script')
