<?php
include('config.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Home'; //will make the <title> display your current location
$default_links = '<li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="signup.php">Sign Up</a></li>';
//Default Links Changes The Links At Top
include('template.php');
echo $head_template;
?>
        <div class="row">
          <div class="span12">
  <div class="box box-nopad" style="overflow:hidden;">
    <div class="row row45">
      <div class="span12">

        <h1 id="pricing" class="banner no-border">Projects Currently Being Worked On</h1>

        <div class="row">
          <div class="span8 offset2">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Description</th>
                  <th>Country</th>
                  <th>Language</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="manage-events">Project Name</div>
                    <div>140 Character Project Description To Describe What Project Does.</div>
                  </td>
                  <td><div class="price">Canada</div></td>
                  <td><div class="price">PHP</div></td>
                  <td><button class="btn btn-success">Learn More</button></td>
                </tr>
                <tr>
                  <td>
                    <div class="manage-events">Project Name</div>
                    <div>140 Character Project Description To Describe What Project Does.</div>
                  </td>
                  <td><div class="price">Canada</div></td>
                  <td><div class="price">PHP</div></td>
                  <td><button class="btn btn-success">Learn More</button></td>
                </tr>
                <tr>
                  <td>
                    <div class="manage-events">Project Name</div>
                    <div>140 Character Project Description To Describe What Project Does.</div>
                  </td>
                  <td><div class="price">Canada</div></td>
                  <td><div class="price">PHP</div></td>
                  <td><button class="btn btn-success">Learn More</button></td>
                </tr>
                <tr>
                  <td>
                    <div class="manage-events">Project Name</div>
                    <div>140 Character Project Description To Describe What Project Does.</div>
                  </td>
                  <td><div class="price">Canada</div></td>
                  <td><div class="price">PHP</div></td>
                  <td><button class="btn btn-success">Learn More</button></td>
                </tr>
                <tr>
                  <td>
                    <div class="manage-events">Project Name</div>
                    <div>140 Character Project Description To Describe What Project Does.</div>
                  </td>
                  <td><div class="price">Canada</div></td>
                  <td><div class="price">PHP</div></td>
                  <td><button class="btn btn-success">Learn More</button></td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>

    <div class="row row45">
      <div class="span12">

        <h1 class="banner no-border">What are you waiting for?</h1>

        <div style="text-align:center;">
        <a href="/users/sign_up" class="btn btn-signup btn-info btn-large">Become A Member Now</a>
        <p><small><strong>National Party not required, but suggested. </strong></small></p>
      </div>
      </div>


  </div>
</div>

        </div><!--/row-->
 <?php echo $foot_template; ?>