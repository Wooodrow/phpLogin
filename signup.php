<?php
include 'header.php';
?>

		<?php 
			if (isset($_SESSION['id'])) {
			}else {
				echo "you are not logged in";
			}

			if (isset($_SESSION['id'])) {
				echo "you are already logged in";
			}else {
				 echo "<form action= 'includes\signup.inc.php' method= 'POST'		
					<input type= 'text' name= 'first' placeholder= 'FirstName'><br>
					<input type= 'text' name= 'last' placeholder= 'LastName'><br>
					<input type= 'text' name= 'uid' placeholder= 'UserName'><br>
					<input type= 'password' name= 'pwd' placeholder= 'Password'><br>
					<button type= 'submit'>Sign Up</button>		
				</form>";
				}		
		?>
	</body>
</html>