<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:12" rel="stylesheet" type="text/css">
        <link href="{{asset('material/Materialize/dist/css/materialize.min.css')}}" rel="stylesheet">
        <script src="{{asset('material/Materialize/dist/js/materialize.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav>
        <div class ="nav-wrapper" style="background-color:#f44336;">
            <a href="#" class="brand-logo" style="padding-left:20px;"> <span class="large material-icons">group_work</span> PPL</a>
            <ul href="nav-mobile" class="right hide-on-med-and-down">
                <li style="padding-right:20px">aaa</li>
                <li style="padding-right:20px">bbb</li>
                <li style="padding-right:20px">ccc</li>
            </ul>    
        </div>
        </nav>
        <div class="container">
            <div class="content">
                
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Nama Depan</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Nama Belakang</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">E-mail</label>
        </div>
      </div>
      <a class="waves-effect waves-light btn"><i class="material-icons right">done_all</i>Submit!</a
    </form>
  </div>
        
            </div>
        </div>
        <footer class="page-footer" style="background-color:#ef5350">
         <div class="footer-copyright" style="background-color:#f44336;">
            <div class="container">
            © 2016 Adrianus
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </body>
</html>