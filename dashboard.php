<?php
include('config.php');
include('check.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Dashboard'; //will make the <title> display your current location
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
  <div class="box admin-box">
    <strong><?php echo $lang_shareprofile; ?>:</strong> <a href="<?php echo "http://$host$uri/$extra"; ?>"><?php echo "http://$host$uri/$extra"; ?></a> 

  </div>
</div>

<div class="span12">
  <div class="box">
    <h1><?php echo $lang_myprojects; ?></h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th><?php echo $lang_projectname; ?></th>
          <th><?php echo $lang_description; ?></th>
          <th><?php echo $lang_starttime; ?></th>
          <th><?php echo $lang_language; ?></th>
          <th><?php echo $lang_page; ?></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <?php
// Get all the data from the "example" table
$result = mysql_query("select * from ".$tableprefix."_projects where projectcreatedby='$userid' ")
or die(mysql_error());  
$count=mysql_num_rows($result);
if($count > 0)
        {
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
  // Print out the contents of each row into a table
  echo "<tr><td>"; 
  echo $row['projectname'];
  echo "</td><td>"; 
  echo $row['projectshortdesc'];
    echo "</td><td>"; 
  echo $row['projectcreated'];
    echo "</td><td>"; 
  echo $row['projectlanguage'];
    echo "</td><td>"; 
  echo "<a class='btn btn-info' href='project.php?id={$row['projectid']}'>Click Here</a>";
  echo "</td></tr>"; 
  echo "<tr>
          <td colspan='80%' style='text-align:center;'>$lang_addrepo</td>
        </tr>";
}
} else { 
?>
        <tr>
          <td colspan="100%"><?php echo $lang_noactivity; ?></td>
        </tr>
<?php } ?>
    </table>
  </div>
</div>

        </div><!--/row-->
<?php
echo $foot_template;
?>