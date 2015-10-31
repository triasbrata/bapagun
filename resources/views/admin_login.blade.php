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
    <link href="{{ asset("/components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset("/components/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!-- Theme style -->
    <link href="{{ asset("/components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/components/AdminLTE/dist/css/skins/skin-red-light.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/components/toastr/toastr.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ url('') }}">
        <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="img-responsive">
      </a>
    </div>
    <div class="login-box-body">
      <h3 class="text-center full-divided"> Masuk Sistem</h3>
      @yield('form')
    </div>
  </div>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/components/toastr/toastr.min.js") }}"></script>
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
      </script>
</body>
</html>