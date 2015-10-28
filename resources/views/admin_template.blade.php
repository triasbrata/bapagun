<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/vendor/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset("/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset("/vendor/Ionicons/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/vendor/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/vendor/AdminLTE/dist/css/skins/skin-red-light.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/vendor/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/vendor/AdminLTE/plugins/select2/select2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/vendor/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/vendor/toastr/toastr.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-red-light">
<div class="wrapper">

    <!-- Header -->
    @include('incl.header')

    <!-- Sidebar -->
    @include('incl.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {!! $page_title or "Page Title" !!}
                <small>{{ $page_description or null }}</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('incl.message')
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('incl.umum.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/vendor/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/vendor/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/vendor/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/vendor/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/vendor/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
<!-- SlimScroll -->
<script src="{{ asset("/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("/vendor/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
<script src="{{ asset("/vendor/toastr/toastr.min.js") }}"></script>
<script src="{{ asset("/vendor/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
  @yield('javascript')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
      <script>
          function getMessage () {
              $('#message').children().each(function  (index,e) {
                      toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": true,
                                "progressBar": true,
                                "positionClass": "toast-bottom-left",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "swing",
                                "showMethod": "slideDown",
                                "hideMethod": "slideUp"
                              };
                      if($(e).attr('class') == "error")
                      {
                          message = function  (message) 
                          {
                              toastr.error(message, '');
                          }
                      }
                      else if($(e).attr('class')== "warning")
                      {
                          message = function  (message) 
                          {
                              toastr.warning(message, '');
                          }
                      }
                      else if($(e).attr('class')== "success")
                      {
                          message = function  (message) 
                          {
                              toastr.success(message, '');
                          }
                      }
                      else
                      {
                          message = function  (message) 
                          {
                              toastr.info(message, '');
                          }
                      };
                  $(e).children().each(function  (index,el) {
                      setTimeout(function  () {
                          message($(el).text());
                      },index*500);
                  })
              })
          }
        $(function () {
          $('.datatables').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
          getMessage();
          $('select.form-control').select2();
          $('.datetime-picker').datepicker({
            format:'yyyy-mm-dd'
          });
        });
      </script>
</body>
</html>