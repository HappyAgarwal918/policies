<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Legal Policies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/general.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/data_table.css')}}">
    <style type="text/css">
        .message_align{
            align-items: center;
        }
    </style>
    @yield('css')
</head>
<body>
    @include('layout.header')

    <div style="min-height: 58vh;">
      @yield('content')
    </div>
    @include('layout.footer')

</body>
</html>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('asset/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('asset/js/slick.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<!-- Counts JS start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript">
    // jQuery counterUp
    $('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 1500
    });
    // data Table
    $(document).ready(function() {
        $('#restu_table').DataTable();
    });
    // policies copy link & text
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      if(element == '#policy_html_link'){
        $('#copied-link-success').fadeIn(800);
        }
        if(element == '#policy_html_text'){
            $('#copied-text-success').fadeIn(800);
        }
      $temp.remove();
    }
</script>
<script type="text/javascript">  
$(document).ready(function () {  
$("form").bind("keypress", function (e) {  
if (e.keyCode == 13) {  
return false;  
}  
});  
});  
</script>
    @yield('js')