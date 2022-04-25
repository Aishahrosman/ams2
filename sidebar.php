<script type="text/javascript">
//$(".nav.navbar-nav > li").on("click", function(){
//	alert('test');
//   $(".nav").find(".active").removeClass("active");
///   $(this).parent().addClass("active");
//});



</script>



<?php
// require_once('db/eto.php');

// 	$user_email=$_SESSION['email'];

// 		$queryrole = "select role, fullname from userdth where status='ACTIVE' and username = '$user_email'";
// 		$rsrole = $conn4->execute($queryrole); 
// 		$role = $rsrole->fields[0];
// 		//$installerid = $rsrole->fields[1];
// 		//$masterid = $rsrole->fields[2];
		
?>
			<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
				<div class="sidebar-collapse menu-scroll">
					<ul id="side-menu" class="nav">
						<li class="user-panel">
							<div class="thumb"><img src="images/gallery/people1.png" alt="" class="img-circle"/></div>
							<div class="info"><p><? echo $rsrole->fields[1]; ?></p>
								<ul class="list-inline list-unstyled">
									<li><a href="user-password.php" data-hover="tooltip" title="Profile"><i
											class="fa fa-user"></i></a></li> 
									<li><a href="logout.php" data-hover="tooltip" title="Logout"><i
											class="fa fa-sign-out"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</li>
						 <li>
							<a href="dashboard.php">
								<i class="fa fa-book fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">Dashboard</span>
							</a>
						</li>
                        <li>
                            <a href="#" class="submenu-toggle">
                               <i class="glyphicon glyphicon-user"></i>
                                     <span>Level</span>
                            </a>
                                   <ul class="nav submenu">
                        <li><a href="GF.php">Ground Floor</a> </li>
                        <li><a href="L1.php">Level 1</a> </li>
                        <li><a href="L2.php">Level 2</a> </li>
                        <li><a href="L3.php">Level 3</a> </li>
                        <li><a href="L4.php">Level 4</a> </li>
                        </ul>
                        </li>
                        <li>						
						<?php ?>
						 <li>
							<a href="delete.php">
								<i class="fa fa-book fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">Delete</span>
							</a>
						<!-- </li>
						 <li>
							<a href="approval-search.php">
								<i class="fa fa-book fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">Approve/Reject</span>
							</a>
						</li>
						 <li>
							<a href="stbactivation.php">
								<i class="fa fa-book fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">STB Activation</span>
							</a>
						</li>
						 <li>
							<a href="removesubmission.php">
								<i class="fa fa-book fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">Remove Submission</span>
							</a>
						</li>
						<? } ?>
						<li> -->
							<a href="logout.php">
								<i class="fa fa-sign-out fa-fw">
									<div class="icon-bg bg-orange"></div>
								</i><span class="menu-title">Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			
