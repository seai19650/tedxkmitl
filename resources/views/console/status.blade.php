@extends('layouts.gentelella')

@section('style')
  <style type="text/css">
    #datatable-responsive_filter {
      margin-top: 10px;
    }
    #datatable-responsive_filter input {
      border-radius: 5px;
    }
    tr td {
      padding-top: 10px!important;
    }
  </style>
@endsection

@section('header')
  <meta name="csrf_token" content="{{ csrf_token() }}"/>
  <meta charset="utf-8" http-equiv="content-Type" content="text/html">
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
  <link href="production/build/css/custom.css" rel="stylesheet">
  <link href="css/console/bulma.css" rel="stylesheet">
  <link href="css/console/custom.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
@endsection('header')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Status</h3>
        </div>

        <div class="title_right">
          <!-- search bar -->
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <!-- responsive table -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>ID</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Keycard</th>
                  <th>Created at</th>
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
  <script src="js/console/custom.js"></script>
  <script src="js/console/status.js"></script>
@endsection('script')
