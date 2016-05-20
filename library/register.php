<?php require_once("connect.php");?>
 <link rel="stylesheet" href="regstyle.css">
 <script type="text/javascript" src="query.js"></script>
 <script type="text/javascript" src="jquery.js"></script>
<meta charset="utf-8">

<?php
if(isset($_POST["register"])){


if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];



	$query=mysql_query("SELECT * FROM users WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);

	if($numrows==0)
	{
	$sql="INSERT INTO users
			(full_name, email, username, password)
			VALUES('$full_name','$email', '$username', '$password')";

	$result=mysql_query($sql);


	if($result){
	 $message = "Account succesfully created!!!";
	} else {
	 $message = "We can't paste an information!!!";
	}

	} else {
	 $message = "This account is already used, please try another one!!!";
	}

} else {
	 $message = "All fields must be filled!!!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"false\">" . "MESSAGE: ". $message . "</p>";} ?>

<div class="container mregister">
			<div id="login">
	<h1>Registerform</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p>
		<label for="user_login">Full name<br />
		<input type="text" name="full_name" id="full_name" class="input" size="32" value=""  /></label>
	</p>


	<p>
		<label for="user_pass">Email<br />
		<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
	</p>

	<p>
		<label for="user_pass">Login<br />
		<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
	</p>

	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
	</p>


		<p class="submit">
		<input type="submit" name="register" id="register" class="button"  value= "Register" style="width:75px; height:40px;" />
	</p>

	<p class="regtext">Have you already registered?  <a href="index.php" >Sign in!</a>!</p>
</form>

	</div>
	</div>
