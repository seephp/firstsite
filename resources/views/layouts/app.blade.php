<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.0/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('temp/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('temp/jumbotron.css')}}" rel="stylesheet">
</head>

<body>

@include('partials.navbar')

@yield('content')

</body>

<footer class="container">
    @include('partials.footer')
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./Jumbotron Template for Bootstrap_files/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="./Jumbotron Template for Bootstrap_files/popper.min.js"></script>
<script src="./Jumbotron Template for Bootstrap_files/bootstrap.min.js"></script>


</body>
</html>