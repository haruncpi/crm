<?php
require_once("../config.php");
require_once BASE_PATH."/connection.php";
require_once BASE_PATH."/functions.php";

sessionStart();
if(!isLoggedIn()){
	redirectTo(BASE_URL."/admin/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM | Customer Relationship Management</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-2.1.4.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default white-bg" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><i class="fa fa-area-chart"></i> CRM</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, Admin! <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?=BASE_URL."/admin/logout.php" ?>">Logout</a>
										</li>
										
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
	
