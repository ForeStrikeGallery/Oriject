<div class="col-sm-3">
		<?php 
			if(logged_in() == true){
				
				include 'includes/widgets/loggedin.php';
			} else {
				include 'includes/widgets/login.php';
				
			}

			include 'includes/widgets/user_count.php'
		?>		
</div>
