<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:12" rel="stylesheet" type="text/css">
        <link href="{{asset('bower_components/Materialize/dist/css/materialize.min.css')}}" rel="stylesheet">
        <script src="{{asset('bower_components/Materialize/dist/js/materialize.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <nav>
    @include('master.head')
  </nav>
    Admin
  <footer class="page-footer" style="background-color:#ef5350">
     @include('master.foot')
  </footer>
    </body>
</html>