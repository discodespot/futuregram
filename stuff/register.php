<!DOCTYPE html>

<?php
$connection = mysqli_connect("localhost", "root","","futureeyes"); //connect to db
if(mysqli_connect_errno())
{
	echo "Failed!". mysqli_connect_errno();
}


if(isset($_POST['register_button'])){

	$fname = strip_tags($_POST['reg_fname']);
	$fname = str_replace(' ', '', $fname);
	$fname = ucfirst(strtolower($fname));

	$lname = strip_tags($_POST['reg_lname']);
	$lname = str_replace(' ', '', $lname);
	$lname = ucfirst(strtolower($lname));

	$email = strip_tags($_POST['reg_lname']);
	$email = str_replace(' ', '', $lname);

	$lname = strip_tags($_POST['reg_lname']);
	$lname = str_replace(' ', '', $lname);
}


?>
<html>
<head>
	<title>Welcome to Future Eyes</title>
</head>
<body>
	<form action = "register.php" method="POST">
		<p><input type="text" name="reg_fname" placeholder="First Name" required></p>
		<p><input type="text" name="reg_lname" placeholder="Last Name" required></p>
		<p><input type="email" name="reg_email" placeholder="Email" required></p>
		<p><input type="email" name="reg_email2" placeholder="Confirm Email" required></p>
		<p><input type="Password" name="reg_password" placeholder="Password" required></p>
		<p><input type="Password" name="reg_password2" placeholder="Confirm Password" required></p>
		<p><input type="Submit" name="register_button" value="Register"></p>


	</form>
</body>
</html>

<?php
/**
*
*/
class NewUser
{

	public function __construct($fname=null, $lname=null, $email=null, $password=null) {
        $this->fname = ($fname) ?: null;
        $this->lname = ($lname) ?: null;
        $this->email = ($email) ?: null;
        $this->password = ($password) ?: null;

  }
		
}
?>
