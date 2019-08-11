<?php session_start();

// variable declaration
$username = "";
$email    = "";
//$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'merito');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$class = mysqli_real_escape_string($db, $_POST['class']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
		// form validation: ensure that the form is correctly filled
	// if (empty($username)) { array_push($errors, "Username is required"); }
	// if (empty($email)) { array_push($errors, "Email is required"); }
	// if (empty($password)) { array_push($errors, "Password is required"); }

	// register user if there are no errors in the form
		// $password = md5($password);//encrypt the password before saving in the database
		$query = "INSERT INTO users (name, email,class, password)
				  VALUES('$name', '$email', '$class','$password')";
		mysqli_query($db, $query);
		mysqli_query($db,"CREATE TABLE`".$_POST['email']."`(gameid VARCHAR(50), score INT(30))");
		$_SESSION['name'] = $name;
		$_SESSION['success'] = "You are now logged in";
		
		// $rs=$db, $query2);
		// if(!$rs)
		// 	echo '<script>alert("Error occured")</script>';
		echo "<script>window.location.replace('$class.php');</script>";

}

//... // ... 

//LOGIN USER
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

		// $password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { 	
			$user = mysqli_fetch_assoc($results);
			$_SESSION['email'] =$user['email'];
			$_SESSION['name'] = $user['name'];
			$_SESSION['class'] = $user['class'];
			$class=$user['class'];
			$_SESSION['success'] = "You are now logged in";
			echo "<script>window.location.replace('$class.php');</script>";
		}else {
			// header('location: index.php');
			echo '<script>alert("Incorrect Combination");</script>';
			echo '<script>window.location.replace("index.php");</script>';
		}
}

?>