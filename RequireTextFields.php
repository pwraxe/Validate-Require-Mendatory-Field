<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<style type="text/css">
			fieldset{
				width: 350px;
				margin-top: 200px;
			}
			.error{
				color: #FF0000;
			}
		</style>
	</head>
	<body>
		<?php 
			$fnameErr = $lnameErr = $emailErr = $mobileErr = 
			$FN = $LN = $EML = $MOB = "";

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(empty($_POST["fname"]))
					$fnameErr = "First Name Require";
				else
					$FN = $_POST["fname"];

				if(empty($_POST["lname"]))
					$lnameErr = "Last Name Require";
				else
					$LN = $_POST["lname"];

				if(empty($_POST["email"]))
					$emailErr = "Email Require";
				else
					$EML = $_POST["email"];
				
				if(empty($_POST["mobile"]))
					$mobileErr = "Mobile No Require";
				else
					$MOB = $_POST["mobile"];
			}

			echo "$FN $LN <br>$EML <br> $MOB";

		?>

		<center>
			<fieldset>
				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					First Name: 
					<input type="text" name="fname">
					<span class="error">* <?php echo $fnameErr; ?></span>
					<br><br>

					Last Name:
					<input type="text" name="lname">
					<span class="error">* <?php echo $lnameErr; ?></span>
					<br><br> 

					Email ID:
					<input type="email" name="email">
					<span class="error">* <?php echo $emailErr; ?></span>
					<br><br>

					Mobile No:
					<input type="number" name="mobile">
					<span class="error">* <?php echo $mobileErr; ?></span>
					<br><br>

					<input type="submit" name="sunmit">	

				</form>

			</fieldset>

		</center>


 
	</body>
</html>
