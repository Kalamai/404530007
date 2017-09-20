<?php
	// Start the session
	session_start();
?>


<!DOCTYPE html>
<html>
	<body>

		<?php
			// remove all session variables
			session_unset(); 

			echo "登出成功";
			header('location: Login.html');
		?>

	</body>
</html>
