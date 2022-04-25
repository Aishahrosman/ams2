<?php
// session_start();

// if(!$_SESSION['email'])
// {
//     header("Location: index.php");
// }else{
// unset($_SESSION['icno']);
// require_once('db/eto.php');
// $user_email =$_SESSION['email'];

 // $check_user="select dealerid from userdth WHERE username='$user_email' and status='ACTIVE'";
 // $run=$conn4->execute($check_user);
	
//  $dealer = $run->fields[0];
//  $_SESSION['dealer'] = $dealer;
 // $roledealer =$_SESSION['dealer']; 
?>
<!DOCTYPE html>
<html lang="en">
<head><title>DTH Sales | Registration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="images/icons/mytv_icon.jpg">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/colorpicker.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-datepicker/css/datepicker.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <link type="text/css" rel="stylesheet"
          href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-clockface/css/clockface.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue.css" id="theme-change"
          class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
	<script type="text/javascript">
	
	// function ConfirmSubmit()
	// {	
	// 	var stbsn = document.getElementById("serialno").value;
		
		
	// 	if (stbsn != "")
	// 	{
	// 		var x = confirm("Are you sure to submit DTH activation?")
			
	// 		 if (x)				
	// 				return true;
	// 		  else
	// 				return false;
			
	// 	}
	// 	else
	// 	{
	// 		alert("Please fill up STB Serial Number!");
	// 		return false;			
	// 	}
	}
	</script>
</head>

<body class=" ">
<div>
    <div class="news-ticker bg-orange">
        <div class="container">
            
            <a id="news-ticker-close" href="javascript:;"><i class="fa fa-times"></i></a></div>
    </div>
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text"><font color="orange">MY</font><font color="blue">TV</font></span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
           <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

            </div>
        </nav>
    </div>
		<div id="wrapper">
			<?php include 'menu.php';?>
			 <div id="page-wrapper">
				<div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet box">                      						
							<div class="portlet-header">
								<div class="caption">Customer Registration</div>								
							</div>																
							<div style="overflow: hidden;" class="portlet-body">
								<div class="portlet-header">
									<form action="joborder-search.php" method="post" autocomplete="off">
										<div class="col-lg-9">													
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group"><label for="inputFirstName"
																					   class="col-md-4 control-label">Ic Number</label>
															<div class="col-md-8">
																<input id="icno" name="icno" type="text" class="input-sm form-control" >
															</div>
														</div>
													</div>																
												</div>															
											</div>
										</div>													
										<div class="col-lg-12">
											<div class="text-center pal">
												<input type="submit" name="search" id="search" value="Search" class="btn btn-success btn-sm">
											</div>
										</div>
									</form>
								</div>
							</div>
							<hr>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">2021 &copy; MYTV Broadcasting Sdn. Bhd.</div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER-->
</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="vendors/jquery-highcharts/highcharts.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>
<script src="vendors/holder/holder.js"></script>
<script src="vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="vendors/charCount.js"></script>
<script src="js/form-components.js"></script>
<!-- <script type="text/javascript">(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-14', 'auto');
ga('send', 'pageview'); -->


</script>
</body>
</html>

<?php
// if(isset($_POST['search']))
// {
// 	$icno=$_POST['icno'];
// 	$_SESSION['icno'] = $icno;
// 	echo "<script>window.open('joborder-creation-dth.php','_self')</script>";
	
// }
?>

<?php 

}

?>







<?php include ('layouts/sidebar.php')?>



<?php include ('layouts/footer.php')?>