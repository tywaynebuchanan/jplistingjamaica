<?php

include  'config/dbconn.php';

if (isset($_REQUEST['name'])){
     

 $name = stripslashes($_REQUEST['name']);
 $name = mysqli_real_escape_string($conn,$name);

 $username = stripslashes($_REQUEST['email']);
 $username = mysqli_real_escape_string($conn,$username); 
 
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn,$password);
 //$conpassword = stripslashes($_REQUEST['conpassword']);
 //$conpassword = mysqli_real_escape_string($conn,$conpassword);
 //$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, userpassword, user_name)
VALUES ('$username', '$password', '$name')";
        $result = mysqli_query($conn,$query);
        if($result){
            header("location:regsuccess.php");
        }
    }else{
    	echo '<div class="hide-content space">
              <div class="notification is-success">
                <button class="delete"></button>
                <strong>Opp!</strong> Unknown Error! Please contact system administrator
              </div>
              
            </div>';

}






?>
