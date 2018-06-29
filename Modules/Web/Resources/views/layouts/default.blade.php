<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新意说-新意说生活</title>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/build.css">
    <link rel="stylesheet" type="text/css" href="css/activity.css">
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <link href="css/zzsc.css" rel="stylesheet" type="text/css"/>
    <link href="css/dlzc.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/main.js"></script>
    <script language="javascript" type="text/javascript" src="js/popwin.js"></script>
    <link rel="stylesheet" type="text/css" href="css/nanoscroller.css">
</head>
<body>
    <header id="top" role="banner" class="transition">
        @include('web::partials.header')
    </header>
    <div class="placeholder-height"></div>
    <div class="container" id="index">
        @yield('content')
    </div>
    <footer class="footer">
        @include('web::partials.footer')
    </footer>
</body>
</html>