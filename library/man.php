<?php
	require_once('connect.php')
?>
<link href="stil.css" rel="stylesheet" media="screen" type="text/css" />
<html>
<head>
	<script type="text/javascript" src="query.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
  <link rel="icon" href="icon.png">
<meta charset="UTF-8">
<title>
Library
</title>
</head>
<body>
<div class="container">
<a class="link" href="logout.php">log out</a>
<div class="head">
<div class="lefthead">
<a href="home1.php"><img src="lib.jpg" style="width:300px;height:70px;margin-top:5px;"></a>
</div>
<div class="righthead">

	<?php
	session_start();
	$count = 0;
	if (isset($_SESSION["full_name"]) and isset($_SESSION["username"])) {
		$count = 1;
	echo "<p class=\"python\">".$_SESSION["full_name"]. " " .$_SESSION["username"]."</p>";
	}
	if($count == 0){
		echo '<script>
		var x = document.getElementsByClassName("link");
		for (i=0;i<x.length;i++) {
			x[i].removeAttribute("href");
		}
	</script>';
	}

	if (isset($_POST['sign'])) {

	if (!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

			$query =mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");

			$numrows=mysql_num_rows($query);

			if($numrows!=0)
			{
				while($row=mysql_fetch_assoc($query))
			{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
			$_SESSION['full_name']=$row['full_name'];
			$_SESSION['username']=$row['username'];
			}

			if($username == $dbusername && $password == $dbpassword) {
				$message = "You are succesfully logged in!";
			}
		}
			else {

			$message =  "There is no such kind of account!";
			}

			}
			else {
			$message = "All fields must be filled!";
		}
	}
	?>
	<form action="man.php" align="center" method="POST">
	<input type="text" name="username" placeholder="Email" style="height:25px;border-radius:2px;border:1px solid black;padding-left:5px;" size="20">
	<input type="password" name="password" size="20" placeholder="Password" style="height:25px;border-radius:2px;border:1px solid black;padding-left:5px;">
	<input type="submit" class="button" id="mybutton" name="sign" value="Sign in" <?php if ($count == 1) echo 'disabled="disabled"' ?> />
	<br><span style="color:darkviolet;font-size:13px;font-weight:bold;">
	You don't have an account yet?</span> &nbsp &nbsp <a href="register.php" class="myclass">Register here!</a>
	</form>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	</div>
</div>
<div class="main">
</div>
<div class="left">
  <ul class="menu" style="font-weight:bold;">
             <li><a href="home.php">Home</a></li>
             <li><a href="categories.php">Categories</a>
             <li><a href="newbooks.php">New books</a></li>
             <li><a href="profil.php">Profile</a></li>
             <li><a href="rule.php">Add Book</a></li>
             <li><a href="adbook.php">New books</a></li>
             <li><a href="about.php">About</a></li>
  </ul>
</div>
</div>
</body>
</html>
