@extends('myhome.layout')
@section('signin-sec')

<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="/" method="post">
                    <input name="user" type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                   
                 <button class="btn btn-info btn-block login" type="submit">Login</button> 
                 <br>
                  <a href="#" data-toggle="modal" data-target="#login-modal">Register</a>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

          <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Sign Up!</h1><br>
                  <form>
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Register">
                  </form>
                </div>
            </div>
          </div>
           

           

                </form>
            </div>
        </div>
     
</div>
</div>
</div>
@endsection