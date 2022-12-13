<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    @inertiaHead
  </head>
  <body class="bg-gray-100">
    @inertia
       <!-- Bootstrap core JavaScript-->
       <script src="/vendor/jquery/jquery.min.js"></script>
       <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
       <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
       <script src="/js/sb-admin-2.min.js"></script>
  </body>
</html>