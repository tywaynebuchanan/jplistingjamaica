<?php include ('config/dbconn.php');


session_start(); // Start of session 
$error = ''; // This variable is used to store error messages

if(isset($_POST['submit'])){
	if(empty($_POST['username']) && empty($_POST['password'])){

		 echo "Username and password can not be blank";

	}
	else
	{
		// Define username and password 
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		//connect to database 
		//$conn = mysqli_connect("localhost","root","","listing");

		// Query user in database
		
		//$query = "SELECT username, password FROM users WHERE username=? AND userpassword=? LIMIT 1";

		$query = "SELECT * FROM `users` WHERE username='$username'
and userpassword='$password'";
		//Statements to prevent hackers from hacking your site
	
		
		$result = mysqli_query($conn,$query);
    
    	$row = mysqli_num_rows($result);
    	if($row==1)
            {
				$_SESSION['login_user'] = $username;
				header("location:landing.php");
			

		}else{ 
			$error = "Username and password is invalid";
			}

mysqli_close($conn); // Close connection to the database

	}
	}


	?>	

