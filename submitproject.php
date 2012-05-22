<?php
include('config.php');
include('check.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Submit Project'; //will make the <title> display your current location
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


          <div class="span8 offset2">
  <div class="box box-nopad">
    <h1 class="sign-up">Sign Up</h1>
    <h4 style="font-weight:800">You're just 60 seconds away from from Tech Team goodness.</h4>

    <form accept-charset="UTF-8" action="submit.php" class="form-horizontal" id="addproject" method="post">
<input type="hidden" value="addproject" name="return" />
      <div>
        
          <div class="control-group">
            <label class="control-label" for="projectname">Project Name</label>
            <div class="controls">
              <input class="company-name" id="projectname" name="projectname" placeholder="PPI Wordpress Theme" size="30" type="text" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="projectdescriptionshort">Short Description</label>
            <div class="controls">
              <input class="company-name" id="projectdescriptionshort" name="projectdescriptionshort" placeholder="Short 140 character description to quickly summerize." size="60" type="text" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="projectdescriptionlong">Long Description</label>
            <div class="controls">
              <textarea class="company-name" id="projectdescriptionlong" name="projectdescriptionlong" placeholder="Nearly Unlimited Amount Of Text Can Go Here" size="60"></textarea>
            </div>
          </div>

        <div class="control-group">
          <label class="control-label" for="language">Programming Language</label>
          <div class="controls">
            <input id="language" name="projectlanguage" placeholder="PHP" size="30" type="text" value="" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="reponame">Repository Name</label>
          <div class="controls">
            <input id="reponame" name="projectreponame" placeholder="ppi-wordpress" size="30" type="text" value="" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="projectrepouser">Github/Bitbucket User</label>
          <div class="controls">
            <input id="projectrepouser" name="projectrepouser" placeholder="teamcoltra" size="30" type="text" value="" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="projectrepohost">Repository Host</label>
          <div class="controls">
            <select name="projectrepohost">
              <option value="bitbucket">BitBucket</option>
              <option value="github">GitHub</option>
              <option value="selfhosted">Self-Hosted</option>
            </select>
          </div>
        </div>
        <h3>For Self Hosted Projects</h3>
        <div class="control-group">
          <label class="control-label" for="projectrepourl">Repository URL</label>
          <div class="controls">
            <input id="projectrepourl" name="projectrepourl" placeholder="http://example.com/project/project.git" size="30" type="text" />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="projectrepotype">Type of Repo</label>
          <div class="controls">
            <select name="projectrepotype">
              <option value="GIT">GIT</option>
              <option value="merc">Mercury</option>
              <option value="SVN">SVN</option>
          </div>
        </div>

        <div class="form-actions">
          <input class="btn btn-large btn-info" name="commit" type="submit" value="Create My Account" />
          or <a href="/users/sign_in">login to your account</a>
        </div>

      </div>
</form>  </div>
</div>

        </div><!--/row-->
<?php echo $foot_template; ?>