@extends('layouts.gentelella')

@section('style')
<style type="text/css">
  #datatable-responsive_filter {
    margin-top: 10px;
  }
  #datatable-responsive_filter input {
    border-radius: 5px;
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
        <h3>Registration</h3>
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
                  <th>Name</th>
                  <th>Invite</th>
                  <th>Answer</th>
                  <th>Card Type</th>
                  <th>Payment</th>
                  <th>Is come</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Recent</th>
                  <th>Registration Time</th>
                </tr>
              </thead>
            </table>

            <!-- modal -->
            <div class="modal" id="answerModal">
              <div class="modal-background"></div>
              <div class="modal-content">
                <!-- content -->
                <div class="columns text-box">
                  <!-- tabs -->
                  <div class="overlay column is-4">Hover to read</div>
                  <div class="column is-4" id="profile">
                    <div id="private-profile">
                      <h5>Name</h5>
                      <p id="profile-name">...</p>
                      <!-- <h5>Occupation</h5>
                      <p id="profile-occupation">...</p> -->
                      <div class="columns">
                        <div class="column is-5">
                          <h5>Ticket</h5>
                          <p id="profile-ticket">...</p>
                        </div>
                        <div class="column is-5">
                          <h5>Gender</h5>
                          <p id="profile-gender">...</p>
                        </div>
                        <div class="column is-2">
                          <h5>Age</h5>
                          <p id="profile-age">...</p>
                        </div>
                      </div>
                    </div>
                    <div id="contact-profile">
                      <h5>Mobile</h5>
                      <p id="profile-mobile">...</p>
                      <h5>Email</h5>
                      <p id="profile-email">...</p>
                    </div>
                  </div>
                  <div class="column is-8" id="questionSection">
                    <div class="tabs is-large">
                      <ul>
                        <li class="is-active"><a class="questionTab">1</a></li>
                        <li><a class="questionTab">2</a></li>
                        <li><a class="questionTab">3</a></li>
                        <li><a class="questionTab">4</a></li>
                        <li><a class="questionTab">5</a></li>
                        <li><a class="questionTab">6</a></li>
                      </ul>
                      <button id="setStateButton2" class="button">Yes</button>
                      <button id="button-fullscreen" class="button">Fullscreen</button>
                    </div>
                    <div class="row question-row">
                      <div id="1" class="question-set col-md-12">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                      <div id="2" class="question-set col-md-12 is-hidden">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                    </div>
                    <div class="row question-row">
                      <div id="3" class="question-set col-md-12 is-hidden">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                      <div id="4" class="question-set col-md-12 is-hidden">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                    </div>
                    <div class="row question-row">
                      <div id="5" class="question-set col-md-12 is-hidden">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                      <div id="6" class="question-set col-md-12 is-hidden">
                        <!-- question -->
                        <div class="question"></div>
                        <!-- answer -->
                        <div class="answer notification"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end content -->
              </div>
            </div>

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
<script src="js/console/table.js"></script>
@endsection('script')
