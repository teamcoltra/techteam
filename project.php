<?php
include('config.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Project Page'; //will make the <title> display your current location
//$default_links = '
//            <li class="active"><a href="#">Dashboard</a></li>
//            <li><a href="#">Active</a></li>
//            <li><a href="#">Completed</a></li>
//            <li><a href="#" data-method="delete" rel="nofollow">Logout</a></li>';
//Default Links Changes The Links At Top
include('template.php');
echo $head_template;
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "user.php?id=$userid";
?>
        <div class="row">
          <div class="span12">
  <div class="box box-nopad" style="overflow:hidden;">

    <div class="span7">
      <!--This is where we will put API-->dd
    </div>
    <div class="span4 hero">
      <h1 class="get-organized banner no-border">Project Name</h1>
      <div class="signup-link">
        <p class="no-obligation"><small><strong>Project-Short</strong></small></p>
      </div>
    </div>

    <div class="row row45">
      <div class="span12">
        <hr />

        <h1 class="banner no-border">Short Title of Less Than 140 Characters</h1>

        <div class="row">
          <div class="span8 offset2">
            <p>kldfa jlfdkjs lkjfldks jlfkasdj lsdajf kdsjlf jldsjf lkdsjf lkjldkjfaj jnsd fuenfuidsha unuihfisbdifiub fiusdhfj bdisufdsif udsbafy dsiaunfi dhs ifbsdi hy jsdnb ifsd kfds fidsnfij bdsiufn isduhf dsjb findsi nsdjbf isdjn sdbfi nsdibf isdbf sdbf sdbifdsb idfhsi fsiufbsdib fisdbfi</p>
          </div>
        </div>

      </div>
    </div>

    <div class="row row45">
      <div class="span12">
        <hr />

        <h1 class="banner no-border">Are You In?</h1>

        <div style="text-align:center;">
        <a href="mailto:useraddress" class="btn btn-signup btn-info btn-large">Email Project Manager</a>
        <p><small><strong>Also, remember you can always discuss on the mailing list.</strong></small></p>
      </div>
      </div>


  </div>
</div>

        </div><!--/row-->
 <?php
echo $foot_template;
?>

