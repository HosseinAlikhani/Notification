<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V17</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="src/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="src/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    @yield('content')
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="src/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="src/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="src/login/vendor/bootstrap/js/popper.js"></script>
<script src="src/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="src/login/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="src/login/vendor/daterangepicker/moment.min.js"></script>
<script src="src/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="src/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="src/login/js/main.js"></script>

</body>
</html>