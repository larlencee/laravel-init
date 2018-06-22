<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        @include('web::partials.header')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <div class="container-fluid footer-box">
        @include('web::partials.footer')
    </div>
</body>
</html>