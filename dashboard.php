<?php
include('config.php');
include('language.php');

//Before Including Template You Can Define Custom Things:
//$sitepage = 'Title'; will make the <title> display your current location
//$default_links = '
//            <li class="active"><a href="#">Dashboard</a></li>
//            <li><a href="#">Active</a></li>
//            <li><a href="#">Completed</a></li>
//            <li><a href="#" data-method="delete" rel="nofollow">Logout</a></li>';
//Default Links Changes The Links At Top

include('template.php');

echo $head_template;
?>
        <div class="row">


          <div class="span12">
  <div class="box admin-box">
    <strong>Share your public website with anyone:</strong> <a href="/">http://ppitech.com/user.php?id=30</a> 

  </div>
</div>

<div class="span12">
  <div class="box">
    <h1>My Projects</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Start time</th>
          <th>Language</th>
          <th>Repo</th>
          <th></th>
          <th></th>
        </tr>
      </thead>

        <tr>
          <td colspan="100%">No Projects!</td>
        </tr>

    </table>
  </div>
</div>

        </div><!--/row-->
<?php
echo $foot_template;
?>