<?php
if ($default_links = NULL) {
  $default_links = '
            <li class="active"><a href="#">'Dashboard'</a></li>
            <li><a href="#">'Active'</a></li>
            <li><a href="#">'Completed'</a></li>
            <li><a href="#" data-method="delete" rel="nofollow">'Logout'</a></li>';
}
if ($sitepage = NULL) {
$sitepage = 'Home';
}
$head_template = "

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$sitename - $sitepage</title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src='http://html5shim.googlecode.com/svn/trunk/html5.js' type='text/javascript'></script>
    <![endif]-->

    <link href='assets/css/custom.css' media='all' rel='stylesheet' type='text/css' />

  </head>
  <body>

    <div class='container'>
  <div class='navbar '>
    <div class='navbar-inner'>
      <a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </a>

        <a href='/' class='brand'>PPI Tech Team</a>

      <div class='container nav-collapse'>
        <ul class='nav pull-right'>
          $default_links
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

    

    <div class='container'>
      <div class='content'>

";
$foot_template = "
      </div><!--/content-->

      <footer>
      <p>Kopimi</p>
      </footer>

    </div> <!-- /container -->

    <!-- Javascripts
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='/assets/js.js' type='text/javascript'></script>

  </body>
</html>
";
