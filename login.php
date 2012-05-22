<?php
include('config.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Login!'; //will make the <title> display your current location
$default_links = '<li><a href="about.php">About</a></li>
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>';
//Default Links Changes The Links At Top
include('template.php');
echo $head_template;
?>
        <div class="row">


          <div class="span8 offset2">
  <div class="box box-nopad">
    <h1 class="banner no-border">Welcome back! We missed you.</h1>
    <hr />

    <form accept-charset="UTF-8" action="submit.php" class="form-horizontal" id="new_user" method="post">
      <input type="hidden" value="login" name="return" />
      <div class="control-group">
        <label class="control-label" for="user_email">Username</label>
        <div class="controls">
          <input id="user_email" name="username" size="30" type="text" value="" />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="user_password">Password</label>
        <div class="controls">
          <input id="user_password" name="password" size="30" type="password" />
        </div>
      </div>



      <div class="form-actions">
        <input class="btn btn-large btn-info" name="commit" type="submit" value="Sign in" />
        <a href="/users/password/new">Forgot your password?</a>
      </div>
</form>
  </div>
</div>

        </div><!--/row-->
  <?php echo $foot_template; ?>