<?php
		$host = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$db = 'webdev9';
		
		$conn = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($db,$conn);
	
	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$confiemail = $_POST['confiemail'];
		$password = $_POST['pass'];
		$confipass = $_POST['confipass'];
		
		if ($email==$confiemail) {
			if ($password==$confipass) {
				$fname = mysql_escape_string($fname);
				$mname = mysql_escape_string($mname);
				$lname = mysql_escape_string($lname);
				$gender = mysql_escape_string($gender);
				$dob = mysql_escape_string($dob);
				$uname = mysql_escape_string($uname);
				$email = mysql_escape_string($email);
				$confiemail = mysql_escape_string($confiemail);
				$password = mysql_escape_string($password);
				$confipass = mysql_escape_string($confipass);

				$sql = "SELECT * FROM member WHERE strUserName='$uname'";
				$result = mysql_query($sql);
				
				if(mysql_num_rows($result)>0){
					$page = <<<EOT
<html>
<title>Aqua Blue Sports Wear Website</title>
<link rel="stylesheet" href="index.css" type="text/css"/>
<body>
	<div class="main">
		<div class="head">
			<h1>Aqua Blue Sports Wear Website</h1>
		</div>
		<div class="subhead">
			<div class="navigation">
				<a href="index.php">
				<button class="butt">
					Home
				</button></a>
				<a href="catalog.php">
				<button class="butt">
					Catalog
				</button></a>
				<a href="inventory.php">
				<button class="butt">
					Inventory
				</button></a>
				<a href="register.php">
				<button class="butt">
					Register
				</button></a>
				<a href="login.php">
				<button class="butt">
					Login
				</button></a>
			</div>
		</div>
		<div class="content">
			<form action="register.php" method="post">
				<fieldset class="field">
					It seems that this account already exist. Please fill out this form again.<br>
					<center>
						<h1>Register an Account</h1>
					</center>
					First Name:
					<input type="text" name="fname"/>
					<br />
					Middle Name:
					<input type="text" name="mname"/>
					<br />
					Last Name:
					<input type="text" name="lname"/>
					<br />
					Gender:
					<input type="text" name="gender"/>
					<br />
					Date of Birth:
					<input type="text" name="dob"/>
					<br />
					Username:
					<input type="text" name="uname"/>
					<br />
					Email Address:
					<input type="text" name="email"/>
					<br />
					Confirm Email Address:
					<input type="text" name="confiemail"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					Confirm Password:
					<input type="password" name="confipass"/>
					<br />
					<input type="submit" value="Submit" name="submit"/>
					<input type="submit" value="Reset" name="reset"/>
				</fieldset>
			</form>
		</div>
		<div class="footer">
			&copy; Team Monochrome
		</div>
	</div>
</body>
</html>
EOT;

echo $page;
				}
				else {
					$query = "INSERT INTO member (intID,strFirstName,strMiddleName,strLastName,strGender,strDOB,strUserName,strEmail,strPassWord) VALUES (NULL,'$fname','$mname','$lname','$gender','$dob','$uname','$email','$password')";
					$data = mysql_query($query);
					$page = <<<EOT
<html>
<title>Aqua Blue Sports Wear Website</title>
<link rel="stylesheet" href="index.css" type="text/css"/>
<body>
	<div class="main">
		<div class="head">
			<h1>Aqua Blue Sports Wear Website</h1>
		</div>
		<div class="subhead">
			<div class="navigation">
				<a href="index.php">
				<button class="butt">
					Home
				</button></a>
				<a href="catalog.php">
				<button class="butt">
					Catalog
				</button></a>
				<a href="inventory.php">
				<button class="butt">
					Inventory
				</button></a>
				<a href="register.php">
				<button class="butt">
					Register
				</button></a>
				<a href="login.php">
				<button class="butt">
					Login
				</button></a>
			</div>
		</div>
		<div class="content">
			<center>Registration complete</center>
		</div>
		<div class="footer">
			&copy; Team Monochrome
		</div>
	</div>
</body>
</html>
EOT;

echo $page;
				}
			} else {
				$page = <<<EOT
<html>
<title>Aqua Blue Sports Wear Website</title>
<link rel="stylesheet" href="index.css" type="text/css"/>
<body>
	<div class="main">
		<div class="head">
			<h1>Aqua Blue Sports Wear Website</h1>
		</div>
		<div class="subhead">
			<div class="navigation">
				<a href="index.php">
				<button class="butt">
					Home
				</button></a>
				<a href="catalog.php">
				<button class="butt">
					Catalog
				</button></a>
				<a href="inventory.php">
				<button class="butt">
					Inventory
				</button></a>
				<a href="register.php">
				<button class="butt">
					Register
				</button></a>
				<a href="login.php">
				<button class="butt">
					Login
				</button></a>
			</div>
		</div>
		<div class="content">
			<form action="register.php" method="post">
				<fieldset class="field">
					Password don't match. Please input it again.<br>
					<center>
						<h1>Register an Account</h1>
					</center>
					First Name:
					<input type="text" name="fname"/>
					<br />
					Middle Name:
					<input type="text" name="mname"/>
					<br />
					Last Name:
					<input type="text" name="lname"/>
					<br />
					Gender:
					<input type="text" name="gender"/>
					<br />
					Date of Birth:
					<input type="text" name="dob"/>
					<br />
					Username:
					<input type="text" name="uname"/>
					<br />
					Email Address:
					<input type="text" name="email"/>
					<br />
					Confirm Email Address:
					<input type="text" name="confiemail"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					Confirm Password:
					<input type="password" name="confipass"/>
					<br />
					<input type="submit" value="Submit" name="submit"/>
					<input type="submit" value="Reset" name="reset"/>
				</fieldset>
			</form>
		</div>
		<div class="footer">
			&copy; Team Monochrome
		</div>
	</div>
</body>
</html>
EOT;

echo $page;
			}
			
		} else {
			$page = <<<EOT
<html>
<title>Aqua Blue Sports Wear Website</title>
<link rel="stylesheet" href="index.css" type="text/css"/>
<body>
	<div class="main">
		<div class="head">
			<h1>Aqua Blue Sports Wear Website</h1>
		</div>
		<div class="subhead">
			<div class="navigation">
				<a href="index.php">
				<button class="butt">
					Home
				</button></a>
				<a href="catalog.php">
				<button class="butt">
					Catalog
				</button></a>
				<a href="inventory.php">
				<button class="butt">
					Inventory
				</button></a>
				<a href="register.php">
				<button class="butt">
					Register
				</button></a>
				<a href="login.php">
				<button class="butt">
					Login
				</button></a>
			</div>
		</div>
		<div class="content">
			<form action="register.php" method="post">
				<fieldset class="field">
					Email Address don't match. Please input it again.<br>
					<center>
						<h1>Register an Account</h1>
					</center>
					First Name:
					<input type="text" name="fname"/>
					<br />
					Middle Name:
					<input type="text" name="mname"/>
					<br />
					Last Name:
					<input type="text" name="lname"/>
					<br />
					Gender:
					<input type="text" name="gender"/>
					<br />
					Date of Birth:
					<input type="text" name="dob"/>
					<br />
					Username:
					<input type="text" name="uname"/>
					<br />
					Email Address:
					<input type="text" name="email"/>
					<br />
					Confirm Email Address:
					<input type="text" name="confiemail"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					Confirm Password:
					<input type="password" name="confipass"/>
					<br />
					<input type="submit" value="Submit" name="submit"/>
					<input type="submit" value="Reset" name="reset"/>
				</fieldset>
			</form>
		</div>
		<div class="footer">
			&copy; Team Monochrome
		</div>
	</div>
</body>
</html>
EOT;

echo $page;
		}
	}
	else{
		$page = <<<EOT
<html>
<title>Aqua Blue Sports Wear Website</title>
<link rel="stylesheet" href="index.css" type="text/css"/>
<body>
	<div class="main">
		<div class="head">
			<h1>Aqua Blue Sports Wear Website</h1>
		</div>
		<div class="subhead">
			<div class="navigation">
				<a href="index.php">
				<button class="butt">
					Home
				</button></a>
				<a href="catalog.php">
				<button class="butt">
					Catalog
				</button></a>
				<a href="inventory.php">
				<button class="butt">
					Inventory
				</button></a>
				<a href="register.php">
				<button class="butt">
					Register
				</button></a>
				<a href="login.php">
				<button class="butt">
					Login
				</button></a>
			</div>
		</div>
		<div class="content">
			<form action="register.php" method="post">
				<fieldset class="field">
					<center>
						<h1>Register an Account</h1>
					</center>
					First Name:
					<input type="text" name="fname"/>
					<br />
					Middle Name:
					<input type="text" name="mname"/>
					<br />
					Last Name:
					<input type="text" name="lname"/>
					<br />
					Gender:
					<input type="text" name="gender"/>
					<br />
					Date of Birth:
					<input type="text" name="dob"/>
					<br />
					Username:
					<input type="text" name="uname"/>
					<br />
					Email Address:
					<input type="text" name="email"/>
					<br />
					Confirm Email Address:
					<input type="text" name="confiemail"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					Confirm Password:
					<input type="password" name="confipass"/>
					<br />
					<input type="submit" value="Submit" name="submit"/>
					<input type="submit" value="Reset" name="reset"/>
				</fieldset>
			</form>
		</div>
		<div class="footer">
			&copy; Team Monochrome
		</div>
	</div>
</body>
</html>
EOT;
echo $page;
	}			
?>