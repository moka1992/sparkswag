<div id="navbar">
	<img src="./images/logo.png" alt="">
	<a href="./">Home</a>
	<a href="./?opportunity">Opportunities</a>
	<a href="./?opportunitylist">Create Opportunity</a>
	
	<?php
	if($signedIn === true){
		echo '
		<a href="./?myaccount">My Account</a>
		<a href="./?logout">Log Out</a>';
	}else{
		echo '
		<a href="./?createaccount">Create Account</a>
		<a href="./?login">Log In</a>';
	}
	?>
	
	
</div>