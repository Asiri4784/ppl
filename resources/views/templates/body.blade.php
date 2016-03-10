 <div class="container">
      <div class="content">
      <form action="{{route('postlogin')}}" method="POST">
           {{ csrf_field() }}
                <div class="row">
                  <div class="input-field col s12">
                    <input placeholder="Username" id="username" type="text" class="validate" name="username">
                  </div>
                </div>
            <div class="row">
                <div class="input-field col s12">
                <input  placeholder="Password" id="password" type="password" class="validate" name="password">
                </div>
            </div>
      <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">done_all</i>Submit!</button>
    </form>
    </div>
  </div>