<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('dashboard.php', false);}
?>

<?php include_once('layouts/header-login.php'); ?>


<div class="page-form">

    <form action="auth.php" class="form" method="post">
        <div class="header-content"><h1>Log In AMS</h1></div>
        <div class="body-content"><p></p>
        <?php echo display_msg($msg); ?>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i>
                  <input type="email" placeholder="Username" name="username" id="username" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <div type = 'css/text' class="input-icon right"><i class="fa fa-key"></i>
                 <input type="password" placeholder="Password" name="password" id="password" class="form-control" 
                  >
                </div>
            </div>
            <div class="form-group pull-left">
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
        </div>
            <div class="clearfix"></div>
            <div class="forget-password"><h4>Forgotten your Password?</h4>

                <p>no worries, click <a href='forgot.php'><font color="blue">here</font></a> to reset your password.</p></div>
            <hr>
              
    </form>
	
</div>
		<!--BEGIN FOOTER-->
        <?php include_once('layouts/footer.php'); ?>
        <!--END FOOTER--><!--END PAGE WRAPPER-->
</div>

