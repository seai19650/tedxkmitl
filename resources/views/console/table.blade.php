@extends('layouts.console')

@section('header')
<meta name="csrf_token" content="{{ csrf_token() }}"/>
<!-- Bootstrap -->
<link href="production/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="production/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="production/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="production/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- Datatables -->
<link href="production/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="production/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="production/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="production/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="production/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="production/build/css/custom.min.css" rel="stylesheet">
@endsection('header')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
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
      <!-- responsive table -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Responsive example<small>Users</small></h2>
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
            <p class="text-muted font-13 m-b-30">
              Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
            </p>

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Card Type</th>
                  <th>Approval</th>
                  <th>Payment</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Registration Date</th>
                </tr>
              </thead>
            </table>


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
<!-- iCheck -->
<script src="production/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="production/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="production/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="production/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="production/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="production/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="production/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="production/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="production/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="production/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="production/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="production/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="production/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="production/vendors/jszip/dist/jszip.min.js"></script>
<script src="production/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="production/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="production/build/js/custom.js"></script>
@endsection('script')
