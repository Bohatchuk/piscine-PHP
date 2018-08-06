<div id="header"">
			<h1>Sweets shop "LOLLIPOP"</h1>
			<ul class="navigation">
				<li><a href="index.php">Home Page</a></li>
				<li><a href="sweets.php">Sweets</a>
					<ul id="sweets">
						<li><a href="cakes.php">Cakes</a></li> 
						<li><a href="macarons.php">Macarons</a></li> 
					</ul>
				</li>
				<li><a href="basket.php">Basket</a></li>
				<li><a href="registration_form.php">Registration</a></li>
				<li><a href="sign_in_form.php">Sign in</a></li>
			</ul>
			<br />
			<div align="center" style="margin-top: 100px;">
				<?php if ($_SESSION['logged_in_user']):?>
				<h2 style="color: #FFFFFF"><?php echo $_SESSION['logged_in_user']?></h2>
				<h2 style= "border-radius: 5px; background-color: #FFDAB9; border: 1px solid #8B4C39; margin-left: 350px; margin-right: 350px; background: -webkit-linear-gradient(#FFDAB9 0%, #FA8072 0%, #FFDAB9 0%, #FA8072 100%;" > <a href="logout.php" style="text-decoration: none; ">LOGOUT</a></h2>
				<?php endif; ?>

			</div>
</div>
	
