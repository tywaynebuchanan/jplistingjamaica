<?php include ('config/dbconn.php');


session_start(); // Start of session 
$error = ''; // This variable is used to store error messages

// If statement to check if the user did not enter their username or password
if(isset($_POST['submit'])){
	if(empty($_POST['username']) && empty($_POST['password'])){
		 echo "Username and password can not be blank";
	}
	else
	{
		// Define username and password 
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//Statements to prevent hackers from hacking your site
		$username = mysqli_real_escape_string($conn,$username);
		$password = mysqli_real_escape_string($conn,$password);

		$query = "SELECT * FROM `users` WHERE username='$username'
		and userpassword='$password'";
		
		$result = mysqli_query($conn,$query);
    
    	$row = mysqli_num_rows($result);
    	if($row==1)
            {
				$_SESSION['login_user'] = $username;
				header("location:landing.php");
			

		}else{ 
			echo'<div class = "no-space">
              <div class="notification is-warning has-text-centered">
                <strong>Opp!</strong> Your password is incorrect
              </div>
            </div>';
			}

mysqli_close($conn); // Close connection to the database

	}
	}


	?>	

