@extends('mlogin.layout')
@section('loginsection')
<div class = "container">
  <div class="wrapper">
    <form action="" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Sign In</h3>
        <hr class=""><br>
        
        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>          
       
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>        
    </form>     
  </div>
</div>


@endsection

