<?php
session_start();
$loggedUser = isset($_SESSION['uname']);?>
<?php if (($loggedUser != "") & ($loggedUser != "0")) :?>
	<?php require('C:\xampp\htdocs\InventoryWebsite\NavBar\navbar.php');?>

	<div class="container bgColor">
        	<main role="main" class="pb-3">
            <h2><?php echo "Welcome to Bank ABC!" ?></h2>
			<br>


			<div class="headingCenter" >
				<h3 style="padding: 0px 140px"><?php echo "Sign up to our bank to earn yourself a chance to win <b>£10,000 !</b> " ?><h3>
				<h4 style="margin: 0px 450px;font-size: 15px"><?php echo " <b>(New registers only)</b>"?><h4>
           </div>
			
			<div style="margin-left:260px; margin-top:50px">
				<?php echo "This campaign is <b> ONLY </b> available for new customers."?>
				<?php echo "To proceed, please click "?> <a href="JoinCampaign.php">here</a> 
			</div>
        
		
		</main>
	</div>
<?php else: ?>
	<?php require('C:\xampp\htdocs\InventoryWebsite\NavBar\defaultNavbar.php');?>
<div>
	<?php echo "Login has failed."?>
</div>
<?php endif ;?>



