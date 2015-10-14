<?php
		$host = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$db = 'webdev9';
		
		$conn = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($db,$conn);
		if (isset($submit)) {
			$submit = $_POST['submit'];
			$uname = $_POST['uname'];
			$password = $_POST['pass'];
			$uname = mysql_escape_string($uname);
			$password = mysql_escape_string($password);
			
			$sql = "SELECT * FROM member WHERE strUserName='$uname' AND strPassWord = '$password'";
			
			IF(mysql_num_rows($sql)>0){
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
			<center>Welcome to Aqua Blue Sports Wear Website.></center>
			<br>
			<center><a href="">Change Account Information.</a></center>
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
						<h1>Log-in Account</h1>
					</center>
					<br>
					Username/Password not exists.
					Username:
					<input type="text" name="uname"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					<input type="submit" value="Log-in" name="submit"/>
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
					<center>
						<h1>Register an Account</h1>
					</center>
					Username:
					<input type="text" name="uname"/>
					<br />
					Password:
					<input type="password" name="pass"/>
					<br />
					<input type="submit" value="Log-in" name="submit"/>
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