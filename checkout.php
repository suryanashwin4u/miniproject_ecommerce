<?php
session_start();
include("includes/mydb.php");
include("functions/functions.php");
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>myecommerce.com</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="styles/bootstrap framework.css" rel="stylesheet" type="text/css">
	<link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link href="styles/media.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jqueryframework.js"></script>
	<script type="text/javascript" src="js/glm-ajax.js"></script>
	<script type="text/javascript" src="js/bootstrapjs.js"></script>
	<script type="text/javascript" src="js/popoverframework.js"></script>
	<script type="text/javascript" src="js/mymain.js"></script>

</head>

<body>
	
	<!--header1-->
	
	<div id="top">
		<div class="container">
			<!--top left-->
			<div class="offer">
				<a href="#" class="btn btn-danger btn-sm">
					<?php 
					if(!isset($_SESSION['customer_email']))
					{
						echo "welcome guest";
					}
					else
					{
						echo "welcome:".$_SESSION['customer_email']."";
					}
					?>
				</a>
				<a href="#">shopping cart total price: INR  , Total Items:  </a>
			
			</div>
			
			<!--top right-->
			<div>
				<ul class="menu">
					<li>
					<a href="cus_reg.php"> Register</a>
					</li>

					<li>
					<?php 
						if(!isset($_SESSION['customer_email']))
						{
							echo "<a href='checkout.php'>My Account</a>";
						}
						else
						{
							echo "<a href='customer/myaccount.php?myorder'>My Account</a>";
						}
						?>
					</li>


					<li>
					<a href="cart.php"> go to cart</a>
					</li>


					<li>
						<?php
						if(!isset($_SESSION['customer_email']))
						{
							echo "<a href='checkout.php'>Login</a>";
						}
						else
						{
							echo "<a href='logout.php'>logout</a>";
						}
						?>
					</li>
				</ul>
			</div>
		</div>

<!--header2--->
		<div class="navbar navbar-default" id="navbar">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand home" href="index.php">
						<img src="images/hcl.jpg" alt="myLlogo" class="hidden-xs">
						<img src="images/lg.jpg" alt="mySlogo" class="visible-xs">
					</a>	
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">toggle navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
						<span class="sr-only"></span>
						<i class="fa fa-search"></i>
					</button>
				</div>

				<div class="navbar-collapse"  id="navigation">
					<div class="padding-nav">
						<ul class="nav navbar-nav navbar-left">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="shop.php">Shop</a>
							</li>
							<li>
								<?php
						if(!isset($_SESSION['customer_email']))
						{
							echo "<a href='checkout.php'>Login</a>";
						}
						else
						{
							echo "<a href='logout.php'>logout</a>";
						}
					?>
				
							</li>
							<li>
								<a href="cart.php" >Shopping Cart</a>
							</li>
							
							<li>
								<a href="contactus.php">Contact Us</a>
							</li>
						</ul>
					</div>
					<a href="cart.php" class="btn btn-primary navbar-btn right">
						<i class="fa fa-shoppin-cart"></i>
						<span>4 items in cart</span>
					</a>
					
					<div class="navbar-collapse collapse right">
						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
							<span class="sr-only">Toggle Search</span>
							<i class="fa fa-search"></i>
						</button>
					</div>
					

					<div class="collapse clearfix" id="search">
						<form class="navbar-form" method="get" action="result.php">
							<div class="input-group">
								<input type="text" name="user_query" placeholder="search" class="form-control" required="">
							
							<span class="input-group-btn">
								<button type="button" value="search" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</span>
							</div>
						</form>
					</div>
				</div>
				
			</div>	

		</div>
	</div>


	<div id="content">
		<div class="container">
			<div class="col-md-12 p-4">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>check-out</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<?php
		if(!isset($_SESSION['customer_email']))
		{
			include('customer/customer_login.php');
		}
		else
		{
			include('payment_options.php');
		}
		?>
	</div>

	<?php 
	include("includes/footer.php");
	?>